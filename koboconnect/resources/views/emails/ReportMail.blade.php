
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Report User</b></div>
                   
                      <div class="card-body">
                       @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                               {{ __('A fresh mail has been sent to your email address.') }}
                           </div>
                       @endif
                       <p> <b>Company Misconduct Details:</b> {!! $artisanName !!}  </p>
                       <p> <b>Name:</b> {!! $visitorname !!}  </p>
                       <p> <b>Email:</b> {!! $email !!}  </p>
                       <p> <b>Phone Number:</b>  {!! $Phn !!} </p>
                       <p> <b>Report Content :</b> {!! $content !!}</p>
                       <p>Thank You.    </p>
                       <p>Koboconnect.com</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
  