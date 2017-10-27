<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mainPage(){
	    return view('pages.mainPage');
    }
	
	public function contact(){
		return view('pages.contact');
	}
	
	public function mortgageProtection(){
		return view('pages.mortgageProtection');
	}
	
	public function healthcareCoverage(){
		return view('pages.healthcareCoverage');
	}
	public function finalExpense(){
		return view('pages.finalExpense');
	}
	public function employeeLogin(){
		return view('pages.employeeLogin');
	}
	
	
	//not currently in use. old contact form
	
	public function contactData(){
		return view('pages.contactData');
	}

	
}
