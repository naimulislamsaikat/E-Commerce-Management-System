<!DOCTYPE html>
<html>

<head>
    <title>ShopLio</title>
    <link rel="stylesheet" href="../CSS/edit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <!-- Top left -->
        <header>
            <div class="top">
                <div class="logo">
                    <h2>Hello, HR!</h2>
                </div>
            </div>

            <!-- left panel option bar -->
            <div class="sidebar">
                <a href="dashboard.html">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="profile.php" class="active">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Profile</h3>
                </a>

                <a href="employee.php">
                    <span class="material-symbols-outlined">article_person</span>
                    <h3>Employee Information</h3>
                </a>

                <a href="edit_hr.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove HR</h3>
                </a>

                <a href="edit_accountant.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Accountant</h3>
                </a>

                <a href="edit_deliveryman.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Delivery Man</h3>
                </a>

                <a href="edit_customer.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Customer</h3>
                </a>

                <a href="edit_product.php">
                    <span class="material-symbols-outlined">assessment</span>
                    <h3>Add/Remove Product</h3>
                </a>

                <a href="leave_days.php">
                    <span class="material-symbols-outlined">event</span>
                    <h3>Leave List</h3>
                    <span class="mgs_count">5</span>
                </a>

                <a href="give_leave.php">
                    <span class="material-symbols-outlined">event</span>
                    <h3>Leave Management</h3>
                </a>

                <a href="training.php">
                    <span class="material-symbols-outlined">cast_for_education</span>
                    <h3>Training & Development</h3>
                </a>

                <a href="../../Customer/View/login.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>

        </header>

        <!-- Top center -->
        <main>
            <div class="center">
                <div class="top">
                    <h1>Personal Profile details</h1>

                    <div class="main-content">
                        <!-- Order Summary DB -->
                        <form action="../DB/update-hr.php" method="POST">
                            <table id="acc">
                                <br>
                                <h2>Hi, HR! Want to update your informations</h2>
                                <thead class="form-style">
                                    <tr>
                                        <td><b>ID:</b></td>
                                        <td><input type="number" name="id" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Name:</b></td>
                                        <td><input type="text" name="name" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email:</b></td>
                                        <td><input type="email" name="email" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Contact Number:</b></td>
                                        <td><input type="number" name="number" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Password:</b></td>
                                        <td><input type="password" name="password" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Address:</b></td>
                                        <td><input type="text" name="address" required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Joining Date:</b></td>
                                        <td><input type="date" name="joining" required></td>
                                    </tr>
                                </thead>
                                <?php include '../DB/update-hr.php'; ?>
                            </table>
                            <button type="submit" class="btn">Update HR</button>
                        </form>

                        <div class="table-box">
                            <h1><br>HR Information</h1>
                            <table id="hr">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Joining Date</th>
                                </tr>
                                <?php include '../DB/show_hr.php' ?>
                            </table>
                        </div>
                        <div class="profile-photo">
                            <img src="../Img/HR_logo.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>