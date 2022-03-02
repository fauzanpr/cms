<!-- header inner -->
@if ($headerType == 'one')
    <div class="header">
@endif
@if ($headerType == 'two')
    <div class="header_main">
        <div class="header_main">
@endif
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo"> <a href="/"><img src="assets/images/logo.png" alt="#"></a> </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
             <div class="menu-area">
                <div class="limit-box">
                   <nav class="main-menu">
                      <ul class="menu-area-main">
                         <li> <a href="/">Home</a> </li>
                         <li> <a href="about">About</a> </li>
                         <li><a href="testmonial">Testmonial</a></li>
                         <li><a href="clients">Shop</a></li>
                         <li><a href="contact">Contact Us</a></li>
                         <li class="last"><a href="#"><img src="assets/images/search_icon.png" alt="icon"/></a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @if ($headerType == 'two')
</div>
@endif
 <!-- end header inner -->
