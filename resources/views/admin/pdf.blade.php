<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Details - EZ Shopper</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #343a40;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            color: #FF7A00;
        }

        h2 {
            text-align: center;
            color: #444;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .order-details {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            margin-bottom: 20px;
        }

        .order-details .label {
            font-weight: bold;
            margin-right: 10px;
        }

        .order-details .value {
            font-size: 16px;
            padding: 5px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }

        .order-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
        }

        .order-summary img {
            max-width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }

        .order-summary .price {
            font-size: 22px;
            font-weight: bold;
            color: #e74c3c;
        }

        .order-summary .product-id {
            font-size: 14px;
            color: #888;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>EZ Shopper</h1>
    </div>

    <h2>Order Details</h2>
    <div class="order-details">
        <div class="label">Customer Name:</div>
        <div class="value">{{$order->name}}</div>

        <div class="label">Customer Email:</div>
        <div class="value">{{$order->email}}</div>

        <div class="label">Customer Phone:</div>
        <div class="value">{{$order->phone}}</div>

        <div class="label">Customer Address:</div>
        <div class="value">{{$order->address}}</div>

        <div class="label">Product Name:</div>
        <div class="value">{{$order->product_title}}</div>

        <div class="label">Product Price:</div>
        <div class="value">${{$order->price}}</div>

        <div class="label">Product Quantity:</div>
        <div class="value">{{$order->quantity}}</div>

        <div class="label">Payment Status:</div>
        <div class="value">{{$order->payment_status}}</div>


    </div>

    <div class="order-summary">
        <div class="product-image">
            <img src="product/{{$order->image}}" alt="Product Image">
        </div>
        <div class="price">${{$order->price}}</div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} EZ Shopper. All rights reserved.
    </div>

</div>
</body>
</html>
