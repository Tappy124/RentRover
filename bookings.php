<?php
// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'carrental');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/user.css">
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
        <div class="header">
            <div class="nav">
            </div>
        </div>
        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <?php
                    // Fetch bookings from the database
                    $query = "SELECT id, pickuploc, returnloc, pickupdt, returndt, fullname, status FROM booking ";
                    $result = mysqli_query($db, $query);

                    if (!$result) {
                        die("Query failed: " . mysqli_error($db));
                    }
                    ?>
                    <h2>Recent Bookings</h2>
                    <a href="" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Pickup Location</th>
                        <th>Return Location</th>
                        <th>Pickup DateTime</th>
                        <th>Return DateTime</th>
                        <th>Full Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pickuploc']; ?></td>
                            <td><?php echo $row['returnloc']; ?></td>
                            <td><?php echo $row['pickupdt']; ?></td>
                            <td><?php echo $row['returndt']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <form action="update.php" method="post">
                                    <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                    <select name="status">
                                        <option value="approved">Approve</option>
                                        <option value="declined">Decline</option>
                                    </select>
                                    <button type="submit">Submit</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
