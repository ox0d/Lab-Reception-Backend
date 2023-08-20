<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Test Model
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return response()->json($tests);
    }
}
