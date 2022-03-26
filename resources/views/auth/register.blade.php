<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="src/css/main.css">
    <style>
        body {
    --color-primary: #009579;
    --color-primary-dark: #007f67;
    --color-secondary: #252c6a;
    --color-error: #cc3333;
    --color-success: #4bb544;
    --border-radius: 4px;

    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    background: url(Images/car.jpg);
    background-size: cover;
}
    </style>
</head>
<body>
    <div class="container">      
        <form class="" id="createAccount" method="POST" action="{{ route('register') }}">
            <h1 class="form__title">Create Account</h1>
            <div class="form__input-group" >
            @csrf
                <input type="text" id="IDnum" name="IDnum" class="form__input" autofocus placeholder="Enter Your ID Number">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="name" name="name" autofocus placeholder="Enter Your Name">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="role" name="role" autofocus placeholder="Enter Your Role">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" id="password" name="password" required autocomplete="new-password" autofocus placeholder="Password">
            </div>
            <div class="form__input-group">
                <input id="password-confirm" type="password" class="form__input" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="Confirm password">
            </div>
            <button class="form__button" type="submit">Save</button>
            <p class="form__text">
                <a class="form__link" href="/" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
  </div>
</body>
</html>

