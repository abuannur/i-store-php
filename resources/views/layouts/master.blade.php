<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Islamic Store</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/e121db5da0.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar bg-amber-50">
  <div class="flex-1">
 <!-- Drop down hamburger -->
 <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        
      <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/food-product')}}">Food & Grocery</a></li>
        <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a  href="{{url('/fashion-product')}}">Cloths & Fashion</a></li>
        <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a  href="{{url('/electronics-product')}}">Electronics</a></li>
      </ul>
    </div>

    <!-- Logo -->
    <Link to="/">
    <div class="flex items-center gap-2">
 <img class="lg:h-8 md:h-7 h-6  " src="img/logo.png" alt="">
    <a href="{{url('/')}}" class="font-bold lg:text-2xl md:texl-2xl uppercase text-xl">I-Store</a>
 </div>
 </Link>
 <!-- nav menu -->
 <div class=" hidden lg:flex ml-16">
    <ul class="menu menu-horizontal px-1">
    <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/food-product')}}">Food & Grocery</a></li>
        <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/fashion-product')}}">Cloths & Fashion</a></li>
        <li class="text-xl font-bold hover:bg-amber-500 rounded-lg"><a href="{{url('/electronics-product')}}">Electronics</a></li>
        
    </ul>
  </div>


  </div>







  <div class="flex-none gap-2">
    <div class="form-control">
      <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
    </div>
    <!-- dropdown cart -->
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          <span class="badge badge-sm indicator-item">8</span>
        </div>
      </div>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-amber-50 shadow">
        <div class="card-body">
          <span class="font-bold text-lg">8 Items</span>
          <span class="text-amber-500 text-base">Subtotal: $999</span>
          <div class="card-actions">
            <button class="btn btn-sm bg-amber-500 hover:bg-black text-white btn-block">View cart</button>
          </div>
        </div>
      </div>
    </div>
<!-- dropdown dashboard -->
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="img/user.png" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-amber-50 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Dashboard</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
    
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
    <p>Copyright © 2024 - All right reserved by Islamic Store Corporation</p>
  </aside>
</footer>

    
</body>
</html>