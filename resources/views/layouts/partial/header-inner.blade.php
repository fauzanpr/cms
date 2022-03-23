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
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo"> <a href="/"><img src="assets/images/logo.png" alt="#"></a> </div>
                </div>
             </div>
          </div>
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
             <div class="menu-area">
                <div class="limit-box">
                   <nav class="main-menu">
                      <ul class="menu-area-main">
                         <li><a href="/">Home</a> </li>
                         <li><a href="about">About</a> </li>
                         <li><a href="testmonial">Testmonial</a></li>
                         <li><a href="clients">Shop</a></li>
                         <li><a href="contact">Contact Us</a></li>
                         <li class="last"><a href="#"><img src="assets/images/search_icon.png" alt="icon"/></a></li>
                         <li><a href="login"><button class="btn btn-warning">Login</button></a></li>
                         <li><a href="register"><button class="btn btn-light">Register</button></a></li>
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
