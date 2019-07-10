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
      $boot->delete();
      return redirect()->route('boots.index');
    }
}
