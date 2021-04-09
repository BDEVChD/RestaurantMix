@extends('layouts/app')

@section('title')
About {{$settings['general']->site_title}} 
@endsection

@section('description')
Billy Burger has been around since the beginning of time. Some might say there's a Billy Burger inside all of us. 
@endsection

@section('content')
    <div id="about-page">
      <div class="content-box">
         <div class="row">
          <div class="col-md-6">
              <h1>Contact Us</h1>
              <h3>Address</h3>
            <h3>
            {{$settings["general"]->address_1}}, {{$settings["general"]->address_2}}<br>
          {{$settings["general"]->city}}, {{$settings["general"]->state}}{{$settings["general"]->zipcode}}
              </h3>
              <h3>Phone Number</h3>
              {{$settings["general"]->phone_number}}
              
               
          </div>
          <div class="col-md-6">
           <img src="/img/about-page-img.jpeg" class="img-fluid">
          </div>
        </div>
       
      </div>
  </div>
      
    
    
@endsection