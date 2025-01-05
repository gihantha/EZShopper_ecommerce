<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style>
        /* Comment section styles */
        .comment-section {
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Comments Header Styling */
        .comment-section h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #f4a646;
            color: white;
            border-radius: 5px;
            text-transform: uppercase;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        }

        /* All Comments Header Styling */
        .comment-section h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 25px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        }

        .comment-section form textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .comment-section form textarea:focus {
            border-color: #007bff;
        }

        .comment-section .btn {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .comment-section .btn:hover {
            background-color: #3e91ea;
        }

        .comment-item {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .comment-item:hover {
            transform: translateY(-5px);
        }

        .comment-item b {
            font-size: 16px;
            color: #333;
        }

        .comment-item p {
            font-size: 14px;
            color: #666;
            margin: 10px 0;
        }

        .comment-item a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .comment-item a:hover {
            color: #0056b3;
        }

        .replyDiv {
            display: none;
            background-color: #f1f1f1;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .replyDiv textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .replyDiv .btn {
            margin-top: 10px;
        }

        .replyDiv .close-btn {
            background-color: #ff6347;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->
</div>

<!-- why section -->
@include('home.why')
<!-- end why section -->

<!-- arrival section -->
@include('home.new_arrival')
<!-- end arrival section -->

<!-- product section -->
@include('home.product')
<!-- end product section -->

<!-- comment and reply system start here -->
<div class="comment-section">
    <h1>Comments</h1>
    <form action="{{url('add_comment')}}" method="POST">
        @csrf
        <textarea placeholder="Comment something here" name="comment"></textarea>
        <br>
        <input style="margin-bottom: 20px"type="submit" class="btn btn-primary" value="Post Comment">
    </form>

    <h2>All Comments</h2>
    @foreach($comment as $comment)
        <div class="comment-item">
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>
            <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

            @foreach($reply as $rep)
                @if($rep->comment_id == $comment->id)
                    <div class="comment-item" style="margin-left: 40px;">
                        <b>{{$rep->name}}</b>
                        <p>{{$rep->reply}}</p>
                        <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach

    <div class="replyDiv">
        <form action="{{url('add_reply')}}" method="POST">
            @csrf
            <input type="text" id="commentId" name="commentId" hidden>
            <textarea placeholder="Write your reply here..." name="reply"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Reply</button>
            <a href="javascript:void(0);" class="btn btn-primary close-btn" onclick="reply_close(this)">Close</a>
        </form>
    </div>
</div>
<!-- comment and reply system end here -->

<!-- subscribe section -->
@include('home.subscribe')
<!-- end subscribe section -->

<!-- client section -->
@include('home.client')
<!-- end client section -->

<!-- footer start -->
@include('home.footer')
<!-- footer end -->

<!-- jQuery -->
<script type="text/javascript">
    function reply(caller) {
        document.getElementById('commentId').value = $(caller).attr('data-Commentid');
        $('.replyDiv').insertAfter($(caller).closest('.comment-item'));
        $('.replyDiv').show();
    }

    function reply_close(caller) {
        $('.replyDiv').hide();
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

<script src="home/js/jquery-3.4.1.min.js"></script>
<script src="home/js/popper.min.js"></script>
<script src="home/js/bootstrap.js"></script>
<script src="home/js/custom.js"></script>
</body>
</html>
