@extends('layouts.master')
@section('content')

<main>

<section class=" p-8">
    <div class="max-w-3xl mx-auto bg-amber-50 p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
        <div class="overflow-hidden border border-gray-200 rounded-md">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 ">Product Name</th>
                        <th class="py-2 px-4 ">Quantity</th>
                        <th class="py-2 px-4 ">Price</th>
                        <th class="py-2 px-4 ">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample product -->
                    <tr>
                        <td class="py-2 px-4">Product 1</td>
                        <td class="py-2 px-4">2</td>
                        <td class="py-2 px-4">$19.99</td>
                        <td class="py-2 px-4">$39.98</td>
                    </tr>
                    <!-- Sample product -->
                    <tr>
                        <td class="py-2 px-4">Product 2</td>
                        <td class="py-2 px-4">1</td>
                        <td class="py-2 px-4">$29.99</td>
                        <td class="py-2 px-4">$29.99</td>
                    </tr>
                    <!-- Add more product rows as needed -->
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <div class="flex justify-between items-center mb-2">
                <span class="font-bold">Discount:</span>
                <span>$5.00</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="font-bold">Shipping Cost:</span>
                <span>$10.00</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="font-bold">Total:</span>
                <span>$74.97</span>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button
                class="bg-amber-500 w-full text-white px-6 py-2 rounded-md hover:bg-amber-600 focus:outline-none focus:bg-amber-600">Checkout</button>
        </div>
    </div>
</section>

</main>

@endsection