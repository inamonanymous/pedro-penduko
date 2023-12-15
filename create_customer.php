<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS -->
    <?php 
        require 'assets/styles/admin.php';
        require 'assets/styles/admin-options.php';
        $page="customer";
    ?>
</head>
<body>
    <?php 
        require 'assets/partials/_functions.php';
        $conn = db_connect();
    ?>
    <?php
        /*
            1. Check if an admin is logged in
            2. Check if the request method is POST
        */
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset($_POST["submit"]))
            {
                /*
                    ADDING Customers
                 Check if the $_POST key 'submit' exists
                */
                // Should be validated client-side
                $cname = $_POST["cfirstname"] . " " . $_POST["clastname"];
                $cphone = $_POST["cphone"];
        
                $customer_exists = exist_customers($conn,$cname,$cphone);
                $customer_added = false;
        
                if(!$customer_exists)
                {
                    // Route is unique, proceed
                    $sql = "INSERT INTO `customers` (`customer_name`, `customer_phone`, `customer_created`) VALUES ('$cname', '$cphone', current_timestamp());";
                    $result = mysqli_query($conn, $sql);
                    // Gives back the Auto Increment id
                    $autoInc_id = mysqli_insert_id($conn);
                    // If the id exists then, 
                    if($autoInc_id)
                    {
                        $code = rand(1,100);
                        // Generates the unique userid
                        $customer_id = "CSTMR-".$code.$autoInc_id;
                        
                        $query = "UPDATE `customers` SET `customer_id` = '$customer_id' WHERE `customers`.`id` = $autoInc_id;";
                        $queryResult = mysqli_query($conn, $query);

                        if(!$queryResult)
                            echo "Not Working";
                    }

                    if($result)
                        $customer_added = true;
                }
    
                if($customer_added)
                {
                    // Show success alert
                    echo '  <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                                    myModal.show();
                                });
                            </script>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Customer Added Successful! Customer ID: '. $customer_id .'</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Your Customer Record has been added, and it\'s crucial to remember or save your Customer ID:
                                            <span style="font-weight:bold; color: #272640;">'. $customer_id .'</span>. This ID is essential for creating your own Bus Seat booking. You can now proceed to Book a Ride Section
                                         </div>
                                    </div>
                                </div>
                            </div>';

                }
                else{
                    // Show error alert
                    echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Customer already exists
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
                  
        }
        ?>
        </div>
    </main>
    <!-- All Modals Here -->
    <!-- Add Route Modal -->
    <div id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add A Customer</h5>
                        <a href="/book_ride_page.php"><button type="button" class="btn-outline-danger" aria-label="Back">Back</button></a>
                    </div>
                    <div class="modal-body">
                        <form id="addCustomerForm" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="cfirstname" class="form-label">Customer Firstname</label>
                                <input type="text" class="form-control" id="cfirstname" name="cfirstname">
                            </div>
                            <div class="mb-3">
                                <label for="clastname" class="form-label">Customer Lastname</label>
                                <input type="text" class="form-control" id="clastname" name="clastname">
                            </div>
                            <div class="mb-3">
                                <label for="cphone" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="cphone" name="cphone">
                            </div>
                            <button type="submit" id="add" class="btn btn-success" name="submit">ADD</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--Anything -->
                    </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- External JS -->
    <script src="assets/scripts/admin_customer.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>