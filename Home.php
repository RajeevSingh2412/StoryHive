<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Story Writter</title>
  </head>
  <body>
    <header>
        <div class="navbar">
            <div class="logo">
                <i class="fa-regular fa-pen-to-square fa-flip-both fa-2xl" color="#DDDDDD"></i>
                <p class="heading" >Story Writer</p>
            </div>
            <div class="buttons">
                <div class="home">
                    <i class="fa-sharp fa-solid fa-house fa-xl"></i>
                    <p class="home-text">Home</p>
                </div>
                <div class="dailydiary">
                    <i class="fa-solid fa-book fa-xl"></i>
                    <p class="home-text">Daily Diary</p>
                </div>
                <div class="dailydiary">
                    <i class="fa-solid fa-plus fa-xl"></i>
                    <p class="home-text">Stories</p>
                </div>
                <div class="dailydiary">
                    <i class="fa-solid fa-user fa-xl"></i>
                    <p class="home-text">Account</p>
                </div>
            </div>

        </div>
    </header>







	<script src="index.js"></script>
  </body>
</html>


<style>
    body{
        background-color:#0F1111;
        margin:0px;
        border:border-box;
        font-family:arial;
    }
    .navbar{
        width:100%;
        height:70px;
        background-color:#1b1f1f;
        display:flex;
        justify-content:space-evenly;

    }
    .logo{
        display:flex;
        align-items:center;
        width:25%;
    }
    .heading{
       font-size:2rem;
       font-weight:bold;
       color:#DDDDDD;
       padding-left:20px;

    }
    .fa-regular{
        color:#DDDDDD;
        padding-right:20px;
    }
    .buttons{
        display:flex;
        align-items:center;
        width:65%;
        justify-content:space-evenly;
    }
    .home{
        display:flex;
        align-items:center;
    }
    .fa-sharp{
        color:#DDDDDD;
    }
    .home-text{
        font-size:1.5rem;
        font-weight:bold;
        color:#DDDDDD;
        padding-left:10px;
        padding-top:7px; 
    }
    .dailydiary{
        display:flex;
        align-items:center;
    }
    .fa-solid{
        color:#DDDDDD;
    }

</style>
