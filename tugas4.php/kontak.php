<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
    .contact-container {
      text-align: center; 
      margin: 50px auto;
      max-width: 600px; 
    }
  </style>
</head>
<body>

    <h1 align="center">Contact Me</h1>


  <div class="contact-container" text-align="center">
    <form action="submit_contact.php" method="POST">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="subjek">Subjek:</label>
      <input type="text" id="subjek" name="subjek" required><br>

      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" rows="5" required></textarea><br>

      <input type="submit" value="Kirim" class="btn">
    </form>
  </div>
</body>
</html>
