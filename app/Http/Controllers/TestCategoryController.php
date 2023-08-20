<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import TestCategory Model
use App\Models\TestCategory;

class TestCategoryController extends Controller
{
    public function index()
    {
        $testCategories = TestCategory::all();
        return response()->json($testCategories);
    }
}
