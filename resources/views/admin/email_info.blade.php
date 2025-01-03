<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <style>
        /* Dark theme background */
        body {
            background-color: #181818;
            color: #E0E0E0;
            font-family: 'Arial', sans-serif;
        }

        /* Form container */
        .main-panel {
            background-color: #1E1E1E;
            border-radius: 10px;
            padding: 30px;
            margin: 30px auto;
            width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .content-wrapper {
            padding: 20px;
        }

        h1 {
            color: #FF6F61;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Form labels */
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #FFB74D;
        }

        /* Input fields */
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        /* Focus effect on input fields */
        input[type="text"]:focus {
            border-color: #FF6F61;
            background-color: #444;
            outline: none;
        }

        /* Submit button */
        .btn {
            background-color: #FF6F61;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #FF4F3C;
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(2px);
        }

        /* Spacing adjustments */
        .form-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-container div {
            margin-bottom: 15px;
        }
    </style>

    @include('admin.css')
</head>

<body>

@include('admin.sidebar')

@include('admin.header')

<div class="main-panel">
    <div class="content-wrapper">
        <h1>Send Email to {{$order->email}}</h1>
        <form action="{{url('send_user_email' ,$order->id)}}" method="POST">
            @csrf
            <div class="form-container">
                <div>
                    <label for="greeting">Email Greeting:</label>
                    <input type="text" name="greeting" id="greeting" style="">
                </div>
                <div>
                    <label for="firstline">Email First Line:</label>
                    <input type="text" name="firstline" id="firstline" style="">
                </div>
                <div>
                    <label for="body">Email Body:</label>
                    <input type="text" name="body" id="body" style="">
                </div>
                <div>
                    <label for="button">Email Button:</label>
                    <input type="text" name="button" id="button" style="">
                </div>
                <div>
                    <label for="url">Email URL:</label>
                    <input type="text" name="url" id="url" style="">
                </div>
                <div>
                    <label for="lastline">Email Last Line:</label>
                    <input type="text" name="lastline" id="lastline" style="">
                </div>
                <div>
                    <input type="submit" value="Send Email" class="btn">
                </div>
            </div>
        </form>
    </div>
</div>

@include('admin.script')

</body>

</html>
