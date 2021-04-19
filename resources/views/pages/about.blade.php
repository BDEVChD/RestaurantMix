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
              <h1>About Page</h1>
              <p >
              Nostrud magna pickled butcher retro, adaptogen kitsch flexitarian occaecat mustache 3 wolf moon officia DIY lomo. Butcher woke thundercats photo booth. Tumeric cred kogi, asymmetrical nostrud fanny pack crudite est slow-carb esse hella kinfolk. Bicycle fugiat deserunt, everyday carry consequat yuccie single-origin coffee sint health goth tofu roof party chartreuse master cleanse.</p>
               
          </div>
          <div class="col-md-6">
           <img src="/img/about-page-image.jpeg" class="img-fluid">
          </div>
        </div>
       
      </div>
  </div>
      
    
    
@endsection