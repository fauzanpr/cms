<!DOCTYPE html>
<html lang="en">
   <head>
      @include('layouts.partial.head')
   </head>
   <!-- body -->
   @if ($layout == 'main')
    <body class="main-layout ">
   @endif
   @if ($layout == 'about-pape')
   <body class="main-layout about_pape">
   @endif
   @if ($layout == 'product')
   <body class="main-layout product_pagr">
   @endif
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         @include('layouts.partial.header-inner')
      </header>
      <!-- end header -->
      @yield('content')
    <!-- footer start-->
      @include('layouts.partial.footer')
   </body>
</html>
