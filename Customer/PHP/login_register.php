<?php

session_start();
Include 'config.php';

if (isset($_POST['register'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $checkEmail = $conn->query("SELECT * FROM customer_table WHERE Customer_Email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    }
     else {
        // Insert new user
        $conn->query("INSERT INTO customer_table 
            (Customer_Name, Customer_Email, Customer_Password) 
            VALUES 
            ('$name', '$email', '$password')");
    }

    session_unset();
    header("location:../View/login.php");
    exit();
}

// login
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail     = $_POST['email'];
    $password = $_POST['password'];

    if (preg_match("/^[a-zA-Z0-9._]+@(gmail\.com|yahoo\.com|email\.com)$/", $mail)) {
        $sql = "SELECT * FROM customer_table WHERE Customer_Email = '$mail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); // fetch only one row
            
             setcookie("id", $row['Customer_ID'], time()+86400, "/");

            // set session
            $_SESSION['id']    = $row['Customer_ID'];
            $_SESSION['name']  = $row['Customer_Name'];
            $_SESSION['email'] = $row['Customer_Email'];

            // check password (plain text match, since you didn’t use hash here)
            if ($password === $row['Customer_Password']) {
                header("Location: ../View/index.html");
                exit();
            } else {
                echo "<script>alert('Invalid password');</script>";
            } 
        }
        
    }
// session_start();
// include 'config.php';

// // REGISTER
// if (isset($_POST['register'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role = $_POST['role'];

//     // Check if email already exists
//     $checkEmail = $conn->query("SELECT Customer_Email FROM customer_table WHERE Customer_Email = '$email'");

//     if ($checkEmail->num_rows > 0) {
//         $_SESSION['register_error'] = 'Email is already registered';
//         $_SESSION['active_form'] = 'register';
//     } else {
//         $conn->query("INSERT INTO customer_table (Customer_Name, Customer_Email, Customer_Password, Customer_Role) 
//                       VALUES ('$name', '$email', '$password', '$role')");
//         $_SESSION['register_success'] = 'Registration successful! Please login.';
//     }

//     header("Location: ../View/login.php");
//     exit();
// }

// // LOGIN
// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $result = $conn->query("SELECT * FROM customer_table WHERE Customer_Email = '$email'");

//     if ($result->num_rows > 0) {
//         $user = $result->fetch_assoc();

//         if ($password === $row['Customer_Password']) {
//             // Save info in session
//             $_SESSION['id'] = $user['Customer_ID'];
//             $_SESSION['name'] = $user['Customer_Name'];
//             $_SESSION['email'] = $user['Customer_Email'];
//             $_SESSION['role'] = $user['Customer_Role'];

//             setcookie("id", $user['Customer_ID'], time() + 86400, "/");

//             // Redirect by role
//             if ($user['Customer_Role'] === 'admin') {
//                 header("Location: ../View/admin.php");
//             } elseif ($user['Customer_Role'] === 'user') {
//                 header("Location: ../View/index.html");
//             } elseif ($user['Customer_Role'] === 'hr') {
//                 header("Location: ../View/hr.php");
//             } else {
//                 header("Location: ../View/delivery_man.php");

//             }
//         } else {
//             echo "<script>alert('Email not found');</script>";
//         }
//     }


else{
            $sql = "SELECT * FROM employee_table WHERE Employee_Email = '$mail'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                setcookie("id", $row['Employee_ID'], time()+86400, "/");
                    $_SESSION['id'] = $row['Employee_ID'];
                    $_SESSION['name'] = $row['Employee_Name'];
                    $_SESSION['email'] = $row['Employee_Email'];
                    $_SESSION['phone'] = $row['Employee_Number'];
                    $_SESSION['department'] = $row['Employee_Department'];
                    $_SESSION['joiningdate'] = $row['Employee_Joining_Date'];

                    echo $_SESSION['department'] . $_SESSION['joiningdate'];

                    // $password = $row['Customer_Password'];
               

            if ($password === $row['Employee_Password']) {
                if(preg_match("/^[a-zA-Z0-9._]+@(accountant\.com)$/",$mail)){
                    header("Location: ../../Accountant/View/AccountantDashboard.php");
                }else if(preg_match("/^[a-zA-Z0-9._]+@(hr\.com)$/",$mail)){
                    header("Location: ../../HR/View/dashboard.html");
                }else if(preg_match("/^[a-zA-Z0-9._]+@(deliveryman\.com)$/",$mail)){
                    header("Location: ../../DeliveryMan/view/Oder_Status.php");
                }else{
                    echo "<script>alert('Invalid email format');</script>";
                }
            }
            else{
$_SESSION['login_error'] = 'Incorrect email or password';
$_SESSION['active_form'] = 'login';
header("Location: ../View/login.php");
exit();
            }
        }
        
    }
exit();

    // Wrong login

}
   
?>
