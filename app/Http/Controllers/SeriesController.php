<?php
namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                Serie::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $serie = Serie::find($id);
        if(is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie, 200);
    }

    public function update(int $id, Request $request)
    {
        $serie = Serie::find($id);
        if(is_null($serie)) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        $serie->fill($request->all());
        $serie->save();
        return $serie;
    }

    public function destroy(int $id)
    {
        $amountOfDeletedSeries = Serie::destroy($id);
        if($amountOfDeletedSeries === 0) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        return response()->json('', 204);
    }
}

