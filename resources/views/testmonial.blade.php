@extends('layouts.masterLayout')
@section('content')
      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2> Testmonial</h2>
                     <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
    <li data-target="#testimonial" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="assets/images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="assets/images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="assets/images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="assets/images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="assets/images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="assets/images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- end Our  Clients -->

      <!-- Javascript files-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery-3.0.0.min.js"></script>
      <script src="assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- javascript -->
      <script src="assets/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>
@endsection
