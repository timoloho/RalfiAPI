<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmw;

class BmwController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->get('limit');

        if ($limit) {
            return response()->json(Bmw::limit($limit)->get());
        }

        return response()->json(Bmw::get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'mudel' => 'required|string',
            'engine' => 'required|string',
            'image_url' => 'required|url',
        ]);

        $bmw = Bmw::create($request->all());

        return response()->json($bmw);
    }

    public function show(Bmw $Bmw)
    {
        return response()->json($Bmw);
    }

    public function update(Request $request, Bmw $Bmw)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'mudel' => 'required|string',
            'engine' => 'required|string',
        ]);

        $Bmw->update($request->all());

        return response()->json($Bmw);
    }

    public function destroy(Bmw $Bmw)
    {
        $Bmw->delete();

        return response()->json(['message' => 'Bmw deleted']);
    }

}
