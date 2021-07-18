<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@700&family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    

    <style type="text/css">
    div.container{
         overflow: auto;
     }
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      #sideNav{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top:0;
    background:  #ff8d0a;
    z-index: 2;
    transition: .5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
a:hover {
    background-color: rgb(51, 62, 94);
    color: #fff;
  }
  
#menuBtn{
    width: 55px;
    height: 65px;
    position: fixed;
    right: 65px;
    top: 35px;
    z-index: 2;
    cursor: pointer;
}
.footer{
    width: 100%;
    text-align: center;
    padding: 10px 0;
    background: rgb(11, 31, 68);
    left:0;
    /*bottom: 0;*/
    position: absolute;
    margin-top: 30px;
    padding-top:10px;
  }
  footer p{
    margin-bottom: 5px;
    margin-top: 30px;
    font-weight: 600;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color:rgb(231, 198, 52);
  }
  .icons .fa{
    color: #ff8d0a;
    margin: 0 13px;
    cursor:pointer;
    padding: 10px 0;
  }
  p{
    font-size: 20px;
    line-height: 18px;
    color: rgb(11, 31, 68);
    background-color: rgb(231, 198, 52);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 20px;
    margin-top:20px;
}


    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer Now</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <nav id="sideNav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="transfermoney.php">OUR CUSTOMERS</a></li>
                <li><a href="transactionhistory.php">TRANSACTION HISTORY</a></li>
                <li><a href="transfermoney.php">TRANSFER MONEY</a></li>
                <li><a href="Register.php">NEW USER</a></li>
            </ul>
        </nav>
        <img src="images/menu.gif" id="menuBtn">

        <section class="footer">
            <p style="text-align:center;color:rgb(11, 31, 68);">Don’t just save money, make more money with a checking account from us!💵💰💳</p>
            <div class="icons">
              <i class="fa fa-facebook-f" style="font-size:20px;"></i>
              <i class="fa fa-twitter" style="font-size:20px;"></i>
              <i class="fa fa-instagram" style="font-size:20px;"></i>
              <i class="fa fa-linkedin" style="font-size:20px;"></i>
            </div> 
          </section>  

        <script>
            var menuBtn=document.getElementById("menuBtn");
            var sideNav=document.getElementById("sideNav");
            sideNav.style.right="-250px"
            menuBtn.onclick=function(){
                if(sideNav.style.right=="-250px"){
                    sideNav.style.right="0px";
                }
                else{
                    sideNav.style.right="-250px";
                }
            }
        </script>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body>
</html>