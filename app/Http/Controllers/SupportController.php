<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use App\Support;
class SupportController extends Controller
{
    public function __constructor()
    {
        $this->middleware('myauth');
    }

    public function index(){
        return view('support');
    }
    public function complains(Request $request){
        $suser =  Session::get('user_detail');
        $complains=Support::where('created_by',$suser[0]->id)->get();
        return view('support_list',['complains'=>$complains]);
    }
    public function addcomplain(Request $request){
        $suser =  Session::get('user_detail');

        //*********     Code Start to generate Ticket No         ////
        $tcno = Support::where('project_id',$suser[0]->project_id)->where('year',date("Y"))->orderBy('ticket_no','DESC')->first();
        if($tcno == '' or $tcno == null){
            $tcno = substr(date("Y"),2).'0000001';
        }else{
            $tcno = ($tcno->ticket_no)+1;
        }
        //*********     Code End to generate Ticket No
        if($request->doc1){
            $doc1 = $request->file('doc1');
            $imageName1 = time().'.'.$doc1->getClientOriginalExtension();
            $request->doc1->move(public_path('uploads'), $imageName1);  
        }else{
            $imageName1 = '';
        }
        if($request->doc1){
            $imageName2 = time().'.'.$request->doc2->extension(); 
            $request->doc2->move(public_path('uploads'), $imageName2);
        }else{
            $imageName2 = '';
        }         ////
        $support = new Support;
        $support->project_id = $suser[0]->project_id;
        $support->title = request('title');
        $support->content = request('content');
        $support->doc1 =$imageName1;
        $support->doc1 =$imageName2;
        $support->year =date("Y");
        $support->ticket_no = $tcno;
        $support->created_by =$suser[0]->id;
        $support->save();
        Session::flash('msg','Data added successfully');
        return redirect('/supportlist');
       
    }
}
