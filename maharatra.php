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
        <h1>Garbett Point Trek, Maharastra</h1>
        <p>
            In the Garbett point Trek,the distance of 17 km from Matheran and 8 km from Diksal, Garbett Point
            or
            Garbut Point is located near Matheran with grand view of the plateau below. The huge plateau
            gives a
            view to various waterfalls on the neighboring mountains. This place is also one of the top
            things to
            do in Matheran hill station and it is one of the must include places in Lonavala packages..
            Garbett to Matheran trekking is very famous for adventure lovers from Mumbai and Pune. The trek
            is a
            bit long and requires a little patience to accomplish. The trek starts from Diksal village.
            After
            walking for 5 minutes one can see a huge manmade lake. Visitors need to walk along the perimeter
            of
            the lake and cross a fast moving stream. One needs a rope to cross the stream during the monsoon
            season. The fields and the mountains are lush green with waterfalls all around.
        </p>
        <img src="uploads/maharatra1.jpg" height="500px" width="650px">
        <img src="uploads/maharastra2.jpg" height="500px" width="650px">
        <img src="uploads/maharastra3.jpg" height="500px" width="650px">
        <img src="uploads/maharastra4.jpg" height="500px" width="650px">
        <img src="uploads/maharastra5.jpg" height="500px" width="650px">
        <a href="register.php">Register</a>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>