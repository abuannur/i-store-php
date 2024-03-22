@extends('layouts.master')
@section('content')

<main>
    <div class="mt-6">
        <form class="flex lg:flex-row md:flex-row flex-col justify-between gap-4">
            <div class="flex lg:w-[30%] md:w-[50%] w-[80%] justify-center items-center container mx-auto">
                <select class='w-full px-4 py-3 border-4 border-amber-500 focus:outline-amber-500 rounded-md rounded-r-none' name='category'>
                    <option value="All">
                    All
                    </option>
                    <option value="Shirt">
                    Shirt
                    </option>
                    <option value="T-Shirt">
                    T-Shirt
                    </option>
                    <option value="Punjabi">
                    Punjabi
                    </option>
                    <option value="Jeans">
                    Jeans
                    </option>
                    <option value="Atter">
                    Atter
                    </option>

                </select>
                <h1 class="w-full bg-amber-500 py-[12px] rounded-l-none px-5 text-center rounded-md text-white text-xl font-bold">Category</h1>
            </div>

            <div class="flex lg:w-[30%] md:w-[50%] w-[80%] container mx-auto ">
                <input class='w-full px-4 py-3 text-gray-800 border-4 rounded-r-none border-amber-500 focus:outline-amber-500 rounded-md' name='name' id='name' type='text'  placeholder='Search Product Here.........' />

                <button type="submit" class="px-6 py-2  rounded-l-none bg-amber-500 rounded-md text-white text-xl font-bold">Search</button>
            </div>
        </form>
    </div>

    <section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Executive & Trending Products </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
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
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Jeans</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/jeans.png" alt="Product Pic">

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



<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Punjabi Collection </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
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
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Punjabi</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/punjabi.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>



<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our T-shirt Collection </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
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
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print T-Shirt</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/t-shirt.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Shirt Collection </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
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
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Shirt</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/shirt.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Jeans Collection </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Jeans</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/jeans.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Jeans</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/jeans.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Jeans</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/jeans.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Hand Print Jeans</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/jeans.png" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Atter Collection </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
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







</main>


@endsection