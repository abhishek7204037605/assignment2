    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VAMSHI</title>
        <link rel="stylesheet" href="style.css">
        
        
    </head>
    <body>
        <div class="name">
            
                <p class="signin">SIGN-IN</p>
        
            <form action="inde.php" method="post">
                <img src="email.png" alt="" class="emai">
                
                <input type="email" name="nam" class="nam" placeholder="Email-ID"> <br>
                <img src="password.png" alt="" class="emai">
                
                <input type="password" name="pass" class="pass" placeholder="Password">
                <br>
                <input type="submit" value="login" class="sub" name="sub">
                
            </form>
        </div>
        
    </body>
    </html>
    <?php
        
        include('index.php');
        $username=$_POST['nam'];
        $password=$_POST['pass'];
        
        $sql = "INSERT INTO users(user, password, reg_date) VALUES('$username', '$password', NOW())";
        
        if (mysqli_query($conn, $sql)) {
            echo "<br> Data has been successfully entered";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);



        // $db_server="localhost";
        // $db_user="root";
        // $db_pass="";
        // $db_name="college";
        // $conn="";

        
        // $username=$_POST('nam');
        // $password=$_POST('pass');
        
        // $sql="INSERT INTO users(user,password) VALUES('$username','$password')";
        // $conn=mysqli_connect($db_server,
        // $db_user,
        // $db_pass,
        // $db_name);
        
        // try{
        //     mysqli_query($conn,$sql);
        //     echo"You have successfully registered";

           
        // }
        // catch(mysqli_sql_exception){
        //     echo"You are not connected";

        // }
        

    ?>