<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController
{
    protected $class;

    public function index()
    {
        return $this->class::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                $this->class::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $class = $this->class::find($id);
        if(is_null($class)) {
            return response()->json('', 204);
        }
        return response()->json($class, 200);
    }

    public function update(int $id, Request $request)
    {
        $class = $this->class::find($id);
        if(is_null($class)) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        $class->fill($request->all());
        $class->save();
        return $class;
    }

    public function destroy(int $id)
    {
        $amountOfDeletedObjects = $this->class::destroy($id);
        if($amountOfDeletedObjects === 0) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        return response()->json('', 204);
    }
}

