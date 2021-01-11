@extends('layouts.app')


@section('content')

    <div id="waitlist-page">
     <div class="content-box">
        <div class="row">
            <div class="col-md-6">
            <h1>Get on the List!</h1>
        <form>     
        <div class="form-group">
            <label for="firstnameinput">First Name</label>
            <input type="text" name="fname" class="form-control" id="firstnameinput" placeholder="Johnny">
        </div>  
        <div class="form-group">
            <label for="lastnameinput">First Name</label>
            <input type="text" name="lname" class="form-control" id="firstnameinput" placeholder="Doe">
        </div>    
        <div class="form-group">
            <label for="emailinput">Email address</label>
            <input type="email" class="form-control" id="emailinput" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="phoneinput">Phone #</label>
            <input type="text" class="form-control" id="phoneinput" placeholder="718-828-3847">
        </div>
        <div class="form-group">
            <label for="guestsinput">How many guests?</label>
            <select name="guest" class="form-control" id="guestsinput">
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
            <option value="1">6:00 pm</option>
            <option value="2">7:00 pm</option>
            <option value="3">8:00 pm</option>
            <option value="4">9:00 pm</option>
            <option value="5">10:00 pm</option>
            </select>
        </div>
        
        <div class="form-group">
        <button class="btn btn-primary mb-2" type="submit">Confirm</button>
            </div>
            </form>

        

            </div>
            <div class="col-md-6">This is not a problem with the reservation   </div>
        </div>                


    
@endsection