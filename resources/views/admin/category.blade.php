<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        body {
            background-color: #121212; /* Dark mode background */
            color: #e0e0e0; /* Light text color */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-panel {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
        }

        .div-center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
            color: #fff; /* Light text color */
        }

        .input_color {
            background-color: #333; /* Dark input background */
            color: black; /* Light text color */
            padding: 10px;
            border: 2px solid #555;
            width: 50%;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .input_color:focus {
            border-color: #007BFF; /* Blue border on focus */
            outline: none;
        }

        .btn-primary {
            background-color: #007BFF; /* Blue button */
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .center {
            margin: auto;
            width: 70%;
            text-align: center;
            margin-top: 30px;
            border: 2px solid #444; /* Dark border */
            border-radius: 10px;
            background-color: #2c2c2c; /* Dark background */
            padding: 20px;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            color: #e0e0e0;
        }

        th {
            background-color: #007BFF; /* Blue background for headers */
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #333; /* Dark background for even rows */
        }

        tr:nth-child(odd) {
            background-color: #444; /* Slightly lighter background for odd rows */
        }

        .btn-danger {
            background-color: #d9534f; /* Red for delete */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c9302c; /* Darker red on hover */
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
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get('message') }}
            </div>
        @endif


        <div class="div-center">
            <h2 class="h2_font">Add Category</h2>

            <form action="{{url('/add_category')}}" method="POST">
                @csrf
                <input class="input_color" type="text" name="category" placeholder="Write category name" required>
                <br>
                <input type="submit" class="btn-primary" name="submit" value="Add Category">
            </form>
        </div>

        <div class="center">
            <table>
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

                @foreach($data as $data)
                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                            <a onclick="return confirm('Are you sure want to delete this ?')" class="btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>

@include('admin.script')

</body>

</html>
