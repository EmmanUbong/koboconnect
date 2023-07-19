<?php

namespace App\Http\Controllers;

use App\Models\Workers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminWorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        return view('userdashboard.workersuserbiodata');
   
    }

    public function viewWorker()
    {
        $users = DB::select('select * from workers');

        return view('userdashboard.workerviewbiodata',['users'=>$users]);
    }

    public function indexWorkersDash()
    {
        // $users = DB::select('select * from workers');

        return view('workerhome');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            foreach ($image as $files) {
                $destinationPath = 'public/UserWokersImagefiles/';
                 $file_name = time() . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $file_name);
                $data[]= $file_name;
            }
        }
       
        
        // return dd($name);
      
       
 

        $id = Auth::id();
        Workers::create([
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
