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
                    {{-- <form action="/login" method="POST"> --}}
                    <form action="{{ route('superadmin.login.check') }}" method="POST">
                        @csrf
                        {{-- @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif --}}
                        <div class="form-group">
                            <h1>Welcome back!</h1>
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp" placeholder="Enter email" value="admin@admin.com" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <div class="password-input">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                    placeholder="Password" value="admin" required>
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="form-group mb-10">
                            <label for="userType" class="mb-2 form-label" userType</label>
                            <input type="userType" class="form-control mb-2" name="userType" value="0"  hidden required>  
                        </div>
                        <div class="form-group">
                            <a class="text1" href="{{route('superadmin.password_request')}}" style="text-decoration: underline;">Forgot
                                Password?</a>
                            <button type="submit" class="btn btn-primary" style="float: right">Sign In</button>
                            <hr>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="column">
                    <img id="img1" alt="Logo" src="{{ image('logos/login-icon.png') }}"
                        class="h-60px h-lg-75px" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>
