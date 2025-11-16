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
        <h1>Hampta Pass Trek, Himachal Pradesh</h1>
        <p>
            Hampta Pass Trek is one of the most dramatic treks in Himachal Pradesh. This 25 kilometers long trek
            can be done by novice trekkers with a decent level of fitness. One of the popular attractions of the
            trek which keeps the enthusiasm level high among the trekkers is the abundant nature.

            From lush, sweet-smelling apple orchards to deep oak and deodar forests, this trek is decked up with
            rich envions, every nature lover will want to bask in.
        </p>
        <img src="uploads/himachal1.jpg" height="500px" width="650px">
        <img src="uploads/himachal2.jpg" height="500px" width="650px">
        <img src="uploads/himachal3.jpg" height="500px" width="650px">
        <img src="uploads/himachal4.jpg" height="500px" width="650px">
        <img src="uploads/himachal5.jpg" height="500px" width="650px">
        <a href="register.php">Register</a>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>