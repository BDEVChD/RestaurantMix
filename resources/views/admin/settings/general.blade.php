@extends('layouts.admin')


@section('content')
 
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
    <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit General Settings </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food General Settings
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit General Setting</h5>
                                <div class="card-body">
                                <form class="splash-container" method="POST" action="/admin/settings/general">
                                     @csrf
                                     @method('PUT')
                                        <div class="form-group">
                                            <label for="inputtitle">Business Name</label>
                                            <input id="inputtitle" class="form-control form-control-lg @error('site_title') is-invalid @enderror" type="text" value="{{ old('site_title', $general_setting->site_title) }}" required autocomplete="name"
                            name="site_title" required="" placeholder="Add a Site Title" autocomplete="site_title">   
                            
                            @error('site_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputaddress1">Address 1</label>
                                            <input id="inputaddress1" class="form-control form-control-lg @error('address_1') is-invalid @enderror" type="text" value="{{ old('address_1', $general_setting->address_1) }}" required autocomplete="name"
                            name="address_1" required="" placeholder="Add a Street Address" autocomplete="address_1">   
                            
                            @error('address_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputaddress2">Address 2</label>
                                            <input id="inputaddress2" class="form-control form-control-lg @error('address_2') is-invalid @enderror" type="text" value="{{ old('address_2', $general_setting->address_2) }}" required autocomplete="address_2"
                            name="address_2" required="" placeholder="Add Apartment/Suite/Unit Number" autocomplete="address_2">   
                            
                            @error('address_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputcity">City</label>
                                            <input id="inputcity" class="form-control form-control-lg @error('city') is-invalid @enderror" type="text" value="{{ old('city', $general_setting->city) }}" required autocomplete="city"
                            name="city" required="" placeholder="Add Apartment/Suite/Unit Number" autocomplete="city">   
                            
                            @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputstate">State</label>
                                            <input id="inputstate" class="form-control form-control-lg @error('state') is-invalid @enderror" type="text" value="{{ old('state', $general_setting->state) }}" required autocomplete="state"
                            name="state" required="" placeholder="Add Apartment/Suite/Unit Number" autocomplete="state">   
                            
                            @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputzipcode">Zipcode</label>
                                            <input id="inputzipcode" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" type="text" value="{{ old('zipcode', $general_setting->address_2) }}" required autocomplete="zipcode"
                            name="zipcode" required="" placeholder="Add Apartment/Suite/Unit Number" autocomplete="zipcode">   
                            
                            @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputphonenumber">Phone Number</label>
                                            <input id="inputphonenumber" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="text" value="{{ old('phone_number', $general_setting->phone_number) }}" required autocomplete="phone_number"
                            name="phone_number" required="" placeholder="Add Apartment/Suite/Unit Number" autocomplete="phone_number">   
                            
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
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
           
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
                    </div>
              
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                 
           
            </div>
@endsection



