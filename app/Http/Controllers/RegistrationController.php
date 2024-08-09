<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;



class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations',
            'phone_number' => 'required|string|max:20',
            'reason' => 'required|string',
            'photo' => 'required|image|max:1024',
            'instagram_link' => 'required|url',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Registration::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'reason' => $request->reason,
            'photo_path' => $photoPath,
            'instagram_link' => $request->instagram_link,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil.');
    }
}

