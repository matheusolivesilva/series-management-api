<?php
namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodesController
{
    public function index()
    {
        return Episode::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                Episode::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $serie = Episode::find($id);
        if(is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie, 200);
    }

    public function update(int $id, Request $request)
    {
        $serie = Episode::find($id);
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
        $amountOfDeletedEpisodes = Episode::destroy($id);
        if($amountOfDeletedEpisodes === 0) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        return response()->json('', 204);
    }
}

