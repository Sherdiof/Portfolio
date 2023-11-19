<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required','min:3', 'max:50'],
            'email' => ['required','email', 'max:100'],
            'reason' => 'required',
            'detail' => 'required',
            'phone' => ['required', 'min:8', 'max:15'],
        ]);

        $contacts = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'reason' => $request->reason,
            'detail' => $request->detail,
            'phone' => $request->phone,

        ]);

        return  back()->with('enviado', 'El mensaje ha sido enviado.');
        //return view('contacts.create');
        //return redirect()->route('contacts.create', ['contacts' => $contacts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('eliminar_contacto', 'El contacto ha sido eliminado.');
    }
}
