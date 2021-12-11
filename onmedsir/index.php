<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Medicine Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: red;
       color: white;
       text-align: center;
    }
    </style>



</head>
<body>

<div class="container">
    <div class="row">

        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="sr-only"> Toggle Naviagation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        

                    <button>
                        <a href="#" class="navbar-brand"> Online Medicine</a>

                        




            </div>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">page1</a></li>
                    <li><a href="#">page2</a></li>
                    <li><a href="#">page3</a></li>
                    <li><a href="#">page4</a></li>
                </ul>




            </div>
        </nav>


    </div>
</div>


<div class="container">
<div class="row">

    <div class="col-md-3">

        <img src="1.jpg" height=250px width=280px>
    </img>


    </div>
<div class="col-md-3">

<img src="2.jpg" height=250px width=280px>
    </img>
        
    </div>

    <div class="col-md-3">

        <img src="3.jpg" height=250px width=280px>
    </img>
        
    </div>

    <div class="col-md-3">

        <img src="4.jpg" height=250px width=280px>
    </img>
        
    </div>

</div>
 
 
     <div class="row">
    

    
    <h1>Registration Form</h1>
     

     
    
        <div class="col-md-3">
            
            
            
            <form name="registration" method="POST" action="index.php">
            <br><br>
            name : <input type=text name="name1" required><br><br>
            Gender : <input type="radio" name="gender" value="Male" >Male
                  <input type="radio" name="gender"  value="Female">Female  <br><br>
            Email Address : <input type="email" name="email" required> <br><br>
            Password : <input type="password" name="pwd" required> <br><br>
            <input type="submit" name="submit" value="submit it" ><br><br>
            <input type="reset" value="Reset iT"><br><br>
            <br><br>
 
            </form>
            
    

    </div>



</div>

 



<!-- <div class="footer">
    <p>MINI Project Work Done By MCA 2022 passout Batch NSEC</p>
  </div> -->



</div>

</div>














</div>




</body>
 
  </html>

<?php
include('config.php');

if(isset($_POST['submit'])){


    

    $name1 = $_POST['name1'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $passwd = $_POST['pwd'];

    /*
    echo "<br><br>";
    echo $name1 ;
    echo "<br><br>";
    echo $gender ;
    echo "<br><br>";
    echo $email ;
    echo "<br><br>";
    echo $passwd ;
    echo "<br><br>";
    */

    if($passwd >=8 and $passwd <= 15){
    
    $sql="INSERT into registration(name,gender,email,password) values('$name1','$gender','$email','$passwd')";
    $q=mysqli_query($conn,$sql);


    echo "Data Submited Succsessfully-----";
    echo "<br><br>";
    echo "<br><br>";
    }
    else{ 
        echo "<br><br>";
        echo "<br><br>";
        echo "------Password Lenth Should Be Greater Than 8 character and less then 15 character-------- ";
        echo "<br><br>";
        echo "<br><br>";
        echo "<br><br>";
    }
    


    mysqli_close($conn);



}



 
?>

 

