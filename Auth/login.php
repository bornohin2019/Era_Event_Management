<?php
session_start();
if(isset($_POST['btnSubmit'])){
    $usar = $_POST['name'];
    $password= $_POST['password'];
    $file = file('store.txt');
    foreach($file as $singleData){
        list($usarName,$usarPassword)=explode(',', trim($singleData));
        if($usar == $usarName && $password==$usarPassword){
        $_SESSION['mySession']=$usar;
        header('location:../adminPanel/');
        }
        else{
          $msg = "Usar and Password Invalid";
        }
    }
  
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="name" >
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="btnSubmit">Login</button>

<?php
echo isset($msg)?$msg:" ";
?>
        </form>
    </div>
</body>
</html>