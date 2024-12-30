<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text for contrast */
        }

        .title_deg {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-bottom: 40px;
            color: #f1f1f1; /* Light color for the title */
        }

        .table_deg {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: #1e1e1e; /* Dark background for the table */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .table_deg th,
        .table_deg td {
            padding: 15px;
            text-align: center;
            font-size: 16px;
        }

        .th_deg {
            background-color: #5bc0de; /* Sky blue for header */
            color: #121212; /* Dark text for contrast */
            text-transform: uppercase;
        }

        .table_deg tr:nth-child(even) {
            background-color: #2c2c2c; /* Slightly lighter dark for even rows */
        }

        .table_deg tr:hover {
            background-color: #383838; /* Slight hover effect for dark mode */
        }

        .img_size {
            width: 120px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .status {
            font-weight: bold;
        }

        .payment-status {
            color: #4caf50; /* Green for success */
        }

        .delivery-status {
            color: #ff9800; /* Orange for delivery status */
        }

        .action-btn {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .action-btn:hover {
            background-color: #0056b3;
        }

        /* Media queries for responsive design */
        @media (max-width: 1200px) {
            .table_deg th:nth-child(7),
            .table_deg td:nth-child(7),
            .table_deg th:nth-child(8),
            .table_deg td:nth-child(8),
            .table_deg th:nth-child(9),
            .table_deg td:nth-child(9) {
                display: none; /* Hide quantity, payment status, and delivery status on large screens */
            }
        }

        @media (max-width: 768px) {
            .table_deg th:nth-child(4),
            .table_deg td:nth-child(4),
            .table_deg th:nth-child(5),
            .table_deg td:nth-child(5),
            .table_deg th:nth-child(6),
            .table_deg td:nth-child(6) {
                display: none; /* Hide phone, product title, and quantity on smaller screens */
            }

            .img_size {
                width: 100px;
                height: 60px;
            }
        }

        @media (max-width: 480px) {
            .table_deg th,
            .table_deg td {
                font-size: 14px; /* Adjust font size on very small screens */
                padding: 10px;
            }

            .img_size {
                width: 80px;
                height: 50px;
            }
        }
    </style>
</head>

<body>

@include('admin.sidebar')

@include('admin.header')

<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="title_deg">All Orders</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Image</th>
                <th>Delivered</th>
            </tr>
            @foreach($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>${{$order->price}}</td>
                    <td class="status payment-status">{{ $order->payment_status }}</td>
                    <td class="status delivery-status">{{ $order->delivery_status }}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status=='processing')
                            <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are you sure this product is delivered? !!!')" class="btn btn-primary">Delivered</a>
                        @else
                            <p class="status payment-status">Delivered</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@include('admin.script')

</body>

</html>
