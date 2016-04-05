<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //
  }
  /**
  * Speicher einen neu erstellten Eintrag.
  *
  */
  public function store()
  {
    //
  }
  /**
  * einzelnen Eintrag anzeigen anzeigen.
  *
  */
  public function show($id)
  {
    //
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
  * Eintrag updaten.
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
