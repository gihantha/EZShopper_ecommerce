<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;  /* Dark background */
            color: #e0e0e0;  /* Light text color */
            margin: 0;
            padding: 0;
        }

        .div-center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 32px;
            font-weight: bold;
            color: #fff;  /* Light color for title */
            padding-bottom: 30px;
        }

        .text_color {
            color: #fff;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #bbb;  /* Lighter label text */
            margin-bottom: 8px;
        }

        .div_design {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #444;  /* Dark border color */
            border-radius: 8px;
            font-size: 16px;
            background-color: #333;  /* Dark input background */
            color: #fff;  /* White text for inputs */
            box-sizing: border-box;
            transition: border-color 0.3s, background-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus,
        input[type="file"]:focus {
            border-color: #007BFF;
            background-color: #444;  /* Slightly lighter background when focused */
            outline: none;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert button {
            background-color: transparent;
            color: white;
            border: none;
            font-size: 20px;
            margin-left: 20px;
            cursor: pointer;
        }

        .alert button:hover {
            color: #ddd;
        }

        .main-panel {
            padding: 40px;
            background-color: #1f1f1f;  /* Dark background for the form container */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            margin: 0 auto;
        }

        .content-wrapper {
            padding: 20px;
        }

        .div_design input[type="file"] {
            padding: 8px;
            background-color: #444;  /* Match background with other inputs */
            border: 1px solid #666;  /* Dark border for file input */
        }

        .div_design select {
            background-color: #444;  /* Dark background for the dropdown */
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #555;  /* Slightly lighter border */
        }
    </style>
</head>

<body>

@include('admin.sidebar')

@include('admin.header')

<div class="main-panel">
    <div class="content-wrapper">

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get('message') }}
            </div>
        @endif


        <h1 class="font_size">Add Product</h1>

        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="div_design">
                <label for="title">Product Title :</label>
                <input type="text" id="title" name="title" placeholder="Write title" required="">
            </div>

            <div class="div_design">
                <label for="description">Product Description :</label>
                <input type="text" id="description" name="description" placeholder="Write description" required="">
            </div>

            <div class="div_design">
                <label for="price">Product Price :</label>
                <input type="number" id="price" name="price" placeholder="Write a price" required="">
            </div>

            <div class="div_design">
                <label for="dis_price">Discount Price :</label>
                <input type="number" id="dis_price" name="dis_price" placeholder="Write a discount price">
            </div>

            <div class="div_design">
                <label for="quantity">Product Quantity :</label>
                <input type="number" id="quantity" name="quantity" min="0" placeholder="Write a Quantity" required="">
            </div>

            <div class="div_design">
                <label for="category">Product Category :</label>
                <select id="category" name="category" required="">
                    <option value="" selected="">Select a category</option>
                    @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="div_design">
                <label for="image">Product Image :</label>
                <input type="file" id="image" name="image" required="">
            </div>

            <div class="div_design">
                <input type="submit" value="Add Product">
            </div>

        </form>
    </div>
</div>

@include('admin.script')

</body>

</html>
