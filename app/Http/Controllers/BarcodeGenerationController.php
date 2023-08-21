<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import BarcodeGeneration Model
use App\Models\BarcodeGeneration;

class BarcodeGenerationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $BarcodeGeneration = new BarcodeGeneration();
        
            $BarcodeGeneration->patient_id = $request->input('patient_id');
            $BarcodeGeneration->doctor_id = $request->input('doctor_id');
            $BarcodeGeneration->test_ids = json_encode($request->input('test_ids'));
            $BarcodeGeneration->barcode = $request->input('barcode');
        
            $BarcodeGeneration->save();
        
            return response()->json(['message' => 'Appointment scheduled successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error scheduling appointment. Please try again.']);
        }
    }
}
