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

        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color
        {
            color: black;
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
        <div class="div-center">
            <h2 class="h2_font">Add Category</h2>

            <form action="{{url('/add_category')}}" method="POST">

                @csrf

                <input class="input_color" type="text" name="category" placeholder="Write category name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
            </form>
        </div>
    </div>
</div>

@include('admin.script')
</body>

</html>
