<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
</head>

@include('navbar')
<main>

    <div class="login">
        <h2>Register</h2>
        <input type="text" name="email" placeholder="Email Id">
        <input type="text" name="password" placeholder="Password">
        <button>Submit</button>
        <p>Already registered? <a href="/login">Login here </a></p>
    </div>

</main>
@include('footer')