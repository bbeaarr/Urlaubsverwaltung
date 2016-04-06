<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; -> Error Exception
use Request;

use App\Urlaub;
use App\Http\Requests;


class UrlaubController extends Controller
{
    /**
    *AJAX
    */

    public function getAllEntries() {
        $urlaub=Urlaub::all();
        return $urlaub;
    }

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
  /*public function create()
  {
    return view('urlaub.create');
  }*/

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
    $urlaub=Urlaub::find($id);
    return view('urlaub.edit',compact('urlaub'));
  }

  /**
  * Eintrag in Datenbank updaten.
  *
  */
  public function update($id)
  {
    $urlaubUpdate=Request::all();
    $urlaub=Urlaub::find($id);
    $urlaub->update($urlaubUpdate);
    return redirect('urlaub');
  }

  /**
  * Eintrag löschen.
  *
  */
  public function destroy($id)
  {
    Urlaub::find($id)->delete();
    return redirect('urlaub');
  }
}
