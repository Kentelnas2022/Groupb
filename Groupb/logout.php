<?php
class UserLogout {
    // Method to logout the user by destroying the session
    public function logoutUser() {
        session_start(); // Start the session
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
    }
}

$userLogout = new UserLogout();
$userLogout->logoutUser(); // Call the logoutUser method to log out the user
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| LOGOUT |</title>
    <style>
        /* Styling for the logout message */
        body {
            font-family: Arial, sans-serif;
            background-color: #76292A;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #FFC0C0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h1 {
            color: #4caf50;
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        img {
            width: 250px;
            height: auto;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- HTML content to display the logout message -->
    <div class="container">
        <img src="/Groupb/img/sad.png" alt="sad meme">
        <h1 style="color: red;">You've Logout. </h1>
        <p>If you want to login again Click <a href="mainpage.php">here</a> to login.</p>
    </div>
</body>

</html>
