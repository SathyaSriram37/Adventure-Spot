<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

        * {
            font-family: 'Outfit', sans-serif;
        }

        .contact {
            display: flex;
        }

        .map1 {
            margin-left: 200px;
            margin-top: 120px;
        }

        .touch {
            margin-top: 100px;
            margin-left: 100px;
            border: 3px solid black;
            background-color: rgba(230, 140, 230, 0.457);
            width: 400px;
            height: 480px;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 10px 10px #9681EB;
        }

        .touch h1 {
            margin-left: 70px;
        }

        .touch input {
            padding: 5px;
            margin-left: 10px;
            width: 270px;
            height: 30px;
            border-radius: 5px;
            border-style: none;
        }

        .touch button{
            padding: 7px;
            border: 2px solid black;
            margin-left: 60px;
        }
        .touch button:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php include("head.php"); ?>

    <h1 style="margin-left: 650px;margin-top:100px;">Contact</h1>
    <div class="contact">
        <div class="touch">
            <h1>Get In Touch</h1>
            <form method="post">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-user fa-lg"></i></td>
                        <td><input type="text" name="name" placeholder="Enter Your Name" autofocus required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-envelope fa-lg"></i></td>
                        <td><input type="email" name="email" placeholder="Enter Your Email ID" required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-phone fa-lg"></i></td>
                        <td><input type="text" name="phone" placeholder="Enter Your Phone Number" pattern="[0-9]+" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-message fa-lg"></i></td>
                        <td><textarea name="enquiry" style="border-radius: 5px;border-style: none;resize: none;padding:5px;margin-left: 10px;" cols="40" rows="8" placeholder="Any Enquiry" required></textarea></td>
                    </tr>
                </table><br><br>
                <button type="submit" name="submit">Submit</button>
                <button type="reset" style="margin-left: 110px;">Clear</button>
            </form>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $enquiry = $_POST['enquiry'];
            $connect = mysqli_connect("Localhost", "root", "", "adventure");
            $q = "insert into feedback values('$name','$email','$phone','$enquiry')";
            if ($connect->query($q)) {
                echo "<script>alert('Thankyou!')</script>";
            }
        }
        ?>
        <div class="map1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.421636810135!2d77.74844167467816!3d9.472005590608074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cf85d5a9c21d%3A0xa3062c58f8f3bdb!2sAyya%20Nadar%20Janaki%20Ammal%20College!5e0!3m2!1sen!2sin!4v1688912696883!5m2!1sen!2sin" width="500" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <br><br>
    <?php include("footer.php"); ?>
</body>

</html>