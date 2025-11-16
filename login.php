<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        * {
            font-family: 'Lato', sans-serif;
        }

        body {
            background-color: #FAF0D7;
        }

        .login {
            background-color: rgba(230, 140, 230, 0.457);
            border: 2px solid black;
            padding: 50px;
            margin-left: 550px;
            margin-top: 200px;
            max-width: fit-content;
        }

        .login h1 {
            padding-bottom: 10px;
            border-bottom: 2px solid black;
        }

        .login a {
            text-decoration: none;
            border-bottom: 2px solid blue;
            color: blue;
            padding-bottom: 3px;
        }

        input {
            width: 200px;
            border-radius: 10px;
            border-style: none;
            padding: 10px;
            margin-left: 30px;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        button {
            border-style: none;
            padding: 10px;
            border: 2px solid black;
            width: 100px;
            margin-left: 220px;
        }

        button:hover {
            background-color: #6527BE;
            color: white;
        }
    </style>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <table>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="email" name="email" placeholder="Enter Your Email ID" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" placeholder="Enter Your Password" required></td>
                </tr>
            </table>
            <button type="submit" name="submit">Login</button><br>
            Or Sign up using <a href="index.php"> Sign Up</a>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $log_email = $_POST['email'];
        $log_pass = $_POST['pass'];
        include("db.php");
        $q = "select email,cpass from signin";
        $value = $connect->query($q);
        foreach ($value as $select) {
            if ($log_email == $select['email'] && $log_pass == $select['cpass'])
                header("Location:travel.html");
            else {
                echo "<script>alert('Login Failed')</script>";
            }
        }
    }
    ?>
</body>

</html>