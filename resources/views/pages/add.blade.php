@extends('layouts.master')
@section('content')

<main>

    <div class="max-w-xl my-10 mx-auto bg-white p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Add New Product</h2>
        <form action="" method="POST" enctype="multipart/from-data" >
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Name</label>
                <input type="text" name="pname"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    placeholder="Enter product name" required>
            </div>
            
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Category</label>
                <select  name="pcategory"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    required>
                    <option value="select" disabled selected>
                    Select Categories
                    </option>
                    <option value="Snacks">
                    Snacks
                    </option>
                    <option value="Drinks">
                    Drinks
                    </option>
                    <option value="Packaged">
                    Packaged
                    </option>
                    <option value="Frozen">
                    Frozen
                    </option>
                    <option value="Cookingz">
                    Cooking
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
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Price</label>
                <input type="number"  name="pprice"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    placeholder="Enter product price" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Image</label>
                <input type="file" name="pimage"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    accept="image/*" required>
            </div>
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product
                    Description</label>
                <textarea  name="pdescription"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    rows="4" placeholder="Enter product description" required></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-amber-500 w-full text-white px-6 py-2 rounded-md hover:bg-amber-600 focus:outline-none focus:bg-amber-600">Add
                    Product</button>
            </div>
        </form>
    </div>
</main>


@endsection