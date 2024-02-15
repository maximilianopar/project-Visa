<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }


    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:8|max:150',
            'mensaje' => 'required|min:5|max:255',
            
        ]);

        $contacts = new Contact();
        $contacts->email = $request->get('email');
        $contacts->mensaje = $request->get('mensaje');
        $contacts->save();
        return redirect("/contacts");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}