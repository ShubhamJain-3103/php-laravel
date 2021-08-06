<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
</head>

@include('navbar')

<main>
    @for($i=0; $i<3; $i++) <div class="blog-view">
        <img src="images/b.png" alt="letter-b">
        <div>
            <h3>Blog Heading</h3>
            <h4>Author : Shubham Jain</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus eligendi veritatis unde
                labore
                nostrum quaerat saepe reiciendis a consectetur et velit quis minus doloremque illum, delectus odio
                ab
                vero?
                <br />
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quam, culpa enim, suscipit
                obcaecati facilis velit est delectus numquam libero distinctio, consequuntur officia temporibus
                vitae atque ea vel blanditiis? Ab?
            </p>
            <a href="/blog">View Blog
                <span>&#8594;</span></a>
        </div>
        </div>
        @endfor
</main>

@include('footer')