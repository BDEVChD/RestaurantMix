@extends('layouts/app')

@section('content')
    <div id="waitlist-page">
      <div class="content-box">
         <div class="row">
          <div class="col-md-6">
              <h1>Get on the List</h1>
              <form class="splash-container" method="POST" action="/reservations">
                                     @csrf
            <div class="form-group">
              <label for="inputemail">Email address</label>
              <input id="inputemail" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required autocomplete="email"
                            name="email" required="" placeholder="John@gmail.com" autocomplete="fname">   
                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
             <div class="form-group">
              <label for="inputphonenumber">Phone Number</label>
              <input id="inputphone" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" value="{{ old('phone_number') }}"  autocomplete="fname"
                            name="phone_number" required="" placeholder="3425156157" autocomplete="phone_number">   
                            
                            @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
              <label for="guestsinput">How Many Guests?</label>
              <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror"  id="guestsinput">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
                  
              @error('guests_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
              <label for="timeinput">What time?</label>
              <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror"  id="timeinput">
                <option value="6">6:00pm</option>
                <option value="7">7:00pm</option>
                <option value="8">8:00pm</option>
                <option value="9">9:00pm</option>
                <option value="10">10:00pm</option>
              </select>
                  
              @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2">Confirm</button></div>
            
           
          </form>
          </div>
          <div class="col-md-6">
            <p>Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table. </p>
          
          
          </div>
        </div>
       
      </div>
  </div>
      
    
    
@endsection