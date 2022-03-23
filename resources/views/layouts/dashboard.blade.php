<!DOCTYPE html>
<html lang="en">
   <head>
      @include('layouts.partial.head')
      <script src="{{ asset('js/app.js') }}" defer></script>
   </head>
   <!-- body -->
    <body class="main-layout">
      <!-- header -->
      <header class="section">
         @include('layouts.partial.header-dashboard')
      </header>
      <!-- end header -->
      <div class="center">
        @yield('content')
      </div>

    <!-- footer start-->
      <div style="margin-top: 200px"></div>
      @include('layouts.partial.footer')
   </body>
</html>
