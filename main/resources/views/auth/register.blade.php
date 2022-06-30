<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>CodePen - Login page</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            font-size: 1.6rem;
            overflow-x: hidden;
        }

        a {
            color: #2196f3;
            text-decoration: none;
        }

        .container {
            display: grid;
            grid-template-rows: minmax(min-content, 100vh);
            grid-template-columns: repeat(2, 50vw);
        }

        .heading-secondary {
            font-size: 3rem;
        }

        .heading-primary {
            font-size: 5rem;
        }

        .span-blue {
            color: #2196f3;
        }

        .signup-container,
        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .signup-container {
            width: 100vw;
            /* padding: 10rem 10rem; */
            padding: 4rem 10rem;
            align-items: flex-start;
            justify-content: flex-start;

            grid-column: 1 / 2;
            grid-row: 1;
        }

        .signup-form {
            max-width: 45rem;
            width: 100%;
        }

        .text-mute {
            color: #aaa;
        }

        .input-text {
            font-family: inherit;
            font-size: 1.8rem;
            padding: 3rem 5rem 1rem 2rem;
            border: none;
            border-radius: 2rem;
            background: #eee;
            width: 100%;
        }

        .input-text:focus {
            outline-color: #2196f3;
        }

        .btn {
            padding: 2rem 3rem;
            border: none;
            background: #2196f3;
            color: #fff;
            border-radius: 1rem;
            cursor: pointer;
            font-family: inherit;
            font-weight: 500;
            font-size: inherit;
        }

        .btn-login {
            align-self: flex-end;
            width: 100%;
            margin-top: 2rem;
            box-shadow: 0 5px 5px #00000020;
        }

        .btn-login:active {
            box-shadow: none;
        }

        .btn-login:hover {
            background: #2180f9;
        }

        .inp {
            position: relative;
        }

        .label {
            pointer-events: none;

            position: absolute;
            top: 2rem;
            left: 2rem;
            color: #00000070;
            font-weight: 500;
            font-size: 1.8rem;

            transition: all 0.2s;
            transform-origin: left;
        }

        .input-text:not(:placeholder-shown)+.label,
        .input-text:focus+.label {
            top: 0.7rem;
            transform: scale(0.75);
        }

        .input-text:focus+.label {
            color: #2196f3;
        }

        .input-icon {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 2rem;
            color: #00000070;
        }

        .input-icon-password {
            cursor: pointer;
        }

        .btn-google {
            color: #222;
            background: #fff;
            border: solid 1px #eee;
            padding: 1.5rem;

            display: flex;
            justify-content: center;
            align-items: center;

            box-shadow: 0 1px 2px #00000020;
        }

        .btn-google img {
            width: 3rem;
            margin-right: 1rem;
        }

        .login-wrapper {
            max-width: 45rem;
            width: 100%;
        }

        .line-breaker .line {
            width: 50%;
            height: 1px;
            background: #eee;
        }

        .line-breaker {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ccc;

            margin: 3rem 0;
        }

        .line-breaker span:nth-child(2) {
            margin: 0 2rem;
        }

        .welcome-container {
            background: #eeeeee75;
            grid-column: 2 / 3;
            grid-row: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 10rem;
        }

        .lg {
            font-size: 6rem;
        }

        .welcome-container img {
            width: 100%;
        }

        @media only screen and (max-width: 700px) {
            html {
                font-size: 54.5%;
            }
        }

        @media only screen and (max-width: 600px) {
            .signup-container {
                padding: 5rem;
            }
        }

        @media only screen and (max-width: 400px) {
            html {
                font-size: 48.5%;
            }

            .input-text:not(:placeholder-shown)+.label,
            .input-text:focus+.label {
                top: 0.6rem;
                transform: scale(0.75);
            }

            .label {
                font-size: 1.9rem;
            }
        }

        @media only screen and (max-width: 1200px) {
            .signup-container {
                grid-column: 1 / 3;
                grid-row: 1/3;
            }

            .welcome-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <main class="signup-container">
            <h1 class="heading-primary">Register !<span class="span-blue">.</span></h1>
            <p class="text-mute">Enter your credentials to creat your account.</p>
            {{-- <div class="login-wrapper">
                <a href="#" class="btn btn-google">
                    <img src="https://img.icons8.com/fluency/48/000000/google-logo.png" />
                    Log In with Google
                </a>
                <div class="line-breaker">
                    <span class="line"></span>
                    <span>or</span>
                    <span class="line"></span>
                </div>
            </div> --}}

            <form class="signup-form" method="POST" action="{{ route('register') }}">
                @csrf
                <label class="inp">
                    <input type="text" name="name" class="input-text" placeholder="&nbsp;" />
                    <span class="label">Company Name</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="email" name="email" class="input-text" placeholder="&nbsp;" />
                    <span class="label">Email</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="password" name="password" class="input-text" placeholder="&nbsp;" />
                    <span class="label">Password</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password-confirm"
                        name="password_confirmation" />
                    <span class="label">Confirm Password</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <button class="btn btn-login">Login</button>
            </form>
            <p class="text-mute">Already a member? <a href="{{ url('/login') }}">Sign up</a></p>
        </main>
        <div class="welcome-container">
            <h1 class="heading-secondary">
                Get your <span class="lg"> Employee Checked! </span>in 1 Click
            </h1>
            <img src="https://png2.cleanpng.com/sh/82506800d9e08bf14cb0a38d53322fea/L0KzQYm3VsI1N6Rug5H0aYP2gLBuTfxieKV0iJ9taYPzfLLCTfRmfppofZ92dXz3eb7shPliNZ1miOZ4cD3wf7TylgAuPZM3fqNsMEC4RIKAUsQvOmU5SaUBMkm0RYOCWME1OGI7S6Y9NT7zfri=/kisspng-laptop-display-device-multimedia-laptop-mockup-5b2f1c00541724.2441362915298140163445.png"
                alt="" />
        </div>
        {{-- Get Your Employee Checked, in 1 Click --}}
    </div>
    <!-- partial -->
    <script>
        const eyeClick = document.querySelector("[data-password]");
        const password_elem = document.getElementById("password");

        eyeClick.onclick = () => {
            const icon = eyeClick.children[0];
            icon.classList.toggle("fa-eye-slash");
            if (password_elem.type === "password") {
                password_elem.type = "text";
            } else if (password_elem.type === "text") {
                password_elem.type = "password";
            }
        };
    </script>
</body>

</html>
