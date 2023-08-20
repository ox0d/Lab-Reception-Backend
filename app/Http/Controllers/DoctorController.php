<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Patient Model
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return response()->json($doctors);
    }
}
