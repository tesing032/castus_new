<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
   public function contact()
    {
        return view('contact');
    } 

   
        /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactPost(Request $request) 
   {

    
    $request->validate([ 'username' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
  // Contact::create($request->all());
   Contact::create([
    'username' => $request->input('username'),
     'email' => $request->input('email'),
     'address' => $request->input('address'),
     'service' => $request->input('service'),
     'phone' => $request->input('phone'),
     'message' => $request->input('message'),
]);
   
     //     Mail::send('email',
//        array(
//            'name' => $request->get('nafn'),
//            'Phone' => $request->get('Phone'),
//            'email' => $request->get('email'),
//            'Address' => $request->get('Address'),
//            'bodyMessage' => $request->get('message')
//        ), function($message)
//    {
//        $message->from('bobby@bobbyiliev.com');
//        $message->to('bobby@bobbyiliev.com', 'Bobby')->subject('Bobby Site Contect Form');
//    });
    return back()->with('success', 'Thank you for contacting us!'); 
   }
}

