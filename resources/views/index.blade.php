
@extends('layouts.master')
@section('content')

<main>

<!-- Carousel -->
<div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full h-1/3">
    <img src="img/slide1.png" class="w-full h-[70%]" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full  h-1/3">
    <img  src="img/slide2.png" class="w-full h-[70%]" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full  h-1/3">
    <img src="img/slide3.png" class="w-full h-[70%]" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full  h-1/3">
    <img src="img/slide4.png" class="w-full h-[70%]" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>

<!-- Features Card -->
<section class="bg-white mb-10">
    <div class="container px-6 py-10 mx-auto">

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">

            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
          
                <i class="text-5xl fa-solid fa-hand-holding-dollar"></i>
              

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Cash On delivery</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Conveniently complete your purchase with the option to pay upon delivery, ensuring flexibility and peace of mind.
                </p>

    
            </div>

            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
            <i class="text-5xl fa-solid fa-truck-fast"></i>

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Fast Delivery</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Experience swift shipping and delivery services, ensuring your items reach you promptly so you can enjoy them sooner.
                </p>

    
            </div>

            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
                
                <i class="text-5xl fa-solid fa-money-bill-trend-up"></i>
              

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Fashion Trends</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
                </p>

    
            </div>

            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
                
                <i class="text-5xl fa-solid fa-money-bill-trend-up"></i>
              

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Money Back Grantee</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
                </p>

    
            </div>


            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
                
                <i class="text-5xl fa-solid fa-money-bill-trend-up"></i>
              

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Verified Payment System</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
                </p>

    
            </div>

            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
                
                <i class="text-5xl fa-solid fa-money-bill-trend-up"></i>
              

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">24/7 Custommer Support</h1>

                <p class="text-gray-500 dark:text-gray-300">
                Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
                </p>

    
            </div>

        </div>
    </div>
</section>

<!-- faq -->
<section class="mb-20 max-w-screen-xl mx-auto">
  <h1 class="text-center text-4xl font-bold my-10">Most <span class="text-amber-500">Frequently</span> Ask Questions</h1>
<div class="collapse collapse-plus bg-base-200 my-6">
  <input type="radio" name="my-accordion-3" /> 
  <div class="collapse-title text-xl font-medium">
    Click to open this one and close others
  </div>
  <div class="collapse-content"> 
    <p>hello</p>
  </div>
</div>
<div class="collapse collapse-plus bg-base-200 my-6">
  <input type="radio" name="my-accordion-3" /> 
  <div class="collapse-title text-xl font-medium">
    Which Payment System do you take?
  </div>
  <div class="collapse-content"> 
    <p>In Our System We Accpect Bangladesh Local Payment System Like Bkash, Nagad, Upay, Rocket. ALso We Accpect Master Card, Visa Card, Duel Currency Card, GPay, ApplePay, </p>
  </div>
</div>
<div class="collapse collapse-plus bg-base-200 my-6">
  <input type="radio" name="my-accordion-3" /> 
  <div class="collapse-title text-xl font-medium">
    Click to open this one and close others
  </div>
  <div class="collapse-content"> 
    <p>hello</p>
  </div>
</div>
</section>


</main>

@endsection

