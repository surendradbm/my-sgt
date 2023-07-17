<!DOCTYPE html>
<html lang="en">

<head>
    <title>Super Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href={{ asset('assets/css/auth-css/login.css') }}>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <img alt="Logo" src="{{ image('logos/sgt-icon1.png') }}" class="tt"
                style="padding: 22px;float: left" />
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="column">
                    <form action="{{route('superadmin.login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <h1>Reset your Password </h1>
                            <label for="exampleInputEmail1">Enter registered email address to send the verification
                                link</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <a class="text1" href="{{route('superadmin.login')}}" style="text-decoration: underline;"> <- Back </a>
                            <button type="submit" class="btn btn-primary" style="float: right">Send Reset Link</button>
                            <hr>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="column">
                    <img id="img1" alt="Logo" src="{{ image('logos/resetpassword.png') }}"
                        class="h-60px h-lg-75px" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
