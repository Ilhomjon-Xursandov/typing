<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();
        return view('Backend.contacts.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect()->route('admin.contacts.index')->with('success', 'Aloqa ma\'lumotlari muvofaqyatli saqlandi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::first();
        return view('Backend.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContactRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $contact->update($validated);
        return redirect()->route('admin.contacts.index')->with('success', "Ma'lumotlar yangilandi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
