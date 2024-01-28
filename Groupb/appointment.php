<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #76292A;
}

.dashboard {
  display: flex;
  height: 100vh;
}

.sidebar {
  background-size: cover;
  background-position: center;
  color: white;
  padding: 20px;
  width: 250px;
}

.sidebar .profile-picture {
  height: 80px;
  width: 80px;
  background-color: #fff; /* Add a background color for the circular container */
  border-radius: 50%;
  margin-bottom: 20px;
  background-image: url('/Groupb/img/profile.png'); /* Add the path to your profile picture */
  background-size: cover;
  background-position: center;
}

.sidebar h1 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

nav ul {
  list-style: none;
  padding: 0;
}

nav a {
  text-decoration: none;
  color: white;
  display: block;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

nav a:hover {
  background-color: #ffffff;
}

.content {
  flex: 1;
  padding: 20px;
}

header {
  background-color: #FFC0C0;
  color: #060505;
  padding: 20px;
  text-align: center;
}

h2 {
  color: #333;
}

.appointments {
  background-color: #FFC0C0;
  padding: 20px;
  margin-top: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.appointments h2 {
  color: #333;
}

.appointments form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.appointments label {
  font-weight: bold;
  color: #333;
}

.appointments input,
.appointments textarea {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ddd;
  margin-top: 5px;
}

.appointments input[type="submit"] {
  background-color: #4070f4;
  color: #fff;
  cursor: pointer;
  border: none;
  padding: 12px;
  font-size: 16px;
  font-weight: 500;
}

.appointments input[type="submit"]:hover {
  background-color: #30559c;
}

/* Print styles */
@media print {
  body {
    background-color: white;
  }

  .dashboard {
    display: block;
    margin: 0;
    padding: 20px;
    box-shadow: none;
  }

  .sidebar,
  .appointments {
    background-color: white;
    box-shadow: none;
  }

  .profile-picture,
  .content {
    display: none;
  }
}
</style>


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
      <form action="process_appointment.php" method="post">
        <label for="appointmentDate">Appointment Date:</label>
        <input type="date" name="appointmentDate" required>
        
        <label for="appointmentTime">Appointment Time:</label>
        <input type="time" name="appointmentTime" required>
        
        <label for="reason">Reason for Appointment:</label>
        <textarea name="reason" placeholder="Enter your reason for the appointment" rows="4" required></textarea>

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