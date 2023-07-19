<?php

namespace App\Http\Controllers;

use App\Models\Workers;
use App\Models\WorkersToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorkersTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::select('select * from workers_tokens');
        $ema=Auth::user()->email;
     
        $paystack=Workers::where('email',$ema)->first();
      
        return view('userdashboard.usertokenbiodata',['users'=>$users,'paystack'=>$paystack]);
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $useremail=request('ArtisanReferenceToken');
        $r5 = DB::select('select reference	  from paystackdatas where reference  = :ratevalue ' , ['ratevalue' => $useremail]);

        // return dd($r5[0], $useremail);
    if($r5[0]==$r5[0]){
        $id = Auth::id();
        WorkersToken::create([
            
            'Email' => request('email'),
            'tokenNumber'=>request('ArtisanReferenceToken'),
            'auth_user_id'=>$id,
            
        ]);

    
        return back()->with('success', 'Your Artisan Reference Token has been submitted.');
    
    } 
    else{
        
        return back()->with('success', 'Your Artisan Reference Token has not been submitted.***');
    
    }
  
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
