<?php
$conn=mysqli_connect("localhost", "root", "", "yoga");

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $contact=$_POST["contact"];
    $message=$_POST["message"];

    $sql="INSERT INTO `yogauser`(`name`,`email`,`subject`,`contact`,`message`) VALUES ('$name','$email','$subject','$contact','$message')";

    if(mysqli_query($conn, $sql)){
        // echo "your data insert";
      header('location:index.php');
    //   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        // alert("We Will connect shortly");
    }else{
        echo "Please reenter data";
    }

}


?>