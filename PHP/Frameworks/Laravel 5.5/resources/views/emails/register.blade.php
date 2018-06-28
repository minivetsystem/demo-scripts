<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
Hello {{$user->fullname}},

<p>You have successfully registered with us. Click the below link to activate your account.</p>
<p><a href="{{Route('activate-account',['token'=>$user->activation_token])}}">Activate Your Account</a></p>
</body>
</html>