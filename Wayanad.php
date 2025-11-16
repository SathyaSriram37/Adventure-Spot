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
        <h1>The chambra Peak Trek, Wayanad</h1>
        <p>
            The Chembra Peak is counted as one of the best places for trekking in Wayanad. With a picturesque
            backdrop of the lofty mountains and greenlands, this four-hour trail to the top of the mountain
            is
            worth all the efforts you will put in to cross the hurdles on the journey.
            Do not forget to take the permission of the forest department which can be done at the office
            which
            is a few miles away from the starting point of the base. The heart-shaped lake along the trek
            gives
            this excursion extra brownie points for the visitors not to miss this place and this is one of
            the
            best Wayanad trekking places.
        </p>
        <img src="uploads/wayanad1.jpg" height="500px" width="650px">
        <img src="uploads/wayanad2.jpg" height="500px" width="650px">
        <img src="uploads/wayanad3.jpg" height="500px" width="650px">
        <img src="uploads/wayanad4.jpg" height="500px" width="650px">
        <img src="uploads/wayanad5.jpg" height="500px" width="650px">
        <a href="register.php">Register</a>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>