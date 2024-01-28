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
.settings {
  background-color: #FFC0C0;
  padding: 20px;
  margin-top: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.settings h2 {
  color: #333;
}

.settings form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.settings label {
  font-weight: bold;
  color: #333;
}

.settings input {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ddd;
  margin-top: 5px;
}

.settings input[type="file"] {
  border: none;
}

.settings input[type="submit"] {
  background-color: #4070f4;
  color: #fff;
  cursor: pointer;
  border: none;
  padding: 12px;
  font-size: 16px;
  font-weight: 500;
}

.settings input[type="submit"]:hover {
  background-color: #30559c;
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

    <!-- Settings Section -->
    <section class="settings">
      <h2>Settings</h2>
      <form action="userfunction_settings.php" method="post" enctype="multipart/form-data">
        <label for="profileImage">Profile Picture:</label>
        <input type="file" name="profileImage" accept="image/*">
        
        <label for="fullName">Full Name:</label>
        <input type="text" name="fullName" placeholder="Your Full Name">
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Your Email">

        <label for="password">New Password:</label>
        <input type="password" name="password" placeholder="New Password">

        <input type="submit" value="Save Changes">
      </form>
    </section>
    <!-- End Settings Section -->
  </main>
</div>

</body>
</html>
