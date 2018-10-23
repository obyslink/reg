<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'telephone' => 'required',
        //     'height' => 'required',
        //     'dob' => 'required',
        //     'country' => 'required',
        //     'gender' => 'required',
        //     'talent' => 'required',
        //     'language' => 'required',
        //     'message' => 'required',
        //     'link' => 'required',
        //     'image' => 'required',
        //     'Question1' =>'required',
        //     'Question2' => 'required',
        //     'Question1' => 'required'
        // ]);

        var_dump($request);
    }
}
