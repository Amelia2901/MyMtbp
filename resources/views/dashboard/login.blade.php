<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/websiteStyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sansita+Swashed:wght@300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=visibility_off" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            height: 80vh;
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            /* background-color: #583e31; */
        }

        .container-fluid {
            max-width: 395px;
            /* max-height: fit-content; */
            margin: auto;
            height: 500px;
            background-color: white;
            box-shadow: 2px 2px 2px rgb(169, 160, 160);
            padding: 0px 50px 50px 50px;
            font-family: Alata;
            margin-right: 330px;
            border-radius: 10px;
        }

        .form-floating {
            margin-bottom: 10px;
        }

        .btn-primary {
            /* background-image: linear-gradient(to top,rgb(38, 93, 196),rgb(143, 159, 216)) !important; */
            /* background-color: #674738; */
            background-color: #804B2A;
            border: none;
        }

        .btn-primary:hover {
            /* background-color :rgb(214, 206, 206); */
            background-color: #583e31 !important;
            color: white;
            transition: background 0.3s ease;/
        }

        .btn-primary:focus{
            background-color: #583e31 !important;

        }

        .login {
            display: block;
            align-content: center;
            margin-left: 260px;
            /* background-image: linear-gradient( to top, #583e31,rgb(182, 161, 152)); */
            background-color: #804B2A;
            margin-top: 2px;
            width: 450px;
            height: 501px;
            border-radius: 10px;
        }

        .alert-danger {
        position: absolute;
        width: 100%;
        top: -1px;
        left: 0;
        z-index: 1000;
        text-align: center;
    }

    </style>
</head>

<body>
    <div class="login">
        <img src="{{ asset('assets/img/website/3dmas.png') }}"
            style="align-items: center; margin-bottom: 0px; width:300px; height: 430px; margin-left: 50px;">
    </div>
    <div class="container-fluid">
        <form action="{{ route('login') }}" method="post" style="position: relative;">
            @csrf
            @if ($errors->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('loginError') }}
                </div>
            @endif

            @error('captcha')
                <div class="alert alert-danger" style="margin-bottom: -10px;">
                    Captcha is not correct, please try again.
                </div>
            @enderror
        
            <img src="{{ asset('assets/img/website/logo_masjid.svg') }}" alt="logo_masjid"
                style="width:200px; height: 200px; margin-left: 50px; ">
            <h3 style="text-align: left; margin-top:-20px; font-size:15px;"> Login to your Account</h3>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Username" name="login" required>
                <label>Username</label>
            </div>
            <div class="form-floating" style="position: relative;">
                <input type="password" class="form-control" placeholder="Password" id="passwordKu" name="password"
                    required>
                <label>Password</label>
                <i class="fa-solid fa-eye" id="togglePassword"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
            </div>
            @if (!config('captcha.disable'))
                <div class="form-floating d-flex align-items-center">
                    <input type="text" class="form-control" placeholder="Captcha" name="captcha" required>
                    <label>Captcha</label>
                    <img src="{{ captcha_src() }}" alt="captcha" style="margin-right: 10px;">
                </div>
            @endif
            <button class="btn btn-primary w-100" style="margin-top:10px;">Sign in</button>
        </form>
    </div>

    <script>
        const passwordField = document.getElementById("passwordKu");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", function() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
        });
    </script>

</body>

</html>
