<?php
    //header("Location: success.html");
    //exit;
?>
<?php
    //if($_POST) { ... } 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        print_r($_REQUEST);
    }
?>



<html lang="en">
<head>
    <title>Hello PHP Forms</title>
</head>
<body>
    <!-- <div class="error"><?php echo $error?></div> -->
    <form action="" method="POST">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="email" name="email">
        <button type="submit">Let's Go!</button>
    </form>
</body>
</html>