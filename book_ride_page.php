<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!--icons fontawesome 5-->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php 
        require 'assets/styles/styles.php'
    ?>
    
</head>
<body>
    
<header>
        <nav>
            <div>
                    <a href="#" class="nav-item nav-logo">LLI BUS COMPANY</a>
                    <!-- <a href="#" class="nav-item">Gallery</a> -->
            </div>
                
            <div>
                <ul>
                    <li>
                        <a href="/">Return to Home</a>
                    </li>
                    <li>
                        <a href="create_customer.php">Generate Customer Id</a>
                    </li>
                    <li>
                        <a href="booking.php">Book a Ride</a>
                    </li>
                </ul>
            </div>   
        </nav>
    </header>
     
    <section id="home">
    <div class="container mt-5 burloloy" id="burloloy-0">
        <h2>Booking Instructions</h2>
        <p>If you want to book a ride and you don't have a customer ID yet, please follow these steps:</p>
        <ol>
            <li>Navigate to "Generate Customer ID" button to create your unique customer ID.</li>
            <li>Once you have your customer ID, return to this page.</li>
            <li>Navigate to the "Book a Ride" button to proceed with your booking.</li>
        </ol>
    </div>

    <div class="container mt-3 burloloy" id="burloloy-1">
        <table class="table table-bordered">
            <h3>Available Routes</h3>
            <thead class="thead-dark">
                <tr>
                    <th>Route</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Fare Fee</th>
                </tr>
            </thead>
            <tbody>
                <?php require 'assets/partials/_functions.php' ?>
                <?php 
                    $conn = db_connect();
                    $query = "SELECT * FROM routes ORDER BY route_created DESC";
                    $result_query = mysqli_query($conn, $query);

                    if ($result_query){
                        while ($row = mysqli_fetch_assoc($result_query)) {
                            echo '<tr>';
                            echo '<td>'.$row['route_cities'].'</td>';
                            $sourceDest = explode(",", $row['route_cities']);
                            echo '<td>'.$sourceDest[0].'</td>';
                            echo '<td>'.$sourceDest[1].'</td>';
                            echo '<td>'.$row['route_dep_date'].'</td>';
                            echo '<td>'.$row['route_dep_time'].'</td>';
                            echo '<td>'.$row['route_step_cost'].'</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="6">Something went wrong on our side</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    </section>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>