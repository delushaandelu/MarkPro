<?php
    session_start();
    if(isset($_POST['submit'])){
        require ('include/database.php');
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['username'] = $username;
        
        $res1 =  mysqli_fetch_assoc(mysqli_query($db,"select name from user where username = '$username' "));
        $_SESSION['name']= $res1['name'];                          

        $result = mysqli_query($db, 'select * from user where username="'.$username.'" and password="'.$password.'"  ');
        if (mysqli_num_rows($result)==1){
            //$cst_id = $_SESSION['csid'];
            //$cst_name = $_SESSION['fname'];
            
            //$log = "INSERT INTO log(id, name, logtime) VALUES('$cst_id','$cst_name', 'sda')";
            //if (mysqli_query($con,$log) === TRUE) {
                header('location: home.php');
                //}else{
                //echo "<script>";
                //echo "alert('ERROR| Log Time ERROR! Login Again!')";
                //echo "</script>";
                //}
        }else
            echo "<script>";
            echo "alert('ERROR| Your are not an authoriezed user! Check your information again');
            document.location = 'index.php';";
            echo "</script>";
    }
?>