<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __constructor()
    {
        $this->middleware('myauth');
    }

    public function show(){

        return view('home');
    }
}
