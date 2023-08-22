<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Patient Model
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    public function store(Request $request)
    {
        try {
            $patient = new Patient();
        
            $patient->full_name = trim(strip_tags($request->input('full_name')));
            $patient->birthday_date = trim(strip_tags($request->input('birthday_date')));
            $patient->phone_number = trim(strip_tags($request->input('phone_number')));
            $patient->gender = trim(strip_tags($request->input('gender')));
            $patient->note = trim(strip_tags($request->input('note')));
        
            $patient->save();
        
            return response()->json(['message' => 'Patient created successfully', 'id' => $patient->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error creating patient. Please try again.']);
        }
    }

    // public function update(Request $request, $id)
    // {
    //     $patient = Patient::find($id);
    //     if (!$patient) {
    //         return response()->json(['message' => 'Patient not found'], 404);
    //     }

    //     $patient->fill($request->all());
    //     $patient->save();

    //     return response()->json(['message' => 'Patient updated successfully']);
    // }

    // public function destroy($id)
    // {
    //     $patient = Patient::find($id);
    //     if (!$patient) {
    //         return response()->json(['message' => 'Patient not found'], 404);
    //     }

    //     $patient->delete();

    //     return response()->json(['message' => 'Patient deleted successfully']);
    // }
}
