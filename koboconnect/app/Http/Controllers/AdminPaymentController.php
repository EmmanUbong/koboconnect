<?php

namespace App\Http\Controllers;

use App\Models\Paystackdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{  
   public  $Am=[];
 

    public function pay()
    {
        return view('pay.index');
    }
   
    public function make_payment()
    { 
        // $Am=[];
        $artisantypeamount=request('artisantypeamount');
        
        if($artisantypeamount=="Japanese"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push( $this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }else if ($artisantypeamount=="Germans"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }


        else if ($artisantypeamount=="Tricycle"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Roughcarpenter"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Trimcarpenter"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Cabinetmaker"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Framer"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Roofer"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Shipscarpenters"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Joister"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="ElectJapanese"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="ElectGermans"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="ElectTricycle"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="ElectHousehold"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="PanelJapanese"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="PanelGermans"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="PanelTricycle"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Vulcanizer"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="HVAC"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Plumber"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Bricklayer"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Builder"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Householdpainter"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Vehiclespraypainter"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Interiordecorator"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Tiler"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Welder"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Tutors"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Drycleaner"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="MakeupArtist"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Baker"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Cobbler"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Fashiondesigner"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Sculptors"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Photographer"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Butcher"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Herbdoctor"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Kioskowner"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
        else if ($artisantypeamount=="Pettytrader"){
            
            $PayArtisan=100* 1000;
           
            $data =  array_push($this->Am, $PayArtisan);
           // return dd($data[0]);
            //return view('pay.index')->with(compact(['data']));

        }
       
        // $data = $response->data;
        // $useremail=$data->customer->email;
        
        $useremail=request('email');
        $users = DB::table('paystackdatas')->where('email', '=',  $useremail)->get();
        $users1 = DB::table('paystackdatas')->where('email', '<>',  $useremail)->get();
       
        $r5 = DB::select('select email  from paystackdatas where email  = :ratevalue ' , ['ratevalue' => $useremail]);

    
        //  foreach ($r5 as $d) {
        //     $name = $d->email;
        //     return dd( $name);
        //  };

  
      
        // elseif( $users1){


        $formData = [
            'email' => request('email'),
            'artisantypeamount'=>request('artisantypeamount'),
            'amount' =>$this->Am[0],
            //'amount' => request('amount') * 100,
            'callback_url' => route('pay.callback')
        ];
    
        $pay = json_decode($this->initiate_payment($formData));
       
    //    check user in database
        foreach ($r5 as $d) {
            $name = $d->email;
            if ($name==$useremail)
            {
                // echo("<script>alert('User already registered');</script>") ;
                return back()->withError("User already registered");
           
            }
        
         };


         if ($pay) {
            if ($pay->status) {
                return redirect($pay->data->authorization_url);
            } else {
                return back()->withError($pay->message);
            }
        } else {
            return back()->withError("Something went wrong:check network connection");
        }
    }

    public function payment_callback()
    {
      
        
      
        $response = json_decode($this->verify_payment(request('reference')));
      
        
        if ($response) {
            if ($response->status) {
                $data = $response->data;
                $useremail=$data->customer->email;
                $emm="1e";
               
                // $users = DB::table('paystackdatas')->where('email', '=',  $useremail)->get();
                // if ($users)
                // {
                //     echo("<script>alert('User already registered');</script>") ;
                // }
                // else {
                Paystackdata::create([
                    
                    'email' => $data->customer->email,
                    'status' => $data->status,
                    'reference' => $data->reference,
                    'amount' => $data->amount,
                    'fees' => $data->fees,
                    'channel' => $data->channel,
                    'currency' => $data->currency,
                    'transaction_date' => $data->transaction_date,
                    'ip_address' => $data->ip_address,
                    'fees' => $data->fees,
                   
                    
                ]);

            // }
            
            return view('userdashboard.PaymentRealcallback')->with(compact(['data']));
                // return view('pay.callback_page')->with(compact(['data']));
            } else {
                return back()->withError($response->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }

    public function initiate_payment($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
    }

    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return  $response;
    }
}
