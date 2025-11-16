<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Members</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        * {
            font-family: 'Lato', sans-serif;
        }

        h1 {
            margin-left: 580px;
        }

        .registered {
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }

        .registered th,
        td {
            border-bottom: 1px solid black;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php include("head.php"); ?>

    <h1>REGISTERED MEMBERS</h1>

    <table class="registered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Member</th>
            <th>Date</th>
            <th>Place</th>
        </tr>
        <?php
        include("db.php");
        $q = "select id,name,member,date,place from travel_reg";
        $select = $connect->query($q);
        foreach ($select as $value) {
        ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['member']; ?></td>
                <td><?php echo $value['date']; ?></td>
                <td><?php echo $value['place'];
                } ?></td>
            </tr>
    </table>
    <?php include("footer.php"); ?>
</body>

</html>