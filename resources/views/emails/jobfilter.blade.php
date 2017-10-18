<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: blink;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;

        }
    </style>
</head>
<body>
<p>Account Activation</p>
<div class="content">
    <p style="text-align: left">Congratulations your account has successfully been created.Click on
        <a href="{{ env('APP_URL')}}/activate_jobfilter/{{$user->email}}/{{$code}}">Activate Account</a>
        and activate your account to enable you to logon to WorthJobs.
        To get started navigate to <a class="links" href="{{env('APP_URL')}}/posts">DashBoard.</a> From here you can
        view all other functions available to you.
    </p>
    <p style="text-align: left">
        Regards,<br>
        Development Team
    </p>
</div>
</body>
</html>
