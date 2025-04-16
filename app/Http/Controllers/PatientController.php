<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class PatientController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('patients.index',compact('appointments'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'appointment_date'=> 'required|date',
            'appointment_time'=> 'required|date_format:H:i',
        ]);

        Appointment::create($request->all());
        return redirect()->route('patients.index')->with('success','Appointment created successfully.');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('patients.edit',compact('appointment'));
    }
     
    public function update(Request $request, $id)
{

    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'appointment_date' => 'required|date',
        'appointment_time' => 'required',
    ]);


    $appointment = Appointment::findOrFail($id);
    $appointment->update($request->all());

    return redirect()->route('patients.index')->with('success', 'Appointment updated successfully.');
}
    

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
    
        return redirect()->route('patients.index')->with('success', 'Appointment deleted successfully.');
    }
}
