<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
      //Action
    public function index()
    { // Return Response
        //may be View, josn, redirect, file
        return view('dashboard/index', [
            'user' => 'Mohamed ahmed',
        ]);
    }
}
