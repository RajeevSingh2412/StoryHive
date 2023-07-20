<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
if(isset($_POST["title"])){
    require_once "configur.php";
    $username=$_SESSION['username'];
    $title=$_POST['title'];
    $content=$_POST['content'];

    $sql="INSERT INTO `diary` (username,title,content) VALUES ('$username','$title','$content')";
    $res=mysqli_query($conn,$sql);
}
if(isset($_GET["id"])){
    require_once "configur.php";
    $id=$_GET["id"];
     $sql="DELETE FROM `diary` WHERE id='$id' ";
     $res=mysqli_query($conn,$sql);
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
                    <p class="home-text"><a href="#" class="tectdeco active">Daily Diary</a></p>
                </div>
                <div class="dailydiary hvr">
                    <i class="fa-solid fa-plus fa-lg"></i>
                    <p class="home-text"><a href="Stories.php" class="tectdeco">Stories</a></p>
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
                    </div>
        </div>
    </header>

    <div>

    </div>
    <div class="writing">
       <div class="input">
          <h2>Write your diary</h2>
          </i><button onclick="toggle()"><i class="fa-solid fa-feather fa-xl"></i></button>
        </div>
        <div class="authentic" style="display:none;" id="authentics">
          <form action="" method="post">
            <div class="title">
              <div class="title1"><h2>Title : </h2> </div>
              <div class="input-title">
                <input
                  type="text"
                  name="title"
                  placeholder="Enter Title"
                  required/>
              </div>
             <h5 color="red">Alert : Don't use "" double inverted commas</h5>
           </div>
         <div class="content">
           <div class="deardiary"><h2>Dear Diary,</h2></div>
            <div class="main-writing-part">
               <textarea type="text" name="content" rows="8" cols="20" required></textarea>
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="Save" >Save</button>
        </div>       
     </form>
    </div>
  </div>

    <div class="timeline">
        <?php
        require_once "configur.php";
        $username=$_SESSION['username'];

        $sql="SELECT * FROM `diary` where username='$username' ";
        $res=mysqli_query($conn,$sql);
        $i=2;
        while($row=mysqli_fetch_assoc($res)){
            $title=$row['title'];
            $content=$row['content'];
            $written_on=$row['written_on'];
            $id=$row['ID'];
            if($i%2==0){
              echo '<div class="container left-container ">
                <div class="text-box">
                <h2>Title : '.$title.'</h2>
                <a href="DailyDiary.php?id='.$id.'"><i class="fa-solid fa-trash fa-lg"></i></a>
                <h4>Written On : '.$written_on.'</h4>
                <p>'.$content.'</p>
                 <span class="left-container-arrow container-arrow"></span>
               </div>
             </div>';
            }else{
                echo " <div class='container right-container'>
            <div class='text-box'>
                <h2>Title : ".$title."</h2>
                <a href='DailyDiary.php?id=".$id."'><i class='fa-solid fa-trash fa-lg'></i></a> 
               <h4>Written On : ".$written_on."</h4>
                <p>".$content."</p>
                <span class='right-container-arrow container-arrow'></span>
            </div>
        </div>";
            }
            $i++;
        }
        ?>
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
    
    .hambug{
        margin-top:13px;
    }

    .writing{
        display:flex;
        align-items:left;
        justify-content:space-evenly;
        flex-direction:column;
        width:90%;
        margin-left:5%;
        margin-right:5%;
    }
    
    .input{
        color:#DDDDDD;
        display:flex;
        font-family:cursive;
        justify-content:center;
        align-items:center;
    }
    .input button{
        background-color:#0f1111;
        border:0px;
    }
    
    .authentic{
        width: 100%;
        text-align: left;
        background-color:#1b1f1f ;
        /* border:2px solid #DDDDDD; */
        color:#DDDDDD;
        margin-top: 20px;
        height:520px;
        display:flex;
        flex-direction:column;
        justify-content:space-evenly;
        align-items:left;
        font-size:12px;
    }
    .title{
        display:flex;
        align-items:center;
        justify-content:center;
        font-family:cursive;
    }
    .input-title input{
        height:40px;
        width:100%;
        font-size:16px;
    }
    .title h5{
        margin-left:2rem;
    }
    .content{
        display:flex;
        flex-direction:column;
        justify-content:space-evenly;
        width:100%;
        height:70%;
        margin:1rem;
    }
    .main-writing-part{
        width:100%;
        height:100%;
    }
    
    .main-writing-part textarea{
        width:97%;
        height:300px;
        font-size:1.5rem;
    }
    @media(max-width:780px){
        .input-title input{
            color:#DDDDDD;
        }
        .title1{
            visibility:hidden;
        }
    }
    
    .submit{
        
        position:relative;
        left:50%;
    }
    .submit button{
        width: 10%;
        height:60%;
        background-color: blue;
        color: #fff;
        border: none;
        padding: 8px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 80%;
        margin-top:2px;
    }
    
    .Save:hover {
        background-color: darkblue;
    } 
    @media(max-width:780px){
        .main-writing-part textarea{
            font-size:1.5rem;
            color:#DDDDDD;
            width:92%;
        }
        .submit{
            left:35%;
        }
        .submit button{
            width:30%;
            height:70%;
            position:relative;
            margin-top:10px;
        }
    }
    
    .timeline{
        position:relative;
        max-width:1000px;
        margin:10px auto;
        display:flex;
        flex-direction:column-reverse;
        flex-wrap:wrap;
    }
    
    .container{
        padding: 10px 50px;
        position:relative;
        width:40%;
    }
    .text-box{
        padding:20px 30px;
        background:#fff;
        position:relative;
        border-radius:6px;
        font-size:15px;
    }
    .text-box a{
        float:right;
    }
    .left-container{
        left:0%;
    }
    .right-container{
        left:50%;
    }

@media(min-width:781px){
.left-container-arrow{
    height:0;
    width:0;
    position:absolute;
    top:28px;
    z-index:1;
    border-top:15px solid transparent;
    border-bottom:15px solid transparent;
    border-left:15px solid #fff;
    right:-15px;
}
.right-container-arrow{
    height:0;
    width:0;
    position:absolute;
    top:28px;
    z-index:1;
    border-top:15px solid transparent;
    border-bottom:15px solid transparent;
    border-right:15px solid #fff;
    left:-15px;
}
}
@media(max-width:780px){
    .left-container{
        left:0%;
    }
    .right-container{
    left:0%;
  }

}
    .timeline::after{
        content:'';
        position:absolute;
        width:6px;
        height:100%;
        background:#fff;
        top:0;
        left:50%;
        margin-left:-3px;
        z-index:-1;
    }
    @media(max-width:780px){
        .timeline::after{
            left:85%;
        }
        .container{
            width:70%;
        }
    }


/* footer */
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
@media(max-width:990px){
    html{
        font-size: 65%;
    }
}

@media(max-width:780px){
    html{
        font-size:55%;
    }
}
</style>

<script>
      function toggle() {
  var x = document.getElementById("authentics");
  if (x.style.display == "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
</script>