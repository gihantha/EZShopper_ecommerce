<!DOCTYPE html>
<html lang="en">
<head>
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


    <style type="text/css">
        /* Centering the table container */
        .center {
            margin: auto;
            width: 85%;
            padding: 50px 20px;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .center h2 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Styling the table */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
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
            font-size: 16px;
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

        /* Cancel Order Button */
        .btn-danger {
            background-color: #e74c3c;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Button hover effect */
        .btn-danger:hover {
            background-color: #c0392b;
            transform: scale(1.05); /* Slight zoom-in effect */
        }

        /* Disabled 'Not Allowed' text */
        .not-allowed {
            color: #bbb;
            font-weight: bold;
            font-size: 16px;
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

        /* Empty cart message */
        .empty-cart-message {
            font-size: 20px;
            color: #e74c3c;
            font-weight: bold;
            padding: 30px;
            text-align: center;
        }

    </style>
</head>
<body>

<!-- header section starts -->
@include('home.header')

<!-- Table for Orders -->
<div class="center">
    <h2>Order Details</h2>
    <table>
        <thead>
        <tr>
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Payment Status</th>
            <th class="th_deg">Delivery Status</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Cancel Order</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order as $order)
            <tr>
                <td class="product_title">{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>${{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td class="order-image">
                    <img class="img_deg" src="product/{{$order->image}}" alt="Product Image" />
                </td>
                <td>
                    @if($order->delivery_status == 'processing')
                        <a onclick="return confirm('Are you sure to cancel this order?')" class="btn-danger" href="{{url('cancel_order', $order->id)}}">Cancel Order</a>
                    @else
                        <span class="not-allowed">Not Allowed</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- jQuery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- Popper.js -->
<script src="home/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="home/js/bootstrap.js"></script>
<!-- Custom JS -->
<script src="home/js/custom.js"></script>

</body>
</html>
