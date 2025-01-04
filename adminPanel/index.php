<?php
session_start();


// if (!isset($_SESSION["mySession"])) {
//     header('location:logout.php');
// }
// require_once('myClass.php');
if(isset($_POST['btnSubmit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$myObj= new Trinee($name,$email,$username,$password);
$myObj->save();
}
?>

        
        <?php 
        include("./pages/common_pages/header.php");
        ?>
        <!-- sidebar part start  -->
        <?php 
        include("./pages/common_pages/sidebar.php");
        ?>
        <!--end::Sidebar--> <!--begin::App Main-->
        
       <?php 
       include("./pages/common_pages/footer.php");
       ?>