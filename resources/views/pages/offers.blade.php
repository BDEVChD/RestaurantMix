@extends('layouts.app')


@section('content')

    <div id="offers-page">
     <div class="content-box">
        <div class="row">
            <div class="col-md-8 off-set-md-2">
            <h1>Sign Up To Receive Offers</h1>
        <form> 
        <div class="row">
            <div class="col-md-6"> 
                <div class="form-group">
                <label for="phoneinput">First Name</label>
                <input type="text" class="form-control" id="phoneinput" placeholder="John">
                 </div> 
            </div>
            <div class="col-md-6"> 
                <div class="form-group">
                <label for="phoneinput">Last Name</label>
                <input type="text" class="form-control" id="phoneinput" placeholder="Doe">
                </div> 
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="emailinput">Email address</label>
                    <input type="email" class="form-control" id="emailinput" placeholder="name@example.com" name="email">
                 </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phoneinput">Phone #</label>
                    <input type="text" class="form-control" id="phoneinput" placeholder="718-374-1847" name="email">
                 </div>
            </div>
            
        </div>  
        <div class="form-group">
        <button class="btn btn-primary mb-2" type="submit">Confirm</button>
            </div>
       
        
      
        
      
            </form>

        

            </div>
            <div class="col-md-6">This is not a problem with the reservation   </div>
        </div>  
                    


    
@endsection