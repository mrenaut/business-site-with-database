<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactsController extends Controller
{
	
	
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['create', 'store']]);
	}

	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $contacts = Contact::orderBy('id', 'desc')->paginate(20);
	 //   $contacts = Contact::all();
        return view('contacts.contactData')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
	 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		   'firstName' => 'required',
		   'lastName' => 'required',
		   'email' => 'required',
		   'phone' => 'required',
		   'message' => 'required',
	   ]);
	    
	    //Create Contact
	    $contact = new Contact;
	    $contact->firstName = $request->input('firstName');
	    $contact->lastName = $request->input('lastName');
	    $contact->email = $request->input('email');
	    $contact->phone = $request->input('phone');
	    $contact->mortgageProtection = $request->input('mortgageProtection');
	    $contact->healthcareCoverage = $request->input('healthcareCoverage');
	    $contact->finalExpense = $request->input('finalExpense');
	    $contact->message = $request->input('message');
	    $contact->save();
	    
	    
		    Mail::send(['text'=>'mail'],['name', 'Melissa'], function($message){
			    $message->to('businesssitewithdatabase@gmail.com', 'to Protec')->subject('Contact from Protec');
			    $message->from('businesssitewithdatabase@gmail.com', 'from Protec');
		    }); 

	    return redirect('/contacts/create')->with('success', 'Your message has been sent!');
	    
		 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
