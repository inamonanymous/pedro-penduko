<?php

    require '_functions.php';
    $conn = db_connect();

    // Getting user details
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result))
    {
        $user_fullname = $row["user_fullname"];
        $user_name = $row["user_name"];
    }
?>

<!-- <header>
        <nav id="navbar">
            <ul>
                <li class="nav-item">
                    <?php 
                        echo $user_name;
                    ?>
                </li>
                <li class="nav-item">
                    <img class="adminDp" src="../assets/img/admin_pic.jpg" alt="Admin Profile Pic" width="22px" height="22px">
                </li>
            </ul>
        </nav>
    </header> -->
    <main id="container">
        <div id="sidebar">
            <h4><i class="fas fa-bus"></i> LLI BUS COMPANY</h4>
            <div>
                <br>
                <br>
            
                    <?php  echo 'YOU ARE LOGGED IN AS:'.$user_name;  ?>
            <br>
            <br>
                <p><u>ADMIN</u></p>
            </div>
            <ul id="options">
                <li class="option <?php if($page=='dashboard'){ echo 'active';}?>"> 
                    <a href="./dashboard.php">
                    <i class="fa fa-bar-chart"></i> Dashboard
                    </a>
                </li>
                <li class="option <?php if($page=='bus'){ echo 'active';}?>">
                    <a href="./bus.php">
                    <i class="fas fa-bus"></i> Buses
                    </a>
                </li>
                <li class="option <?php if($page=='route'){ echo 'active';}?>">
                    <a href="./route.php">
                    <i class="fas fa-road"></i> Routes    
                    </a>
                </li>
                
                <li class="option <?php if($page=='customer'){ echo 'active';}?>">
                    <a href="./customer.php">
                    <i class="fas fa-users"></i> Customers
                    </a>
                </li>
                <li class="option <?php if($page=='booking'){ echo 'active';}?>">
                    <a href="./booking.php">
                    <i class="fas fa-ticket-alt"></i> Bookings
                    </a>
                </li>
                <li class="option <?php if($page=='seat'){ echo 'active';}?>">
                    <a href="./seat.php">
                    <i class="fas fa-th"></i> Seats
                    </a>
                </li>
                
                <li class="option <?php if($page=='signup'){ echo 'active';}?>">
                    <a href="./signup.php">
                    <i class="fas fa-user-lock"></i> Add New Admin        
                    </a>
                </li>
                <li class="welcome-item">
                        <ul id="logout" class="btn-sm">
                            <a href="../assets/partials/_logout.php">LOGOUT</a>
                        </ul>
                </li>
            </ul>
        </div>
        <div id="main-content">
            <section id="welcome">
                <ul>
                    <li class="welcome-item">HELLO, 
                        <span id="USER">
                            <?php 
                                echo $user_fullname;
                            ?>
                        </span>
                    </li>
                </ul>
            </section>