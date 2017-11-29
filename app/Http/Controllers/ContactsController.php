<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
	
	
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['create', 'store']]);
            return redirect('/contacts');
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
	
	
	public function sendEmail(Request $request, $id)
	{
		$user = User::findOrFail($id);

		Mail::send('contacts.email', ['user' => '$user'], function ($m) use ($user) {
			$m->from('businesssitewithdatabase.com', 'ProtechMortgage Family and Health');

			$m->to($user->email, $user->name)->subject('Contact email from Protec website');
		});
	}

	
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
	    
	    
	    return redirect('/contacts/create')->with('success', 'Your message has been sent!');
	    sendEmail();
	    

		 
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
