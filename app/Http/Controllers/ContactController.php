<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyCustomEmail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(){}
    //
    public function sendEmail(Request $request)
    {

$messages=([
    'name.required'=>'the name is required',
    'email'=>'must be email'
]);
       $data=$request->validate([
       'name'=>'required|string',
       'email'=>'required|email',
       'subject'=>'required',
       'message'=>'required'
       ],$messages);

        // Contact::create($data);
Mail::to('reham@gmail.com')->send(new MyCustomEmail($data));

       return redirect('contact')->with('success','thank you for your email');
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
