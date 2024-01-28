<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="/Groupb/css/user_dashboard.css">
</head>
<body>

<?php
function connectToDatabase() {
    $host = "your_host";
    $username = "your_username";
    $password = "your_password";
    $database = "appointments";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getTotalAppointments() {
    $conn = connectToDatabase();

    $totalAppointmentsQuery = "SELECT COUNT(*) AS totalAppointments FROM appointments";
    $result = $conn->query($totalAppointmentsQuery);
    $row = $result->fetch_assoc();
    $totalAppointments = $row['totalAppointments'];

    $conn->close();

    return $totalAppointments;
}

function getSuccessfulAppointments() {
    $conn = connectToDatabase();

    // Modify the condition based on your database structure
    $successfulAppointmentsQuery = "SELECT COUNT(*) AS successfulAppointments FROM appointments WHERE status = 'success'";
    $result = $conn->query($successfulAppointmentsQuery);
    $row = $result->fetch_assoc();
    $successfulAppointments = $row['successfulAppointments'];

    $conn->close();

    return $successfulAppointments;
}
?>

<div class="dashboard">
  <aside class="sidebar">
    <!-- Add a div for the profile picture -->
    <div class="profile-picture"></div>
    <h1>Hi Kent Zorel Elnas</h1>
    <nav>
      <ul>
        <li><a href="user_dashboard.php">Dashboard</a></li>
        <li><a href="appointment.php">Appointment</a></li>
        <li><a href="user_settings.php">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </aside>

  <main class="content">
    <header>
      <h1>Welcome to the Dashboard</h1>
    </header>

    <!-- Appointments Section -->
    <section class="appointments">
      <h2>Appointments</h2>

      <?php
      $totalAppointments = getTotalAppointments();
      $successfulAppointments = getSuccessfulAppointments();
      ?>

      <p>Total Appointments: <?php echo $totalAppointments; ?></p>
      <p>Successful Appointments: <?php echo $successfulAppointments; ?></p>

      <!-- Your existing form elements -->
      <form action="process_appointment.php" method="post">
        <!-- Your form elements go here -->
        <input type="submit" value="Schedule Appointment">
      </form>

      <!-- Print button -->
      <button onclick="window.print()">Print Appointment Details</button>
    </section>
    <!-- End Appointments Section -->
  </main>
</div>

</body>
</html>
