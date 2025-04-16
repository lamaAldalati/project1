<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class DoctorController extends Controller
{
public function index()
{
    $appointments = Appointment::where('status', 'approved')->get();
    return view('doctors.index', compact('appointments'));
}
}
