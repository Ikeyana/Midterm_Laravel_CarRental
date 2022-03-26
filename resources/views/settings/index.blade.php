<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Settings</title>
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
    background: url(Images/ncar.jpg);   
}
    </style>
</head>
<body>
<div class="container" > 
        <form class="" method="POST" action="/settings" >
            @csrf
            <h1 class="form__title">Add Car</h1>
            <div class="form__input-group" >
                <input type="text" id="carModel" name="carModel" class="form__input" autofocus placeholder="Enter Car Model">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="License" name="License" autofocus placeholder="Enter Car License Number">
            </div>

            <div class="form__input-group">
                <select class="form__input" name="status" id="status">
                        <option selected disabled>Select Car Status</option>
                        <option value="Available">Available for Rent</option>
                        <option value="Unavailable">Not Available for Rent</option>
                </select>
            </div>

            <button class="form__button2">Create</button>
            <p class="form__text">
            <a class="form__link"  href="/settings" >Cancel</a>
            </p>
        </form>
    </div>
    <div style="width: 350px;" class="container"> 

    <p class="form__text">
            <a >Click name to delete.</a>
    </p>
    <table border = "1">
            <tr>
            <td>Car Model</td>
            <td>License Plate Number</td>
            <td>Status</td>
          
            </tr>
            @foreach ($cars as $car)
            <tr>
            <td><a href="/settings/{{$car->id }}/delete" >{{ $car->carModel }}</a></td>
            <td>{{$car->License }}</td>
            <td>{{$car->status }}</td>   
            
            </tr>
            @endforeach
            </table> 
    <p class="form__text">
        <a href="/home">Return to dashboard.</a>
    </p>
     
    </div>
   
</body>
</html>
