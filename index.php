
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

}
    </style>
</head>

<body>
    <div class="container"> 
    <section>
        <div class="container">
            <marquee scrollamount="15">Registration Form</marquee>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        header('Location: index2.php?name='.$name.'&phone='.$phone.'&email='.$email);
        exit;
    }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" required><br>
        <label for="email">Email:</label>
        <input type="text" name="email" required><br><br>
        <button type="submit" >Next</button>
    
            </form>
        </div>
    </section>
    </div>
</body>

</html>