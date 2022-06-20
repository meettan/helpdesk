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
        $imageName1 = time().'.'.$request->doc1->extension();  
        $imageName2 = time().'.'.$request->doc2->extension();  
        $request->image->move(public_path('uploads'), $imageName1);
        $request->image->move(public_path('uploads'), $imageName2);
        $support = new Support;
        $support->project_id = $suser[0]->project_id;
        $support->title = request('title');
        $support->content = request('content');
        $support->doc1 =$imageName1;
        $support->doc1 =$imageName2;
        $support->ticket_no = 1;
        $support->created_by =$suser[0]->id;
        $support->save();
        return redirect('/support');
        // Support::create([
        //     'title'=>$request->title,
        // ])

        // $gygy=Support::find($id);
        // $gygy->doc1 =$imageName1;
        // $gygy->doc1 =$imageName2;
        // $gygy->save();
    }
}
