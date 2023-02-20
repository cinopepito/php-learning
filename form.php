<?php
echo '<h1>Form submission here</h1>';
if(isset($_POST['submit'])){
  
    $username = $_POST['username'];
    echo 'the username is : ' . $username;
    $password= $_POST["password"];
    echo 'the password is : ' . $password;
    
   
}
  

?>
<form action="form.php"method="post">
    <label for="name">Name :</label>
    <input type="text" placeholder="enter name" name="username"><br><br>
    <label for="name">Password :</label>
    <input type="password" placeholder="enter password" name="password">
    <input type="submit" value="submt" name="submit">
</form>