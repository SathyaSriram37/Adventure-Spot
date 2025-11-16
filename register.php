<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        * {
            font-family: 'Lato', sans-serif;
        }

        body{
            background-size: 1550px;
            background-repeat: none;
        }
        .register {
            color: white;
            border: 2px solid black;
            padding: 100px;
            margin-left: 500px;
            margin-top: 100px;
            max-width: fit-content;
        }

        .register p {
            margin-bottom: 50px;
            font-size: 20px;
        }

        .register input,
        select,textarea {
            margin-left: 50px;
            padding: 7px;
            background-color: #C1ECE4;
            border: 2px solid black;
        }

        .register label {
            margin-top: 150px;
        }

        .register button[type=submit] {
            margin-top: 50px;
            padding: 8px;
            border: 2px solid black;
        }

        .register button[type=reset] {
            margin-left: 250px;
            padding: 8px;
            border: 2px solid black;
        }

        .register button[type=submit]:hover,
        button[type=reset]:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body background="uploads/trip.jpg">
    <?php
    include("head.php");
    ?>
    <br>

    <div class="register">
        <h1>Step to "<span style="color:#B70404;">THE JOURNEY!</span>"</h1>
        <form method="post">
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" placeholder="Enter your Name" required></td>
                </tr>
                <tr>
                    <td><label>Members Count<label></td>
                    <td><input type="number" name="member" placeholder="How Many Members?" min='0' required></td>
                </tr>
                <tr>
                    <td><label>Date of Travel</label></td>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td><label>Contact</label></td>
                    <td><input type="text" name="contact" placeholder="Contact Number" maxlength="10" required></td>
                </tr>
                <tr>
                    <td><label>Aadhar Number</label></td>
                    <td><input type="text" name="aadhar" placeholder="Aadhar Number" maxlength="12" required></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><textarea style="resize:none" name="address" rows="5" cols="25" required></textarea></td>
                </tr>
                <tr>
                    <td><label>Place You Want</label></td>
                    <td><select name="place" required>
                        <option name="select">Select Place</option>
                        <option name="ladakh">Ladakh</option>
                        <option name="wayanad">Wayanad</option>
                        <option name="maharastra">Maharastra</option>
                        <option name="himachal">Himachal Pradesh</option>
                        <option name="karnataka">Karnataka</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label>Mode of payment</label></td>
                    <td><select name="pay" required>
                        <option value="Mode">Payment Option</option>
                        <option value="online">Online Payment</option>
                        <option value="cash">Cash</option>
                    </select></td>
                </tr>
            </table>
            <button type="submit" name="submit">Register</button>
            <button type="reset" name="clear">Clear</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $id=0;
            $name=$_POST['name'];
            $member=$_POST['member'];
            $date=$_POST['date'];
            $contact=$_POST['contact'];
            $aadhar=$_POST['aadhar'];
            $address=$_POST['address'];
            $place=$_POST['place'];
            $pay=$_POST['pay'];
            include("db.php");
            $q="insert into travel_reg values('$id','$name','$member','$date','$contact','$aadhar','$address','$place','$pay')";
            if($connect->query($q))
            echo "<script>alert('Thankyou! for Registeration...Ready to Gooo')</script>";
        }
        ?>
    </div>
</body>

</html>