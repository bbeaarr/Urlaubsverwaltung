<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; -> Error Exception
use Request;

use App\Urlaub;
use App\Http\Requests;


class UrlaubController extends Controller
{
  /**
  * Alle Einträge anzeigen.
  */
  public function index()
  {
    $urlaub = Urlaub::all();
    return view('urlaub.index',compact('urlaub'));
  }

  /**
  * Neuer Eintrag erstellen.
  *
  */
  public function create()
  {
    return view('urlaub.create');
  }

  /**
  * Speicher einen neu erstellten Eintrag in der Datenbank.
  *
  */
  public function store()
  {
     $urlaub=Request::all();
     Urlaub::create($urlaub);
     return redirect('urlaub');
  }

  /**
  * Eintrag editieren.
  *
  */
  public function edit($id)
  {
    //
  }

  /**
  * Eintrag in Datenbank updaten.
  *
  */
  public function update($id)
  {
    //
  }

  /**
  * Eintrag löschen.
  *
  */
  public function destroy($id)
  {
    //
  }
}
