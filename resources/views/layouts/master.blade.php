<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Sunnah Store</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/e121db5da0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->

    <div class="navbar bg-amber-50">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
      <i class="text-xl fa-solid fa-bars"></i>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-amber-50 rounded-box w-52">
      <li class="text-xl font-bold  hover:bg-amber-500 rounded-lg"><a href="{{url('/')}}">Home</a></li>
      <li class="text-xl font-bold  hover:bg-amber-500 rounded-lg"><a href="{{url('/all-product')}}">All Products</a></li>
      <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/about')}}">About</a></li>
      <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/contact')}}">Contact</a></li>
      </ul>
    </div>
 <div class="flex items-center gap-2">
 <img class="lg:h-8 md:h-7 h-6  " src="https://i.ibb.co/WxsMKXv/image.png" alt="">
    <a class="font-bold lg:text-3xl md:texl-2xl uppercase text-xl">I-Store</a>
 </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal uppercase px-1">
    <li class="text-xl font-bold  hover:bg-amber-500 rounded-lg"><a href="{{url('/')}}">Home</a></li>
      <li class="text-xl font-bold  hover:bg-amber-500 rounded-lg"><a href="{{url('/all-product')}}">All Products</a></li>
      <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/about')}}">About</a></li>
      <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
  </div>
  <div class="navbar-end">
<button class="px-4 py-2 rounded-lg bg-amber-500 border-0 lg:text-xl text-base uppercase text-white hover:bg-black">Login</button>
</div>
</div>

@yield('content')



<!-- footer -->
<footer class="footer px-10 py-4 bg-amber-50 text-base-content grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 justify-around items-center gap-x-20">
  <nav>
    <h6 class="footer-title">Social Media</h6> 
    <a class="link link-hover">Facebook</a>
    <a class="link link-hover">Instagram</a>
    <a class="link link-hover">Twitter</a>
    <a class="link link-hover">Youtube</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Quick Links</h6> 
    <a class="link link-hover">About</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Join Affiliate</a>
    <a class="link link-hover">Carrer</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Policy</h6> 
    <a class="link link-hover">Terms & Condition</a>
    <a class="link link-hover">Refund Policy</a>
    <a class="link link-hover">Return Policy</a>
    <a class="link link-hover">Privacy Policy</a>
  </nav> 
  <nav class="mb-1">
    <h6 class="footer-title">Contact</h6> 
    <a class="link link-hover">+8801778030482</a>
    <a class="link link-hover">+8801316973995</a>
    <a class="link link-hover">support@i-store.com</a>
    <a class="link link-hover">info@i-store.com</a>
  </nav> 
</footer> 
<footer class="footer footer-center p-4 bg-amber-50 text-base-content">
  <aside>
    <p>Copyright © 2024 - All right reserved by I-Store Corporation</p>
  </aside>
</footer>

    
</body>
</html>