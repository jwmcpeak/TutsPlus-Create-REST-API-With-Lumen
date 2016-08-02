<?php

namespace App\Http\Controllers;

use App\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    public function index() {
        $guitars = Guitar::all();

        return response()->json($guitars);
    }

    public function find($id) {
        $guitar = Guitar::find($id);

        return response()->json($guitar);
    }

    public function create(Request $request) {
        $guitar = Guitar::create($request->all());

        return response()->json($guitar);        
    }

    public function update(Request $request, $id) {
        $guitar = Guitar::find($id);

        $updated = $guitar->update($request->all());
        
        return response()->json(['updated' => $updated]);        
    }

    public function delete($id) {
        $count = Guitar::destroy($id);
        return response()->json(['deleted' => $count == 1]);        
    }
}
