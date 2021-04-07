@extends('layouts.admin')


@section('content')
 

<div class="dashboard-wrapper">
 
    <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Food Items</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
                                    </ol>
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
                                <h5 class="card-header">Edit this Item</h5>
                                <div class="card-body">
                                <form class="splash-container" method="POST" action="/admin/food-items/{{$item->id}}">
                                     @csrf
                                   @method('PUT')
                                     <div class="form-group">
                                            <label for="inputtitle">Title</label>
                                            <input id="inputtitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" value="{{ old('title', $item->title) }}" required autocomplete="name"
                            name="title" required="" placeholder="Give Your item a Title" autocomplete="title">   
                            
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputprice">Price</label>
                                            <input id="inputprice" class="form-control form-control-lg @error('price') is-invalid @enderror" type="text" value="{{ old('price', $item->price) }}" required autocomplete="price"
                            name="price" required="" placeholder="Give Your item a Price" autocomplete="price">   
                            
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                                <label for="inputcategory">Category</label>
                                                <select name="category_id" class="form-control" id="inputcategory">
                                                @foreach ($categories as $category)
                                                <option value="{{$category->id}}" 
                                                    @if ($category->id == $item->category_id)
                                                    selected
                                                    @endif 
                                                >{{$category->title}}</option>
                                            @endforeach
                                                    
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" type="text" required 
                            name="description" required="" placeholder="Write a Description" autocomplete="off">{{ old('description', $item->description) }}</textarea>   
                            
                            @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputimageurl">Image URL</label>
                                            <input id="nputimageurl" class="form-control form-control-lg @error('image_url') is-invalid @enderror" type="text" value="{{ old('image_url', $item->image_url) }}" autocomplete="name"
                            name="image_url" placeholder="Add the URL to the item Image" autocomplete="title">   
                            
                            @error('image_url')
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



