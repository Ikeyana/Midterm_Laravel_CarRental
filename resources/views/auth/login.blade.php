<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Car Rental System</title>
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
        <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
            <h1 class="form__title">Login</h1>
            <div class="form__input-group">
                <input type="text" class="form__input" id="IDnum" name="IDnum" autofocus placeholder="Enter Your ID Number">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" id="password" name="password" autofocus placeholder="Enter Your Password">
            </div>   
     
        
            <button class="form__button"  type="submit" > Login</button>
 
            <p class="form__text">
                <a class="form__link" href="registers" >Don't have an account? Create account</a>
            </p>
            </form>                
    </div>
</body>
</html>
