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

                <a href="profile.php">
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

                <a href="give_leave.php" class="active">
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
                    <h1>Employee Leave Handling</h1>

                <div>    
                    <form action="../DB/leave_hr.php" method="POST">
                        <h2>HR info</h2>
                        <table id="hr">
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
                                    <td><b>Contact Number:</b></td>
                                    <td><input type="number" name="number" required></td>
                                </tr>
                                <tr>
                                    <td><b>Leave Request:</b></td>
                                    <td><input type="text" name="leaves" required></td>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn">Approve Leaves</button>
                    </form>

                    <form action="../DB/leave_accountant.php" method="POST">
                        <br><h2>Accountant Info</h2>
                        <table id="hr">
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
                                    <td><b>Contact Number:</b></td>
                                    <td><input type="number" name="number" required>
                                </tr>
                                <tr>
                                    <td><b>Leave Request:</b></td>
                                    <td><input type="text" name="leaves" required></td>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn">Approve Leaves</button>
                    </form>
                            
                    <form action="../DB/leave_deliveryman.php" method="POST">
                        <br><h2>Delivery Man Info</h2>
                        <table id="hr">
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
                                    <td><b>Contact Number:</b></td>
                                    <td><input type="number" name="number" required>
                                </tr>
                                <tr>
                                    <td><b>Leave Request:</b></td>
                                    <td><input type="text" name="leaves" required></td>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn">Approve Leaves</button>
                    </form>

                </div>
            </div>
        </main>
    </div>
</body>
</html>