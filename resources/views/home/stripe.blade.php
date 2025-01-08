<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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


    <!-- Custom styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            padding-top: 50px;
        }

        .hero_area {
            background-color: #fff;
            padding: 30px 0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        /* Total amount header styling */
        h1 {
            text-align: center;
            color: #333;
            font-weight: 700;
            font-size: 30px;
            margin-bottom: 30px;
            padding: 10px 0;
            border-bottom: 2px solid #4CAF50;
            background-color: #f1f1f1;
        }

        .panel {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .panel-heading {
            background-color: #4CAF50;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        .panel-body {
            padding: 30px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px; /* Rounded corners */
            font-size: 18px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-transform: uppercase;
        }

        /* Hover effect for Pay Now button */
        input[type="submit"]:hover {
            background-color: #45a049;
            transform: translateY(-2px); /* Slight lift effect */
        }

        input[type="submit"]:active {
            transform: translateY(0); /* Reset the lift effect on click */
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .error {
            color: red;
            display: none;
            margin-top: 10px;
            font-size: 14px;
        }

        .card-number,
        .card-cvc,
        .card-expiry-month,
        .card-expiry-year {
            font-size: 16px;
        }

        .row {
            margin-bottom: 20px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .col-md-6 {
                width: 100%;
            }

            input[type="submit"] {
                padding: 12px 20px;
            }

            h1 {
                font-size: 24px;
            }
        }

        /* Add some styles for loading button */
        .loading {
            background-color: #e0e0e0;
            cursor: not-allowed;
        }

        .loading-text {
            visibility: hidden;
        }

        .loading-button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="hero_area">
    <!-- Header section -->
    <span>@include('home.header')</span>

    <div class="container">
        <!-- Total Amount header section -->
        <h1>Pay Using Your Card - Total Amount LKR {{$totalprice}}</h1>

        <div class="row justify-content-center pt-4">
            <div class="col-md-8">
                <div class="panel panel-default credit-card-box">

                    <div class="panel-heading">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>

                    <div class="panel-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form role="form" action="{{ route('stripe.post', $totalprice) }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 form-group required">
                                    <label class="control-label">Name on Card</label>
                                    <input class="form-control" size="4" type="text" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group card required">
                                    <label class="control-label">Card Number</label>
                                    <input autocomplete="off" class="form-control card-number" size="20" type="text" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-xs-12 col-md-4 form-group cvc required">
                                    <label class="control-label">CVC</label>
                                    <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" required>
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Expiration Month</label>
                                    <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" required>
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Expiration Year</label>
                                    <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" required>
                                </div>
                            </div>

                            <div class="error alert-danger text-center hide">
                                <p>Please correct the errors and try again.</p>
                            </div>

                            <div class="form-row">
                                <div class="col-12">
                                    <input type="submit" value="Pay Now" class="btn btn-primary btn-lg loading-button">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Stripe JS -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');

            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                $(".loading-button").addClass("loading").val("Processing...").attr("disabled", true);

                Stripe.setPublishableKey($form.data('stripe-publishable-key'));

                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error').removeClass('hide').find('.alert').text(response.error.message);
                $(".loading-button").removeClass("loading").val("Pay Now").attr("disabled", false);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>

<!-- Popper JS -->
<script src="home/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="home/js/bootstrap.js"></script>
<!-- Custom JS -->
<script src="home/js/custom.js"></script>

</body>

</html>
