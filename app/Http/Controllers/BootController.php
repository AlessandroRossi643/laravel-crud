<?php

namespace App\Http\Controllers;

use App\Boot;
use Illuminate\Http\Request;

class BootController extends Controller
{

    public function index()
    {
      $boots=Boot::all();
      dd($boots);
      return view('index', compact('boots'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Boot $boot)
    {
        //
    }


    public function edit(Boot $boot)
    {
        //
    }


    public function update(Request $request, Boot $boot)
    {
        //
    }

    public function destroy(Boot $boot)
    {
        //
    }
}
