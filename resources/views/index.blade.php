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
      <img src="img/slide2.png" class="w-full h-[70%]" />
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

  <!-- Top selling product -->
  <section class="bg-white mb-10">

    <div class="container px-6 py-10 mx-auto">
      <h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Top-Selling Products </h1>

      <div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">

        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>

        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>

        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>

        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>


        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Punjabi</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/punjabi.png" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>

        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print T-Shirt</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/t-shirt.png" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>


        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Shirt</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/shirt.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>


        <div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
          <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Made Atter</h1>
            <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
          </div>

          <img class="object-cover w-full h-48 mt-2" src="img/atter.jpg" alt="Product Pic">

          <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
            <h1 class="text-lg font-bold text-amber-500">$129</h1>
            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
          </div>
        </div>
      </div>
  </section>




  <!-- Features Card -->
  <section class="bg-white mb-10">
    <div class="container px-6 py-10 mx-auto">

      <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">

        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">

          <i class="text-4xl fa-solid fa-hand-holding-dollar"></i>


          <h1 class="text-xl font-semibold text-gray-700 capitalize ">Cash On delivery</h1>

          <p class="text-gray-500 ">
            Conveniently complete your purchase with the option to pay upon delivery, ensuring flexibility and peace of mind.
          </p>


        </div>

        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">
          <i class="text-4xl fa-solid fa-truck-fast"></i>

          <h1 class="text-xl font-semibold text-gray-700 capitalize ">Fast Home Delivery</h1>

          <p class="text-gray-500 ">
            Experience swift shipping and delivery services, ensuring your items reach you promptly so you can enjoy them sooner.
          </p>
        </div>

        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">

          <i class="text-4xl fa-solid fa-bullseye"></i>


          <h1 class="text-xl font-semibold text-gray-700 capitalize ">Best Quality Products</h1>

          <p class="text-gray-500 ">
            Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
          </p>


        </div>

        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">

          <i class="text-4xl fa-solid fa-sack-dollar"></i>


          <h1 class="text-xl font-semibold text-gray-700 capitalize ">Money Back Grantee</h1>

          <p class="text-gray-500 ">
            Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
          </p>


        </div>


        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">

          <i class="text-4xl fa-solid fa-face-smile"></i>


          <h1 class="text-xl font-semibold text-gray-700 capitalize ">100% Client Satisfiction</h1>

          <p class="text-gray-500 ">
            Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
          </p>


        </div>

        <div class="flex flex-col items-center p-6 space-y-3 text-center bg-amber-50 rounded-xl ">

          <i class="text-4xl fa-solid fa-headset"></i>


          <h1 class="text-xl font-semibold text-gray-700 capitalize ">24/7 Custommer Support</h1>

          <p class="text-gray-500 ">
            Explore a curated collection of trendy clothing and accessories to keep your wardrobe updated and on-point.
          </p>


        </div>

      </div>
    </div>
  </section>

  <!-- faq -->
  <section class=" max-w-screen-xl mx-auto">
    <h1 class="text-center text-4xl font-bold my-10">Most <span class="text-amber-500">Frequently</span> Ask Questions</h1>

    <div class="collapse collapse-plus bg-amber-50 my-6">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        How Many Life Self Will Have The Frozen Food
      </div>
      <div class="collapse-content">
        <p>Generaly Its Depends Of Which Frozen Food You Want To Buy But Our Maximum Frozen Food Life Self Will Be Avearge 1 Month.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-amber-50 my-6">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Which Payment System do you take?
      </div>
      <div class="collapse-content">
        <p>In Our System We Accpect Bangladesh Local Payment System Like Bkash, Nagad, Upay, Rocket. ALso We Accpect Master Card, Visa Card, Duel Currency Card, GPay, ApplePay For International & Online Transiction. We Are Verified By SSl Commerce. </p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-amber-50 my-6">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Can I Order Product For Home Delivery?
      </div>
      <div class="collapse-content">
        <p>Yes, You Can. We Have A Advantage Of Product Home Delivery</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-amber-50 my-6">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Can I Return Any Product After Buy?
      </div>
      <div class="collapse-content">
        <p>Yes, You Can. We Generaly Accpect Return Product Due To Any Mishappen Or Mistake From Us Within 24 Hours. And You Will Get Refund And 2% Discount From Use Every Product.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-amber-50 my-6">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Apart From This, I have One Questions. Can I?
      </div>
      <div class="collapse-content">
        <p>Yes, You Can Ask Us Any Question. Please Email Us On <i><b>info@i-store.com</b></i> & We Will Reply You Within 12 Hours</p>
      </div>
    </div>
  </section>

  <!-- review -->

  <section class="bg-white mb-16">
    <div class="container px-6 py-10 mx-auto">
      <div class="mt-6 md:flex md:items-center md:justify-between">
        <div>
          <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl ">
            What our clients are saying
          </h1>

          <div class="flex mx-auto mt-6">
            <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
          </div>
        </div>
      </div>

      <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">

        <div class="p-8  rounded-lg bg-amber-50  border-black border-2 ">
          <p class="leading-loose text-gray-500 ">
            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
            aperiam dolorum, obcaecati corrupti aspernatur a.”.
          </p>

          <div class="flex items-center mt-8 -mx-2">
            <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="img/sahoss.jpg" alt="">

            <div class="mx-2">
              <h1 class="font-semibold text-gray-800 ">Sahoss Khan</h1>
              <span class="text-sm text-gray-500 ">CEO & Founder, CSEssence</span>
            </div>
          </div>
        </div>

        <div class="p-8  rounded-lg bg-amber-50  border-black border-2 ">
          <p class="leading-loose text-gray-500 ">
            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
            aperiam dolorum, obcaecati corrupti aspernatur a.”.
          </p>

          <div class="flex items-center mt-8 -mx-2">
            <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="img/sahoss.jpg" alt="">

            <div class="mx-2">
              <h1 class="font-semibold text-gray-800 ">Sahoss Khan</h1>
              <span class="text-sm text-gray-500 ">CEO & Founder, CSEssence</span>
            </div>
          </div>
        </div>



        <div class="p-8  rounded-lg bg-amber-50  border-black border-2 ">
          <p class="leading-loose text-gray-500 ">
            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
            aperiam dolorum, obcaecati corrupti aspernatur a.”.
          </p>

          <div class="flex items-center mt-8 -mx-2">
            <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="img/sahoss.jpg" alt="">

            <div class="mx-2">
              <h1 class="font-semibold text-gray-800 ">Sahoss Khan</h1>
              <span class="text-sm text-gray-500 ">CEO & Founder, CSEssence</span>
            </div>
          </div>
        </div>


      </section>
    </div>
  </section>


</main>

@endsection