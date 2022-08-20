<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email  ',
            'projectdetails' => 'required|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'projectdetails' => $request->projectdetails,
        ]);
        return redirect('/');
    }
}
