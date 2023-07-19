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

class CompanyController extends Controller
{

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $ema=Auth::user()->email;
        $users = DB::select('select * from companies');
        $paystack=Paystackdata::where('email',$ema)->first();
        // $paystack= DB::select('select * from paystackdatas');
//  return dd($paystack);




         return view('userdashboard.companyregistration',['users'=>$users,'paystack'=>$paystack]);
      
         
    }

    public function userReport(Request $request)
    {
        $request->validate([
            'visitorname'=>'required',
            'email' => 'required|email',
            'Phn' => 'required',
            'artisanName' => 'required',
            'content' => 'required',
          ]);
  
          $data = [
            'visitorname'=>$request->visitorname,
            'Phn' => $request->Phn,
            'email' => $request->email,
            'artisanName' =>$request->artisanName,
            'content' => $request->content
          ];
  
          Mail::send('emails.ReportMail', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['visitorname']);
          });
  
          return back()->with(['message' => 'Email successfully sent!'],compact(['data']));
    }

    public function messageArtisan(Request $request)
    {
        $request->validate([
            'visitorname'=>'required',
            'email' => 'required|email',
            'Phn' => 'required',
            'artisanName' => 'required',
            'content' => 'required',
          ]);
  
          $data = [
            'visitorname'=>$request->visitorname,
            'Phn' => $request->Phn,
            'email' => $request->email,
            'artisanName' =>$request->artisanName,
            'content' => $request->content
          ];
  
          Mail::send('emails.contactuserMail', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['visitorname']);
          });

  
          return back()->with(['message' => 'Email successfully sent!'],compact(['data']));
    }


    public function userindex()
    {
        // $users = DB::select('select * from companies');
        
        $users = DB::table('companies')->paginate(2);

        return view('pages.others.listing-resultbc38',['users'=>$users]) ;
    
    }

    public function reviewstore(Request $request){
        $review = new review_ratings();
        $review->post_id = $request->post_id;
        $review->name    = $request->name;
        $review->email   = $request->email;
        $review->phone   = $request->phone;
        $review->comments= $request->comment;
        $review->star_rating = $request->rating;
        $review->save();
        return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    }
    public function view($id){
        $post_detail = Company::with('ReviewData')->find($id);
       

        return view('pages.listing.chicago-medical-center',['post_detail'=>$post_detail]) ;
    
  
    }

    // public function blogController()
    // {
    //    $cate= Category::orderBy('created_at','desc')->get();
    //     $posts=Post::orderBy('created_at','desc')->get();
    //     // $postComment=PostBlogUser::orderBy('created_at','desc')->get();

        
       
    //     return view('pages.others.blog',['posts'=>$posts,'cate'=>$cate]);

    // }

    // public function SlugblogController($slug)
    // {
    //     // $cate= Category::where('slug','=',$slug)->firstOrFail();
    //     $posts=Post::where('slug','=',$slug)->firstOrFail();
    //     // using join statement
    //     $countComment=DB::select('select COUNT(puser.Comment) as Comments  from post_blog_users as puser, posts as p  where slug  = :ratevalue AND puser.authors_id = p.id  LIMIT 10 ' , ['ratevalue' => $posts]);
    //     return view('pages.others.blogContent',['posts'=>$posts,]);

    // }


    public function searchindex(Request $request)
    {



           
            $r5UserIndexfron =  Company::where('company_name', 'LIKE', '%'. $request->get("BusinessName").'%')
            ->orWhere('artisan_type', 'LIKE', '%'.$request->get("artisantypeamount").'%')
            ->orWhere('company_address', 'LIKE', '%'.$request->get("location").'%')
            
            ->paginate(2);


        //    return dd( $r5UserIndexfron);

        return view('pages.listing.resultsearch', ['r5UserIndexfron'=>$r5UserIndexfron]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        
        
//  validate the files
//  $this->validate($request,[
//     'image' =>'required',
//     'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',  
   

// ]);

// $request->validate([
//     'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
// ]);

$file=$request->file('video');
$destinationPath = 'public/Videouploads/';
$file_nameVideo = 'profile-'.time().$file->getClientOriginalName() ;
$file->move($destinationPath,$file_nameVideo);
// $file_name=$file->getClientOriginalName();

// dd($file_name);



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


// return dd("good");





// $file=$request->file('video');
// return dd($file);
// $destinationPath = 'public/Videosfiles/';
// $file_name = 'profile-'.time().$file->getClientOriginalName() ;
// $file->move($destinationPath, $file_name);

      
//  return dd($file_name);

      

    
   
    // $id = Auth::id();
  
        
    //   Company::create([
    //         'email' =>  request('email'),
    //         'company_name' => request('company_name'),
    //         'artisan_type' => request('artisan_type'),
    //         'business_description' => request('business_description'),
    //         'business_services1'=> request('Service1'),
    //         'business_services2'=>request('Service2'),
    //         'business_services3'=>request('Service3'),
    //         'business_services4'=>request('Service4'),
    //         'company_address' => request('company_address'),
    //         'lga'=> request('LGA'),
    //         'State' => request('State'),
    //         'nationality'=>request('Nationality'),
    //         'company_phone_number' => request('company_phone_number'),
    //         'monday' => request('Monday1'),
    //         'tuesday' => request('Tuesday1'),
    //         'wedsday' => request('Wedsday1'),
    //         'thursday' => request('Thursday1'),
    //         'friday' => request('Friday1'),
    //         'saturday'=>request('Saturday1'),
    //         'sunday' => request('Sunday1'),
    //         'company_photo1' =>$data[0] ,
    //         'company_photo2' => $data[1] ,
    //         'company_photo3' => $data[2],
    //         'video'=>$file_name,
    //         'facebook'=>request('facebook'),
    //         'twiter'=>request('twitter'),
    //         'instagram'=>request('instagram'),
    //         'whatsapp'=>request('whatsapp'),
    //         'auth_user_id'=> $id ,

    //     ]);



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
        //pages.listing.chicago-medical-center
        // $users = Company::findOrFail($id);
        $users = DB::table('companies')
            ->where('id', '=', $id)->get();

            // $users2 = DB::table('user_biodatas')
            // ->where('id', '=', $id)->get();
         
            $combineAll= DB::table('user_biodatas')
            ->where('id', '=', $id)->get();

            // $combineAll=UserBiodata::find(1)->company()->where('id', $id);

            // return dd( $combineAll);
            // $combineAll=Company::find(1)->userBiodata()->get();
            // foreach ($combineAll as $combineAll) {
                //
                // return  dd( $combineAll);
            // }
 

  
    

             
            // $post_detail = Company::with('userBiodata')->find($id);
            // if ( $users->email==$users2->email)
            // {

               
            // }

         
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
       
   
        // $r1= DB::table('review_ratings')->where('star_rating', '=', $v3)->count();

        // $r1 = DB::select('select * from review_ratings')->where('star_rating','=',3);
        // return view('userdashboard.companyregistration',['r1'=>$r1]);
     
    //    return dd($rr1);
 
           return view('pages.listing.chicago-medical-center',['users'=>$users,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'r5'=>$r5,'combineAll'=>$combineAll]) ;
    

  
    }
    public function showIndex()
    {
        // $v5=5;
        $id=null;

        // $users = DB::table('companies')
        // ->where('id', '=', $id)->get();

        // $r5UserIndexfront = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue  LIMIT 10' , ['ratevalue' => $v5]);
       

        // $users = DB::table('companies');
       
        // $r5Indexfront= DB::table('companies')
        // ->join('review_ratings', 'companies.auth_user_id', '=', 'review_ratings.Authusersid')
       
        // ->select('companies.*', 'review_ratings.star_rating')
        // ->get();


        // $r5Indexfront= DB::table('review_ratings')
        // ->join('companies', 'companies.auth_user_id', '=', 'review_ratings.Authusersid')
       
        // ->select('review_ratings.*', DB::raw('COUNT(review_ratings.star_rating) as rate','companies.company_name'))
        
        // ->havingRaw('rate = 5')
        // ->groupBy('review_ratings.star_rating')
       
        // ->get();

//  $r5UserIndexfron=DB::select('select COUNT(r.star_rating) as rate ,c.company_name, c.artisan_type,c.email,c.company_phone_number,c.company_address from companies as c, review_ratings as r  where star_rating  = :ratevalue OR c.auth_user_id = r.Authusersid  LIMIT 10 ' , ['ratevalue' => $v5]);
        // $r5UserIndexfron=DB::select('select COUNT(r.star_rating) as rate ,c.company_name, c.artisan_type,c.email,c.company_phone_number,c.company_address from companies as c, review_ratings as r  where star_rating  = :ratevalue and c.auth_user_id = r.Authusersid  LIMIT 10  ' , ['ratevalue' => $v5]);
        // $r5UserIndexfront = DB::select('select c.company_name, c.artisan_type,rate.star_rating  as realrate  FROM companies as c, review_ratings as rate where c.auth_user_id = rate.Authusersid GROUP BY c.company_name HAVING COUNT(rate.star_rating) >6 ');
        // ->where('COUNT(star_rating) ', '=',  $v5)
        // return dd( $r5UserIndexfron);
// return dd( $r5UserIndexfron);






// $data = DB::table('companies')
// ->join('review_ratings', 'companies.id', '=', 'review_ratings.Authusersid')
// ->select('companies.company_name','companies.artisan_type','companies.nationality', 'review_ratings.star_rating')
// ->get();


$r5UserIndexfron= DB::table('companies')
        ->join('review_ratings', function ($join) {
            $join->on('companies.id', '=', 'review_ratings.id')
                 ->where('review_ratings.star_rating', '=', 5);
        })
        ->get();

// return dd($r5UserIndexfron);

        return view('pages.others.index',['r5UserIndexfron'=>$r5UserIndexfron]) ;
   
    }

    /**
     * Update the specifed resource in storage.
     *i
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
