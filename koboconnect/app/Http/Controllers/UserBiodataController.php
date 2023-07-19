<?php

namespace App\Http\Controllers;

use App\Models\Paystackdata;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from user_biodatas');
        $ema=Auth::user()->email;
     
        $paystack=Paystackdata::where('email',$ema)->first();
       
        


         return view('userdashboard.userbiodata',['users'=>$users,'paystack'=>$paystack]);
   
    }


    // public function paystackdata(){

         
    //     $r5 = DB::select('select email  from paystackdatas where email  = :ratevalue ' , ['ratevalue' => $useremail]);

    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            foreach ($image as $files) {
                $destinationPath = 'public/UserImagefiles/';
                 $file_name = time() . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $file_name);
                $data[]= $file_name;
            }
        }
       
        
        // return dd($name);
      
       
 

        $id = Auth::id();
        UserBiodata::create([
            'Name' => request('names'),
            'Email' => request('email'),
            'DOB'=>request('DOB'),
            'company_photo1' =>$data[0],
            'Gender' => request('gender'),
            'Status'=>request('Status'),
            'Address' => request('Address'),
            'LGA' => request('LGA'),
            'State' => request('State'),
            'Nationality' => request('Nationality'),
            'Religion' => request('religion'),
            'Qualification' => request('qualification'),
            'Next_Of_Kin' => request('NextOfKin'),
            'Address_Next_Of_Kin' => request('NextOfKinAddress'),
            'Phone_Number_Next_Of_Kin'=>request('NextOfKinPhone_Number'),
            'auth_user_id'=>$id,
            'Relationship' => request('relationship'),
        ]);

    
           
      


     
         return back()->with('success', 'Your form has been submitted.');
    
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
