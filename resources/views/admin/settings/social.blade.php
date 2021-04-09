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
                            <h2 class="pageheader-title">Edit social Settings </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food social Settings
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
                                <h5 class="card-header">Social Accounts</h5>
                                <div class="card-body">
                                <form class="splash-container" method="POST" action="/admin/settings/social">
                                     @csrf
                                     @method('PUT')
                                        <div class="form-group">
                                            <label for="inputfacebook_url">Facebook Profile URL</label>
                                            <input id="inputfacebook_url" class="form-control form-control-lg @error('facebook_url') is-invalid @enderror" type="text" value="{{ old('facebook_url', $social_setting->facebook_url) }}" required autocomplete="name"
                            name="facebook_url" required="" placeholder="Add a Description" autocomplete="facebook_url">   
                            
                            @error('facebook_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtwitter_url">Twitter URL</label>
                                            <input id="inputtwitter_url" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" type="text" value="{{ old('twitter_url', $social_setting->twitter_url) }}" required autocomplete="name"
                            name="twitter_url" required="" placeholder="Add a Profile" autocomplete="keywords">   
                            
                            @error('twitter_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputinstagram_url">Instagram URL</label>
                                            <input id="inputinstagram_url" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" type="text" value="{{ old('instagram_url', $social_setting->instagram_url) }}" required autocomplete="name"
                            name="instagram_url" required="" placeholder="Add an Instagram Profile" autocomplete="keywords">   
                            
                            @error('tinstagram_url')
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



