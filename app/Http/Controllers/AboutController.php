<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    //
    function index($id){
        // return "I'm from AboutController an id = $id";
        return view("AboutPage",compact('id'));
    }
}
