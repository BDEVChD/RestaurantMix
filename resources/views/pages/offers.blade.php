@extends('layouts/app')

@section('content')
    <div id="offers-page">
      <div class="content-box">
         <div class="row">
          <div class="col-md-8 offset-md-2">
              <h1>Sign up to Receive Notifications</h1>
              <form class="splash-container" method="POST" action="/offers">
                                     @csrf
                                        <div class="form-group">
                                            <label for="inputfname">First Namez</label>
                                            <input id="inputfname" class="form-control form-control-lg @error('fname') is-invalid @enderror" type="text" value="{{ old('fname') }}" required autocomplete="fname"
                            name="fname" required="" placeholder="John" autocomplete="fname">   
                            
                            @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="inputlname">Last Namez</label>
                                            <input id="inputlname" class="form-control form-control-lg @error('lname') is-invalid @enderror" type="text" value="{{ old('lname') }}" required autocomplete="fname"
                            name="lname" required="" placeholder="Doe" autocomplete="lname">   
                            
                            @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="inputemail">Email</label>
                                            <input id="inputemail" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required autocomplete="email"
                            name="email" required="" placeholder="John" autocomplete="email">   
                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="inputphone">Phone</label>
                                            <input id="inputphone" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" value="{{ old('phone_number') }}"  autocomplete="fname"
                            name="phone_number" required="" placeholder="3425156157" autocomplete="phone_number">   
                            
                            @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                        
                                       
                                       
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
          </div>
          <div class="col-md-6">
            
          
          
          </div>
        </div>
       
      </div>
  </div>
      
    
    
@endsection