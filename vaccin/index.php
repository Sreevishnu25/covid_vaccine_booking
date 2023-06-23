<!DOCTYPE html>
<html>
<head>
  <title>COVID Vaccination Booking System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>COVID Vaccination Booking System</h1>
    <form action="booking.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="center">Vaccination Center:</label>
      <select id="center" name="center">
        <option value="center1">Center 1</option>
        <option value="center2">Center 2</option>
        <option value="center3">Center 3</option>
      </select>

      <button type="submit">Book Appointment</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
