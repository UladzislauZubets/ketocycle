<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use App\Models\Question;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Question::orderBy('order')->with('answers')->get();

        if(!$tests) {
            return response()->json([
                'status' => false,
                'error' => "App has no Questions."
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
        $test = Question::with('answers')->find($id);

        if(!$test) {
            return response()->json([
                'status' => false,
                'error' => "Question with id {$id} not found."
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $test,
        ]);
    }
}
