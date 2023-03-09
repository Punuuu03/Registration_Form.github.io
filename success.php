<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
    <style>
.container{
    background-color:rgb(65, 143, 207);
    text-align:center;
    height:300px;
    margin-top:100px;
    margin-left:300px;
    margin-right:300px;
}
h1{margin-top:170px;
    font-size:75px;
}
p{
    font-size:40px;
}


        </style>
</head>
<body>
    <div  class="container">
    <h1>Success Page</h1>
    <?php
    $name = $_GET['name'];
    echo "<p>Thank you for filling the form, $name.</p>";
    ?>
    </div>
</body>
</html>