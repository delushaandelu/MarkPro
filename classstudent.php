<?php
if(isset($_POST["submit"])){
    include('include/database.php');
    $fullname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $mother = $_POST['mother'];
    $father = $_POST['father'];
    $guardian = $_POST['guardian'];
    $date = $_POST['date'];
    $grade = $_POST['grade'];
    //query
    $sql="INSERT INTO student (firstname,lastname,gender,address,tnumber,mother,father,guardian,rdate,grade) 
    VALUES ('$fullname','$lastname','$gender','$address','$number','$mother','$father','$guardian','$date','$grade')";
    $result = $db->query($sql);
    if($result){
        echo'<script>';
        echo"alert('SUCCESS | User Information Added'); window.location.href='managestudent.php' ";
        echo'</script>';
        }
    else{
        echo'<script>';
        echo"alert('FAILED | User Information Not Added')";
        echo'</script>';
    }
}
?> 