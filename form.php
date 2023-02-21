<?php
echo '<h1>Form submission here</h1>';
if(isset($_POST['submit'])){

    $names=array("edwin","student","mohab","jane","kokou");
    $username = $_POST['username'];
    $password= $_POST["password"];
    $minimum = 5;
    $maximum=10;
    if(!in_array($username,$names)){
        echo ' sorry you can not log in here'. '<br>';
    }else{
        echo ' you are welcomed here'. '<br>';
    }
    
    if(strlen($username) < $minimum){
    echo 'The username has to be longer than '. $minimum .'<br>';
    }
    
    if(strlen($username) > $maximum){
    echo 'The username has to be less than '. $maximum .'<br>';
    }
    
    echo 'the username is : ' . $username . '<br>';
  
    echo 'the password is : ' . $password. '<br>';   
    }


?>

<form action="submission.php" method="post">
    <label for="name">Name :</label>
    <input type="text" placeholder="enter name" name="username"><br><br>
    <label for="name">Password :</label>
    <input type="password" placeholder="enter password" name="password">
    <input type="submit" value="submt" name="submit">
</form>