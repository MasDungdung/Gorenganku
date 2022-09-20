<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Gorenganku</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootsrap/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <img src="#" alt="Logo" width="100" height="100">
                            <h3 class="mb-1">GORENGANKU</h3>
                            <hr>
                            <form action="#" class="form-floating" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('username')
                                        is-invalid
                                    @enderror" id="floatingInput" placeholder="username" name="username" required>
                                    <label for="floatingInput">Username</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control @error('password')
                                        is-invalid
                                    @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mt-2 mb-2">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
