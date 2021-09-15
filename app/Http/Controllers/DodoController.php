<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dodo;

class DodoController extends Controller
{
    //
   public function index(Request $request)
    {
        $items = Dodo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request){
        $this->validate($request, Dodo::$rules);
        $todo = new Dodo;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request){
        $this->validate($request, Dodo::$rules);
        $todo = Dodo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    

}