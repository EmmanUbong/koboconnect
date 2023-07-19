<?php

namespace App\Http\Controllers;

use App\Models\Paystackdata;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AminUserBiodataController extends Controller
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
        // $r5 = DB::select('select email  from paystackdatas where email  = :ratevalue ' , ['ratevalue' => $useremail]);
        // $paystack = DB::select('select *  from paystackdatas where email  = :ratevalue ' , ['ratevalue' => $useremail]);
 
        // $paystack= DB::select('select * from paystackdatas ');
        $paystack=Paystackdata::where('email',$ema)->first();
       

         return view('userdashboard.adminindexuserbiodata',['users'=>$users,'paystack'=>$paystack]);
   
    }

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

    public function gotocreate($id){
        $users = DB::table('user_biodatas')
        ->where('id', '=', $id)->get();
        return view('userdashboard.adminuserbiodata',['users'=>$users] );
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('user_biodatas')
            ->where('id', '=', $id)->get();

         
         
            $combineAll= DB::table('user_biodatas')
            ->where('id', '=', $id)->get();

          

         
        $v1=1;
        $v2=2;
        $v3=3;
        $v4=4;
        $v5=5;
      


        //     $r5 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid AND Authusersemail=:authuseremail' , ['ratevalue' => $v5,'authuserid'=>$users,'authuseremail'=>'emmanuelubong30@gmail.com']);
        $r1 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v1,'authuserid'=>$id]);
        $r2 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v2,'authuserid'=>$id]);
        $r3 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v3,'authuserid'=>$id]);
        $r4 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v4,'authuserid'=>$id]);
        $r5 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v5,'authuserid'=>$id]);
       
   
 
           return view('userdashboard.adminindexuserbiodata',['users'=>$users,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'r5'=>$r5,'combineAll'=>$combineAll]) ;
    

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
       

$file=$request->file('video');
$destinationPath = 'public/Videouploads/';
$file_nameVideo = 'profile-'.time().$file->getClientOriginalName() ;
$file->move($destinationPath,$file_nameVideo);


if ($request->hasFile('image')) {
    $image= $request->file('image');
    foreach ($image as $files) {
    
        $destinationPath = 'public/CompanyImagesfiles/';
        $file_name = 'profile-'.time().$files->getClientOriginalName() ;
        $files->move($destinationPath, $file_name);
        $data[] = $file_name;
      
    }
}
$idd = Auth::id();
$insert=UserBiodata::find($id);
$insert->email =  request('email');
$insert->company_name = request('company_name');
$insert->artisan_type = request('artisan_type');
$insert->business_description = request('business_description');
$insert->business_services1= request('Service1');
$insert->business_services2=request('Service2');
$insert->business_services3=request('Service3');
$insert->business_services4=request('Service4');
$insert->company_address = request('company_address');
$insert->lga= request('LGA');
$insert->State = request('State');
$insert->nationality=request('Nationality');
$insert->company_phone_number = request('company_phone_number');
$insert->monday = request('Monday1');
$insert->tuesday =request('Tuesday1');
$insert->wedsday = request('Wedsday1');
$insert->thursday = request('Thursday1');
$insert->friday = request('Friday1');
$insert->saturday=request('Saturday1');
$insert->sunday = request('Sunday1');
$insert->company_photo1 =$data[0] ;
$insert->company_photo2 = $data[1];
$insert->company_photo3 = $data[2];
$insert->video=$file_nameVideo;
$insert->facebook=request('facebook');
$insert->twiter=request('twitter');
$insert->instagram=request('instagram');
$insert->whatsapp=request('whatsapp');
$insert->auth_user_id= $idd ;
$insert->save();
      
        
      
        return redirect()
                        ->with('success','User  details updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight =UserBiodata::find($id);
 
        $flight->delete();
    }
}
