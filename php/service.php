<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services Provided</title>
<link rel="stylesheet" href="stylesv.css">
</head>
<body>
<main>
  <h2>SERVICES</h2>
  <p>We aim to provide a real world practical learning experience and keep students informed about the latest trends in technology, open-source and opportunities.</p>
  <section class="services">
    <a href="index.html"><article class="service">
      <h3>Code Editor</h3>
      <p>Hover to know more</p>
    </article></a>
    <article class="service">
      <h3>Online Webinars</h3>
      <p>Hover to know more</p>
    </article>
    <article class="service">
      <h3>Doubt Support</h3>
      <p>Hover to know more</p>
    </article>
    <article class="service">
      <h3>Guidance</h3>
      <p>Hover to know more</p>
    </article>
  </section>
</main>
</body>
</html>
