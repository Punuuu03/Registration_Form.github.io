
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <link rel="stylesheet" href="login.css">
    <style>
        .container{
            background-color:rgb(65, 143, 207);

        }
        body {
  background-color: white;
}

marquee {

font-size: 60px;
text-align: center;
/* height: 80px; */
/* color: azure; */

}
    </style>

</head>

<body>
    <div class="container">
    <section>
        <div class="container">
            <marquee scrollamount="15">Registration Form</marquee>
           
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['location']) && !empty($_POST['age']) && !empty($_POST['university'])) {
        $location = $_POST['location'];
        $age = $_POST['age'];
        $university = $_POST['university'];
        $name = $_POST['name'];
        header('Location: success.php?name='.$name);
        exit;
    } else {
        $name = $_GET['name'];
    }
    ?>
    <form method="post" action="">
        <label for="location">Location:</label>
        <input type="text" name="location" required><br>
        <label for="age">Age:</label>
        <input type="text" name="age" required><br>
        <label for="university">University:</label>
        <input type="text" name="university" required><br><br>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <button type="submit" >Submit</button>
 
    
            </form>
        </div>
    </section>
    </div>
</body>

</html>