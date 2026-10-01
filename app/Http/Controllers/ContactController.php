<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = "Naam: " . $request->input('name') . "\n" .
                "E-mail: " . $request->input('email') . "\n" .
                "Bericht: " . $request->input('message') . "\n\n";

        Storage::disk('local')->put('contactform.txt', $data);

        return back()->with('success', 'Bericht opgeslagen!');
    }
}
