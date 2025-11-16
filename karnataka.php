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
        <h1>Kudremukh Trek, Karnataka</h1>
        <p>
            The Kudremukh trek begins from the small hamlet of Mullodi. The short distance of 9 km (one way)
            takes you at an altitude of 1,894 km above the sea level offering some of the most breathtaking
            views of the Western Ghats. From the beauty of the Western Ghats, various streams, and waterfalls
            and the aromatic coffee plantations you get to see all at one place. The most important attraction
            along with the Kudremukh peak is the Hanuman Gundi Falls, which falls on your way uphill to the
            highest peak. Located amidst the hilly terrain of Western Ghats, Hanuman Gundi falls is a beautiful
            water cascade of Kudremukh.
        </p>
        <img src="uploads/karnataka1.jpg" height="500px" width="650px">
        <img src="uploads/karnataka2.jpg" height="500px" width="650px">
        <img src="uploads/karnataka3.jpg" height="500px" width="650px">
        <img src="uploads/karnataka4.jpg" height="500px" width="650px">
        <img src="uploads/karnataka5.jpg" height="500px" width="650px">
        <a href="register.php">Register</a>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>