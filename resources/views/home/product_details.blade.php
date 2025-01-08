<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" href="images/favicon.png'" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        /* Product Box Style */
        .box {
            border-radius: 15px;
            background: linear-gradient(145deg, #f0f0f0, #ffffff);
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        /* Product Image */
        .img-box img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .img-box img:hover {
            transform: scale(1.05);
        }

        /* Product Title */
        .detail-box h5 {
            font-size: 1.7rem;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
            text-transform: capitalize;
            letter-spacing: 0.5px;
        }

        /* Price Box */
        .price-box h6 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .discount-price {
            color: #e74c3c;
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .original-price {
            text-decoration: line-through;
            color: #3498db;
            font-size: 1rem;
        }

        /* Add to Cart Button */
        input[type="submit"] {
            padding: 12px 25px;
            background-color: #2ecc71;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
            transform: scale(1.05);
        }

        /* Quantity Input */
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        /* Footer Styling */
        .cpy_ {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            font-size: 0.9rem;
        }

        .cpy_ a {
            color: #2ecc71;
            text-decoration: none;
        }

        .cpy_ a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .col-sm-6, .col-md-4, .col-lg-4 {
                width: 100%;
                padding: 20px;
            }

            .box {
                padding: 20px;
            }

            .detail-box h5 {
                font-size: 1.5rem;
            }

            input[type="number"], input[type="submit"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<!-- header section -->
@include('home.header')
<!-- end header section -->

<div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px">
    <div class="box">

        <div class="img-box">
            <img src="/product/{{$product->image}}" alt="">
        </div>
        <div class="detail-box">
            <h5>{{$product->title}}</h5>

            <div class="price-box">
                @if($product->discount_price != null)
                    <h6 class="discount-price">
                        Discount Price<br>
                        Rs. {{$product->discount_price}}
                    </h6>
                    <h6 class="original-price">
                        Price
                        <br>
                        Rs. {{$product->price}}
                    </h6>
                @else
                    <h6 class="original-price" style="color: #3498db">
                        Price
                        <br>
                        Rs. {{$product->price}}
                    </h6>
                @endif
                <h6>
                    Product Category: {{$product->category}}
                </h6>
                <h6>
                    Product Details: {{$product->description}}
                </h6>
                <h6>
                    Available Quantity: {{$product->quantity}}
                </h6>
                <form action="{{url('add_cart', $product->id)}}" method="POST">
                    @csrf
                    <div class="row" style="display: flex; gap: 10px; justify-content: center;">
                        <div class="col-md-4">
                            <input type="number" name="quantity" value="1" min="1">
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Add to Cart">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- footer start -->
@include('home.footer')
<!-- footer end -->

<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
    </p>
</div>

<!-- jQuery -->
<script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('home/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('home/js/bootstrap.js')}}"></script>
<!-- custom js -->
<script src="{{asset('home/js/custom.js')}}"></script>
</body>
</html>
