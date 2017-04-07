<h1>Hello</h1>

<p>Please click the link below to reset your password
    <a href="{{ env('APP_URL')}}/reset/{{$user->email}}/{{$code}}">Password Reset</a>

</p>