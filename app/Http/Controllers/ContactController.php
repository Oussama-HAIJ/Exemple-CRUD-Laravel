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
        //
        $contacts = Contact::all();
        return view('contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData=$request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts|email',
        ]);
        $contact = Contact::create($validateData);
        return redirect('/contacts')->with('success','Contact crée avec succés');

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
        $contact = Contact::findOrFail($id);
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatData = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:contacts|email',
        ]);
        Contact::whereId($id)->update($validatData);
        return redirect('/contacts')->with('success','Contact mise à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contacts')->with('success','Contact supprimer avec succés');

    }
    public function search (Request $request)
    {
        //
        //$contact=Contact::whereId($request->search);

        dd($request->search);
        return redirect('/contacts')->with('success','Contact supprimer avec succés');

    }
}
