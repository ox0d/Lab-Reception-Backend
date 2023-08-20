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
        $patient = new Patient([
            'full_name' => $request->input('full_name'),
            'birthday_date' => $request->input('birthday_date'),
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'note' => $request->input('note'),
        ]);
        $patient->save();

        return response()->json(['message' => 'Patient created successfully']);
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
