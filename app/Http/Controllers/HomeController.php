<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function post(Request $request)
    {
       $data = $request->all();
      return view('template', compact('data'));
    }
}
