<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .div-center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }
        label
        {
            display: inline-block;
            width: 200px;
        }
        .div_design
        {
            padding-bottom: 15px;
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

        <h1 class="font_size">Add Product</h1>
        <form action="{{url('/add_product', $products->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

        <div class="div_design" >
            <label>Product Title :</label>
            <input class="text_color" type="text" name="title" placeholder="Write title" required="">
        </div>
        <div class="div_design">
            <label>Product Description :</label>
            <input class="text_color" type="text" name="description" placeholder="Write description" required="">
        </div>
        <div class="div_design">
            <label>Product Price :</label>
            <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
        </div>
        <div class="div_design">
            <label>Discount Price :</label>
            <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price">
        </div>
        <div class="div_design">
            <label>Product Quantity :</label>
            <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Quantity" required="">
        </div>

        <div class="div_design">
            <label>Product Category :</label>
            <select class="text_color" name="category" required="">
                <option value="" selected="">Add a category here</option>
                @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="div_design">
            <label>Product Image Here :</label>
            <input type="file" name="image" required="">
        </div>
        <div class="div_design">
            <input type="submit" value="Add Product" class="btn btn-primary" >
        </div>

        </form>
    </div>

</div>

@include('admin.script')
</body>

</html>
