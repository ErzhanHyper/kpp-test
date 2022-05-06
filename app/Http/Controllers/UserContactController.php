<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::join('user_contacts', 'user_contacts.contact_id', '=', 'contacts.id')
            ->where( 'user_contacts.user_id', '=', Auth::user()->getAuthIdentifier())->get();

        return view('profile', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $user_contacts = UserContact::where('contact_id', $id)->where('user_id', Auth::user()->getAuthIdentifier())->get();
        if($user_contacts->count() == 0) {
            $uContact = new UserContact();
            $uContact->user_id = Auth()->user()->getAuthIdentifier();
            $uContact->contact_id = $id;
            $uContact->save();
            return redirect('user_contacts');
        }else{
            return redirect()->back()->withErrors(['msg' => 'Контакт уже был добавлен!']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function show(UserContact $userContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function edit(UserContact $userContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserContact $userContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uContact = UserContact::find($id);
        $uContact->delete();

        return redirect()->back();
    }
}
