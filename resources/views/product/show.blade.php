<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>
<body style="background-color: #fae0e4;" class="flex items-center justify-center min-h-screen">

    <div class="absolute top-4 right-4">
        <a href="{{ route('product.index') }}" 
           class="bg-[#FF477E] text-white px-4 py-2 rounded-lg shadow-md font-extrabold hover:bg-pink-700 hover:text-white transition duration-300">
            BACK
        </a>
    </div>

    <div class="container mx-auto p-4 text-center max-w-4xl w-full h-auto px-4 md:px-6 lg:px-8 mt-10">

        <!-- Product Name -->
        <div style="background-color: #f7cad0; width: 500px; margin-left: 150px;" class="rounded-lg shadow-lg p-6 mb-11">
            <h2 style="color: #FF0A54;" class="text-3xl font-extrabold mb-4">{{ $product->product_name }}</h2>

            <!-- Product Price -->
            <div class="relative flex justify-center mb-4" style="border: none; outline: none;">
                <!-- Product Image -->
                <img src="{{ asset($product->pic) }}" alt="Product Image" class="w-full h-auto max-w-[400px] max-h-[400px] object-contain rounded-md shadow-md" style="border: none; outline: none; box-shadow: none;">

                <!-- Product Price -->
                <p class="absolute top-2 right-2 text-pink-600 font-bold text-xl bg-white px-2 py-1 rounded-lg shadow-md">
                    Price: ₱{{ number_format($product->price, 2) }}
                </p>
            </div>


            <!-- Description -->
            <br>
            <p class="font-semibold text-pink-600 mb-4">{{ $product->description }}</p>

            <!-- Action Buttons -->
            <div class="flex justify-around mt-6">
                <!-- Edit Button -->
                <a href="{{ route('product.edit', $product->id) }}" 
                   class="bg-[#FF477E] text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-800 hover:text-white transition duration-300 font-bold">
                    EDIT
                </a>

                <!-- Delete Button -->
                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="inline-block">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" 
                            class="bg-[#FF477E] text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-800 font-bold transition duration-300">
                        DELETE
                    </button>
                </form>                
            </div>
        </div>
    </div>
</body>
</html>
