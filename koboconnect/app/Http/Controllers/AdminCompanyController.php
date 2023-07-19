<?php

namespace App\Http\Controllers;

use App\Models\Companiesdetail;
use App\Models\Company;
use App\Models\Paystackdata;
use App\Models\review_ratings;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class AdminCompanyController extends Controller
{

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $ema=Auth::user()->email;
        
        
        $users = DB::table('companies')->paginate(10);
        $paystack=Paystackdata::where('email',$ema)->first();
        // $paystack= DB::select('select * from paystackdatas');
//  return dd($paystack);
         return view('userdashboard.adminindexcompanydetailsdata',['users'=>$users,'paystack'=>$paystack]);
      
         
    }

 public function adminInsertPage()
{
     
    $users = DB::table('companies')->paginate(10);
    return view('userdashboard.admincompanyregistration',['users'=>$users]);
      

}


   
   
    public function view($id){
        $post_detail = Company::with('ReviewData')->find($id);
       

        return view('pages.listing.chicago-medical-center',['post_detail'=>$post_detail]) ;
    
  
    }

  


    public function searchindex(Request $request)
    {

            $r5UserIndexfron =  Company::where('company_name', 'LIKE', '%'. $request->get("BusinessName").'%')
            ->orWhere('artisan_type', 'LIKE', '%'.$request->get("artisantypeamount").'%')
            ->orWhere('company_address', 'LIKE', '%'.$request->get("location").'%')
            
            ->paginate(2);


        //    return dd( $r5UserIndexfron);

        return view('pages.listing.resultsearch', ['r5UserIndexfron'=>$r5UserIndexfron]);
    }
    public function gotocreate($id){
        $users = DB::table('companies')
        ->where('id', '=', $id)->get();
        return view('userdashboard.admincompanyregistration',['users'=>$users] );
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
$id = Auth::id();
$insert=new Company();
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
$insert->auth_user_id= $id ;
$insert->save();






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
       
        $users = DB::table('companies')
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
       
   
 
           return view('userdashboard.admincompanydetailsdata',['users'=>$users,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'r5'=>$r5,'combineAll'=>$combineAll]) ;
    

  
    }
    public function showIndex()
    {
        $v5=5;

        $r5UserIndexfron=DB::select('select COUNT(r.star_rating) as rate ,c.company_name, c.artisan_type,c.email,c.company_phone_number,c.company_address from companies as c, review_ratings as r  where star_rating  = :ratevalue AND c.auth_user_id = r.Authusersid  LIMIT 10 ' , ['ratevalue' => $v5]);
     
        return view('pages.others.index',['r5UserIndexfron'=>$r5UserIndexfron]) ;
   
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
// $insert=Company::find($id);
// $insert->email =  request('email');
// $insert->company_name = request('company_name');
// $insert->artisan_type = request('artisan_type');
// $insert->business_description = request('business_description');
// $insert->business_services1= request('Service1');
// $insert->business_services2=request('Service2');
// $insert->business_services3=request('Service3');
// $insert->business_services4=request('Service4');
// $insert->company_address = request('company_address');
// $insert->lga= request('LGA');
// $insert->State = request('State');
// $insert->nationality=request('Nationality');
// $insert->company_phone_number = request('company_phone_number');
// $insert->monday = request('Monday1');
// $insert->tuesday =request('Tuesday1');
// $insert->wedsday = request('Wedsday1');
// $insert->thursday = request('Thursday1');
// $insert->friday = request('Friday1');
// $insert->saturday=request('Saturday1');
// $insert->sunday = request('Sunday1');
// $insert->company_photo1 =$data[0] ;
// $insert->company_photo2 = $data[1];
// $insert->company_photo3 = $data[2];
// $insert->video=$file_nameVideo;
// $insert->facebook=request('facebook');
// $insert->twiter=request('twitter');
// $insert->instagram=request('instagram');
// $insert->whatsapp=request('whatsapp');
// $insert->auth_user_id= $idd ;
// $insert->save();
      
$affected = DB::table('companies')
              ->where('id', $id)
              ->update( [
                'company_name' => request('company_name'),
                
                'email' => request('email'),
                'company_name' => request('company_name'),
                'artisan_type' => request('artisan_type'),
                'business_description' => request('business_description'),
                'business_services1'=> request('Service1'),
                'business_services2'=>request('Service2'),
                'business_services3'=>request('Service3'),
                'business_services4'=>request('Service4'),
                'company_address' => request('company_address'),
                'lga'=> request('LGA'),
                'State' => request('State'),
                'nationality'=>request('Nationality'),
                'company_phone_number' => request('company_phone_number'),
                'monday' => request('Monday1'),
                'tuesday' =>request('Tuesday1'),
                'wedsday' => request('Wedsday1'),
                'thursday' => request('Thursday1'),
                'friday' => request('Friday1'),
                'saturday'=>request('Saturday1'),
                'sunday' => request('Sunday1'),
                'company_photo1' =>$data[0] ,
                'company_photo2' => $data[1],
                'company_photo3' => $data[2],
                'video'=>$file_nameVideo,
                'facebook'=>request('facebook'),
                'twiter'=>request('twitter'),
                'instagram'=>request('instagram'),
                'whatsapp'=>request('whatsapp'),
                'auth_user_id'=>$idd
                
                ]  );
      
        return redirect()
                        ->with('success','Company details updated successfully');
    
                    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $flight = Company::find($id);
       DB::select('DELETE FROM companies where id  = :ratevalue  ' , ['ratevalue' => $id]);
       

       return back()
       ->with('success','Company deleted successfully');

        // $flight->delete();
    }
}
