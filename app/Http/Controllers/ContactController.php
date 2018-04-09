<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Filters\ContactFilters;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param ContactRepository $repository
     * @param ContactFilters $filters
     * @return mixed
     */
    public function index(ContactRepository $repository, ContactFilters $filters)
    {
        $title = 'Contatos - Listar';
        $contacts = $repository->getContacts($filters);
        return view('contacts.index')->with(compact('contacts', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Contatos - Cadastrar';
        return view('contacts.create')->with(compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        if ($contact->save()) {
            return redirect()->route('contact.index')
                ->with([
                    'aviso' => 'Operação efetuada com sucesso!',
                    'type' => 'success'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $title = 'Contatos - Alterar';
        return view('contacts.edit')->with(compact(['contact', 'title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $input = $request->only('name', 'telephone', 'email');
        $contact->fill($input);
        if ($contact->save()) {
            return redirect()->route('contact.index')->with([
                'aviso' => 'Operação efetuada com sucesso, contato alterado!',
                'type' => 'success'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact_db = Contact::findOrFail($contact->id);
        if ($contact_db->delete()) {
            return redirect()->route('contact.index')->with([
                'aviso' => 'Operação efetuada com sucesso, contato removido!',
                'type' => 'success'
            ]);
        }
    }
}
