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
                            <h2 class="pageheader-title">Edit SEO Settings </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food seo Settings
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
                                <h5 class="card-header">Business Description</h5>
                                <div class="card-body">
                                <form class="splash-container" method="POST" action="/admin/settings/seo">
                                     @csrf
                                     @method('PUT')
                                        <div class="form-group">
                                            <label for="inputdescription">Business Name</label>
                                            <input id="inputdescription" class="form-control form-control-lg @error('description') is-invalid @enderror" type="text" value="{{ old('description', $seo_setting->description) }}" required autocomplete="name"
                            name="description" required="" placeholder="Add a Description" autocomplete="Description">   
                            
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputkeywords">Keywords</label>
                                            <input id="inputkeywords" class="form-control form-control-lg @error('keywords') is-invalid @enderror" type="text" value="{{ old('keywords', $seo_setting->keywords) }}" required autocomplete="name"
                            name="keywords" required="" placeholder="Add a Street Address" autocomplete="keywords">   
                            
                            @error('keywords')
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



