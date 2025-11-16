<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        * {
            font-family: 'Lato', sans-serif;
        }

        body {
            background-color: rgba(230, 140, 230, 0.457);
            color: black;
        }

        .main {
            display: flex;
        }

        .main img {
            margin-top: 150px;
            margin-left: 150px;
            position: relative;
        }

        .sign {
            padding-left: 250px;
            max-width: fit-content;
            margin-top: 140px;
            margin-left: -70px;
        }

        .sign h1 {
            margin-left: 80px;
            margin-bottom: 60px;
        }

        input {
            padding: 7px;
            width: 200px;
            border-radius: 10px;
            margin-left: 40px;
            margin-top: 10px;
            border-style: none;
        }

        .login a {
            color: blue;
        }

        #button {
            border-style: none;
            padding: 10px;
            border: 2px solid black;
            width: 100px;
            margin-left: 270px;
        }

        #button:hover {
            background-color: #A7EDE7;
        }
    </style>
</head>

<body>
    <div class="main">
        <img src="uploads/login logo.jpg" height="400px" width="600px">
        <div class="sign">
            <h1>SIGN IN</h1>
            <form method="post">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" placeholder="Enter your name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="Enter email ID"></td>
                    </tr>
                    <tr>
                        <td>Create Password</td>
                        <td><input type="password" name="pass" placeholder="Create Password" maxlength="8"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="cpass" placeholder="Confirm Password" maxlength="8"></td>
                    </tr>
                </table><br><br>
                <input id="button" type="submit" name="submit" value="Submit">
                <br><br>
                <div class="login">
                    Already User! <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        include("db.php");
        $q = "insert into signin values('$name','$email','$pass','$cpass')";
        if ($connect->query($q)) {
            echo "<script>alert('Successfully Sign In')</script>";
            header("location:login.php");
        }
    }
    ?>
</body>

</html>