<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::orderBy('order')->with('questions')->get();

        if(!$tests) {
            return response()->json([
                'status' => false,
                'error' => "App has no Tests."
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $tests,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::with('questions')->find($id);

        if(!$test) {
            return response()->json([
                'status' => false,
                'error' => "Test with id {$id} not found."
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $test,
        ]);
    }
}
