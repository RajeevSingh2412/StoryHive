<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <META HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Story Writter</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
        <div class="navbar">
            <div class="logo hvr">
                <i class="fa-regular fa-pen-to-square fa-flip-both fa-xl" color="#DDDDDD"></i>
                <p class="heading" >Writeup</p>
            </div>
                <div class="home hvr">
                    <i class="fa-sharp fa-solid fa-house fa-lg"></i>
                    <p class="home-text"><a href="Home.php" class="tectdeco ">Home</a></p>
                </div>
                <div class="dailydiary hvr">
                    <i class="fa-solid fa-book fa-lg"></i>
                    <p class="home-text"><a href="DailyDiary.php" class="tectdeco">Daily Diary</a></p>
                </div>
                <div class="dailydiary hvr">
                    <i class="fa-solid fa-plus fa-lg"></i>
                    <p class="home-text"><a href="#" class="tectdeco active">Stories</a></p>
                </div>
                <div class="dailydiary hvr">

                 
                    <i class="fa-solid fa-user fa-lg"></i>
                    <p class="home-text" ><?php 
                            if(isset($_SESSION['username']))
                            {
                                echo $_SESSION['username'];

                            }
                          else{
                            echo 'Accounts';
                        }?></p>
                    <!-- <div id="welcomeDiv"  style="display:none;" class="answer_list" > WELCOME</div>
                    <input type="button" name="answer" value="Show Div" onclick="showDiv()" /> -->
                    <button onclick="toggle()"><i class="fa-solid fa-bars fa-lg hambug"></i></button>
                           
                </div>
                
                
                
                

        </div>
    </header>
    
    <div id="authentics" style="display:none;" class="authentic">
                <ul class="list-1">
                    <p>My Profile</p>
            <?php 
            if(isset($_SESSION['username']))
            {
                echo 'Creaton On '.$_SESSION['created_on'];
                echo '<a href="logout.php"> Logout</a>';
                
            }
            else{
                echo '<a href="Register.php">Signup</a>';
                 echo '<a href="login.php"> Login</a>';
            }
            ?>
            </a>
        </ul> 
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
    <div class="panel1">
                <ul>
                    <p>Get to Know Us</p>
                    <a href="">About Us</a>
                    <a href="">How to Use</a>
                    <a href="">About Developrs</a>
                    <a href="">Contact Us</a>
                    
                </ul>
            </div>
            <div class="panel2">
                <div class="icon-foot">
                <i class="fa-regular fa-pen-to-square fa-flip-both fa-xl" color="#DDDDDD"></i>
                <p class="heading" >Writeup</p>
                </div>
            </div>
            <div class="panel3">
                 <div class="conditions">
                    <a href="">Conditions of Use</a>
                    <a href="">Privacy Notice</a>               
                 </div>
                 <div class="copyright">
                     © 2023-2023, Writeup.com, Inc. or its affiliates
                 </div>
            </div>
    </footer>
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
        height:70px;
        background-color:#1b1f1f;
        display:flex;
        justify-content:space-evenly;
        align-items:center;
        position:relative;
        

    }
    .logo{
        display:flex;
        align-items:center;
        width:25%;
        align-items:left;
    }
    .heading{
       font-size:1.5rem;
       font-weight:bold;
       color:#DDDDDD;
       padding-left:10px;
       font-family: cursive;

    }
    .fa-regular{
        color:#DDDDDD;
        padding-right:5px;
    }
    .home{
        display:flex;
        align-items:center;
    }
    .fa-sharp{
        color:#DDDDDD;
    }
    .home-text{
        font-size:1rem;
        font-weight:bold;
        color:#DDDDDD;
        padding-left:5px;
        padding-top:7px; 
    }
    .dailydiary{
        display:flex;
        align-items:center;
    }
    .fa-solid{
        color:#DDDDDD;
    }
    .dailydiary button{
        background-color:#1b1f1f;
        border:0px;
    }
    .tectdeco{
        text-decoration:none;
        color:#DDDDDD;
    }
    .navbar a:active{
        color:purple;
    }
    .active{
        text-decoration:underline;

    }
    .authentic{
        width: 10%;
        text-align: left;
        background-color:#1b1f1f ;
        border:2px solid #DDDDDD;
        color:#DDDDDD;
        margin-top: 20px;
        margin-right:110px;
        float:right;
        height:160px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:space-evenly;
    }
    .authentic ul a p{
        text-align: center;
        color:black;
        text-decoration:none;
        font-size:12px;
    }
    .hambug{
        margin-top:13px;
    }
    /* .hvr:hover{
        background-color:grey;
    } */
    .panel1{
    background-color:#222f3d;
    color:white;
    height:200px;
    display:flex;
    justify-content:space-evenly;
    position:relative;
    bottom:0px;
}
ul p{
       font-size:16px;
       color:#FFFFFF;
       text-decoration:none;
       margin-top:22px;
}
ul a{
       display:block;
       font-size:14px;
       color:#DDDDDD;
       text-decoration:none;
       margin-top:14px;
}
.panel2{
    background-color:#222f3d;
    color:white;
    height:70px;
    border:0.5px solid white;
    display:flex;
    justify-content:space-evenly;
    align-items:center;
}
.icon-foot{
    background-size:cover;
    width:75px;
    height:35px;
    display:flex;
    align-items:center;
}
.panel3{
    background-color:#0f1111;
    height:70px;
    color:#DDDDDD;
    font-size:13px;
}
.conditions{
    padding-top:20px;
    text-align:center;
}
.conditions a{
    color:#DDDDDD;
    text-decoration:none;
    
}
.copyright{
    text-align:center;
    padding-top:5px;
}
</style>

<script>
      function toggle() {
  var x = document.getElementById("authentics");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>