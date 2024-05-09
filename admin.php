<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <li><a href="reservation.php"><span><i class="fas fa-book"></i> Reservations</span></a></li>
            <li><a href="cars.php"><span><i class="fas fa-car"></i> Vehicles</span></a></li>
            <li><a href="users.php"><span><i class="fas fa-users"></i> Customers</span></a></li>
            <li><a href="discount.php"><span><i class="fas fa-tag"></i> Discount</span></a></li>
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
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Total Revenue</h3>
                    </div>
                    <div class="icon-case">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <h2><?php
// Connect to the database
                        $db = mysqli_connect('localhost', 'root', '', 'carrental');

// Check connection
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

// Fetch count of available cars from the database
                    $query = "SELECT COUNT(available) AS available_cars FROM cars ";
                    $result = mysqli_query($db, $query);

// Check if query was successful
            if ($result) {
    // Fetch the count
                $row = mysqli_fetch_assoc($result);
                $available_cars = $row['available_cars'];

    // Output the count
                 echo "<td>".$available_cars."</td>";
                    } else {
                echo "<td>Error: " . mysqli_error($db) . "</td>";
                }
                    ?></h2>
                    <h3>Available Cars</h3>

                    </div>
                    <div class="icon-case">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Canceled</h3>
                    </div>
                    <div class="icon-case">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Customer</th>
                            <th>Pickup</th>
                            <th>Drop-off</th>
                            <th>Days</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Ayala Central Bloc</td>
                            <td>Sm Seaside</td>
                            <td>7 days</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
