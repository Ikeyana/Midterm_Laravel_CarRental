<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Transaction</title>
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
<div style="width: 350px;" class="container"> 

<p class="form__text">
        <a >Click name to update status.</a>
</p>
<table border = "1">
        <tr>
        <td>Car Model</td>
        <td>License Plate Number</td>
        <td>Status</td>
      
        </tr>
        @foreach ($cars as $car)
        <tr>
        <td><a href="/transactions/{{$car->id }}/update" >{{ $car->carModel }}</a></td>
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
