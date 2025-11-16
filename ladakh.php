<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladakh</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

        * {
            font-family: 'Outfit', sans-serif;
        }

        .place {
            display: flex;
            flex-direction: column;
        }

        .place h1 {
            margin-left: 550px;
        }

        .place p {
            width: 50%;
            text-align: center;
            margin-left: 370px;
        }

        .place img {
            margin-left: 450px;
            margin-top: 100px;
            border: 5px solid black;
        }

        .place a {
            max-width: fit-content;
            text-decoration: none;
            padding: 7px;
            background-color: #B70404;
            color: white;
            margin-left: 730px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="place">
        <h1>Snow Leopard Trek, Ladakh</h1>
        <p>
            Snow Leopard Trek is one of the most sought after treks in Ladakh. It is situated in the eastern part
            of Ladakh, at an altitude of 3000 meters. Being a dominant part of the famous Hemis National Park,
            it spreads an area of 600 sq.kilometers in the valleys of Markha and Rumbak. Since it is a protected
            area, the trek to spot the rare animals here would be a thrilling experience. Not just about
            animals, birds and other species of insects will make the bio diversity an attractive one here.
        </p>
        <img src="uploads/ladakh1.jpg" height="500px" width="650px">
        <img src="uploads/ladakh2.jpg" height="500px" width="650px">
        <img src="uploads/ladakh3.jpg" height="500px" width="650px">
        <img src="uploads/ladakh4.jpg" height="500px" width="650px">
        <img src="uploads/ladakh5.jpg" height="500px" width="650px">
        <a href="register.php">Register</a>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>