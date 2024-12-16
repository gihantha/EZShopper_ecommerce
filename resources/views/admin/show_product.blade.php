<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        body {
            background-color: #121212;  /* Dark mode background */
            color: #e0e0e0;  /* Light text color */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-panel {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
            color: #fff;  /* Light text for header */
        }

        .center {
            margin: auto;
            width: 80%;
            border: 2px solid #444;
            text-align: center;
            margin-top: 40px;
            background-color: #2c2c2c;  /* Dark background for table */
            border-radius: 10px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            color: #e0e0e0;
        }

        th {
            background-color: #007BFF;  /* Blue background for headers */
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #333;  /* Dark background for even rows */
        }

        tr:nth-child(odd) {
            background-color: #444;  /* Slightly lighter background for odd rows */
        }

        .img_size {
            width: 100px;
            height: 100px;
            border-radius: 8px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-success {
            background-color: #5bc0de;
        }

        .btn-success:hover {
            background-color: #31b0d5;
        }

        .alert {
            padding: 15px;
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

    </style>
</head>

<body>

@include('admin.sidebar')

@include('admin.header')

<div class="main-panel">
    <div class="content-wrapper">

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session()->get('message') }}
            </div>
        @endif

        <h2 class="font_size">All Products</h2>

        <table class="center">
            <tr>
                <th>Product Title</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discount Price</th>
                <th>Product Image</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>

            @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}" alt="Product Image">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_product', $product->id )}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('/update_product',  $product->id)}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</div>

@include('admin.script')

</body>

</html>
