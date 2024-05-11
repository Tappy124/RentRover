<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="side-menu">
        <div class="car rental">
            <img src="assets/images/rentrover.png" alt="Brand Logo" width="250" height="250">
        </div>
        <ul>
            <li><a href="admin.php"><span><i class="fas fa-home"></i> Dashboard</span></a></li>
            <li><a href="bookings.php"><span><i class="fas fa-book"></i> Bookings</span></a></li>
            <li><a href="cars.php"><span><i class="fas fa-car"></i> Cars</span></a></li>
            <li><a href="users.php"><span><i class="fas fa-users"></i> Users</span></a></li>
            <li><a href="code.php"><span><i class="fas fa-tag"></i> Promo Codes</span></a></li>
            <form class="nav-link" action="logout.php" method="post">
                <button type="submit" class="btn btn-link logout-btn" name="logout">Logout</button>
            </form>
        </ul>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Discount Codes</h2>
                        <a href="addcode1.php" class="btn">Add code</a>
                    </div>
                    <table>
                        <tr>
                            <th>Code</th>
                            <th>Discount</th>
                        </tr>
                        <?php
                        // Connect to the database
                        $db = mysqli_connect('localhost', 'root', '', 'carrental');

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Fetch discount codes from the database
                        $query = "SELECT code, discount FROM codes";
                        $result = mysqli_query($db, $query);

                        // Check if query was successful
                        if (!$result) {
                            die("Query failed: " . mysqli_error($db));
                        }

                        // Output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row['code']."</td>";
                            echo "<td>".$row['discount']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
