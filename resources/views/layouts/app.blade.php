<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       @include('includes/metatags')

      
    </head>
    <body>
    <section id="app-layout">
        @include('includes/side-menu')
        <section id="content-section">
        @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
   @endif  
            @yield('content')
        
  </section>
  
    </body>
</html>
