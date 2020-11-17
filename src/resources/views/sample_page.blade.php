<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recaptcha sample page</title>

    <style>
        /*===================Loading*/
        .overlay-container{
            position: relative;
        }
        .my-overlay {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, .8);
        }
        .spinner {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height:30px;
            width:30px;
            margin:auto;
            -webkit-animation: rotation .6s infinite linear;
            -moz-animation: rotation .6s infinite linear;
            -o-animation: rotation .6s infinite linear;
            animation: rotation .6s infinite linear;
            border-left:6px solid rgba(0,174,239,.15);
            border-right:6px solid rgba(0,174,239,.15);
            border-bottom:6px solid rgba(0,174,239,.15);
            border-top:6px solid rgba(0,174,239,.8);
            border-radius:100%;
        }
        @-webkit-keyframes rotation {
            from {-webkit-transform: rotate(0deg);}
            to {-webkit-transform: rotate(359deg);}
        }
        @-moz-keyframes rotation {
            from {-moz-transform: rotate(0deg);}
            to {-moz-transform: rotate(359deg);}
        }
        @-o-keyframes rotation {
            from {-o-transform: rotate(0deg);}
            to {-o-transform: rotate(359deg);}
        }
        @keyframes rotation {
            from {transform: rotate(0deg);}
            to {transform: rotate(359deg);}
        }
        /*========================*/

        /*Recaptcha*/
        .grecaptcha-badge{
            display: none;
        }
    </style>

    {{--Just include script--}}
    @include('recaptcha_script')
</head>
<body>
    <form id="test-form" action="biscolab-recaptcha/validate" method="post">
        @csrf
        <input type="text" name="test_value">

        <button type="submit" class="btn-with-recaptcha" style="position: relative" disabled>
            <span class="spinner"></span>
            <span>Send Form</span>
        </button>
    </form>

    {{--=========js========--}}
    @include('footer_js')
</body>
</html>