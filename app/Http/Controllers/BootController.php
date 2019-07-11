<?php

namespace App\Http\Controllers;

use App\Boot;
use Illuminate\Http\Request;

class BootController extends Controller
{

    public function index()
    {
      $boots=Boot::all();
      return view('boots.index', compact('boots'));
    }


    public function create()
    {
      return view('boots.create');
    }


    public function store(Request $request)
    {
      $validatedData=$request->validate([
        'name'=>'required|max:255|bail',
        'description'=>'required',
        'availability'=>'required|between:0,20|numeric',
        'price'=>'required|between:0,9999.99|numeric'
      ]);

      $dati = $request->all();
      $nuovo_prodotto = New Boot();
      $nuovo_prodotto->fill($dati);
      $nuovo_prodotto->save();

      return redirect()->route('boots.index');
    }


    public function show($idboot)
    {
      $boot = Boot::find($idboot);
      if (empty($boot)) {
        abort(404);
      }
      else{
        return view('boots.show',compact('boot'));
      }

    }


    public function edit($boot_id)
    {
      $boot=Boot::find($boot_id);
      if (empty($boot)) {
        abort(404);
      }
      $result=[
        'boot'=> $boot
      ];
      return view('boots.edit',$result);
    }


    public function update(Request $request, $boot_id)
    {
      $validatedData=$request->validate([
        'name'=>'required|max:255|bail',
        'description'=>'required',
        'availability'=>'required|between:0,20|numeric',
        'price'=>'required|between:0,9999.99|numeric'
      ]);

      $result = $request->all();
      $boot = Boot::find($boot_id);
      $boot->update($result);
      return redirect()->route('boots.index');
    }

    public function destroy(Boot $boot)
    {
      $boot->delete();
      return redirect()->route('boots.index');
    }
}
