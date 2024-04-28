<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myFirstcontroller extends Controller
{
    public function viewwithdata() {
        $mydata = 10;
        $myarray = array('Toyota', 'Honda', 'Hyundai', 'Wuling' );
        
        return view('folderview.viewdata', ['mydata' => $mydata, 'myarray' => $myarray]);
    }

    public function helloworld() {
        echo "Hello World from controller";
    }

    public function withparam($id) {
        echo 'nilai param adalah '.$id;
    }

    public function showmyview() {
        return view('myview');
    }

    public function index() {
        return view('admin.home');
    }
}
