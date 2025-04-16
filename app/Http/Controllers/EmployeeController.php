<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class EmployeeController extends Controller
{

public function index()
{
    $appointments = Appointment::where('status', 'pending')->get();
    return view('employees.index', compact('appointments'));
}

public function approve(Appointment $appointment)
{
    $appointment->update(['status' => 'approved']);
    return redirect()->route('appointments.index')->with('success', 'Appointment approved.');
}

public function reject(Appointment $appointment)
{
    $appointment->delete();
    return redirect()->route('appointments.index')->with('success', 'Appointment rejected.');
}

}
