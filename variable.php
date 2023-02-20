<?php

define('title','constant and variable');
if(isset($_POST["fix_submit"])){

    $clickbait = strtoLower($_POST["clickbait_headline"]);

$a=[
"scientist",
"doctor",
"hate",
"stupid",
"weird",
"simple",
"trick",
"shocked me",
"you'll never believe",
"epic",
"unbelievable"
];

$b=[
"chemist",
"specialist",
"disliker",
"silly",
"so weird",
"normal",
"tricky",
"surprised me",
"it's unbelievable to get",
"terrible",
"strange data"
];

$honestHeadline = str_replace($a,$b,$clickbait);  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>
            <?php echo title;?>
        </h1>
        <p class="lead">hate click bait ? Turn those annoying headlines into realistic and honnest ones using this simple program</p>

        <div class="row">
            <form action="" class="col-sm-8 col-sm-offset" method="post">
                <textarea placeholder="place click bait headline here" name="clickbait_headline" id="" cols="30" rows="10" class="form-control input-lg"></textarea>
                <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honnest</button>
            </form>
        </div>

        <?php

if(isset($_POST["fix_submit"])){
    echo $honestHeadline;
}
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

