<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.others.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'visitorname'=>'required',
            'email' => 'required|email',
            'Phn' => 'required',
            'content' => 'required',
          ]);
  
          $data = [
            'visitorname'=>$request->visitorname,
            'Phn' => $request->Phn,
            'email' => $request->email,
            'content' => $request->content
          ];
  
          Mail::send('emails.TestMail', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['visitorname']);
          });
  
          return back()->with(['message' => 'Email successfully sent!'],compact(['data']));
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
