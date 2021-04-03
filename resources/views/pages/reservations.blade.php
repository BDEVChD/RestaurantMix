@extends('layouts/app')

@section('content')
    <div id="waitlist-page">
      <div class="content-box">
         <div class="row">
          <div class="col-md-6">
              <h1>Get on the List</h1>
             <form>
            <div class="form-group">
              <label for="emailinput">Email address</label>
              <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
            </div>
             <div class="form-group">
              <label for="phoneinput">Phone Number</label>
              <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="872-194-9381">
            </div>
            <div class="form-group">
              <label for="guestsinput">How Many Guests?</label>
              <select name="guests" class="form-control" id="guestsinput">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeinput">What time?</label>
              <select name="time" class="form-control" id="timeinput">
                <option value="6">6:00pm</option>
                <option value="7">7:00pm</option>
                <option value="8">8:00pm</option>
                <option value="9">9:00pm</option>
                <option value="10">10:00pm</option>
              </select>
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