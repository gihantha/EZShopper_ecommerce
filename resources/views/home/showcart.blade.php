<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
        /* Centering the table container */
        .center {
            margin: auto;
            width: 80%;
            text-align: center;
            padding: 30px;
        }

        /* Styling the table */
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden; /* To apply border-radius to table rows and cells */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            font-size: 16px;
            vertical-align: middle;
            transition: all 0.3s ease;
        }

        /* Header styling */
        .th_deg {
            background-color: #3498db;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Alternate row colors */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Row hover effect */
        tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.02); /* Slightly scale up the row */
        }

        /* Image styling */
        .img_deg {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        /* Image hover effect */
        .img_deg:hover {
            transform: scale(1.1); /* Slight zoom-in effect on hover */
        }

        /* Product Title Styling */
        .product_title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Quantity input styling */
        .quantity_input {
            width: 50px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 16px;
        }

        /* Total price styling */
        .total_deg {
            font-size: 26px;
            font-weight: bold;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            color: #333;
            text-align: center;
            animation: fadeIn 1s ease;
        }

        /* Button styling */
        .btn-danger {
            background-color: #e74c3c;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-decoration: none;
        }

        /* Button hover effect */
        .btn-danger:hover {
            background-color: #c0392b;
            transform: scale(1.05); /* Slight zoom-in effect */
        }

        /* Fade-in animation for total price */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Cart Item Section */
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-item div {
            flex: 1;
        }

        .cart-item-actions {
            text-align: right;
        }

        /* Cart Actions - Remove Icon */
        .remove-icon {
            color: #e74c3c;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .remove-icon:hover {
            color: #c0392b;
        }
    </style>



</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <!-- end slider section -->

<div class="center">
    <table>
        <tr>
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Product Quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Action</th>
        </tr>
        <?php $totalprice = 0; ?>
        @foreach($cart as $cart)
        <tr>
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quantity}}</td>
            <td>Rs. {{$cart->price}}</td>
            <td><img class="img_deg" src="/product/{{$cart->image}}"> </td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')" href="{{url('/remove_cart', $cart->id)}}">Remove Product</a></td>
        </tr>
            <?php $totalprice=$totalprice+$cart->price ?>
        @endforeach

    </table>
    <div>
        <h1 class="total_deg">Total Price : Rs. {{$totalprice}}</h1>
    </div>
    <div>
        <h1 style="font-size:25px; padding-bottom: 15px">Proceed to Order</h1>
        <a href="" class="btn btn-danger">Cash On Delivery</a>
        <a href="" class="btn btn-danger">Pay Using Card</a>
    </div>
</div>

<!-- end client section -->
<!-- footer start -->
 <!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
