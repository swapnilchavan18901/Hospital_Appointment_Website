<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />

    <title>GPPhospitals</title>
   
  </head>
  <body>
    <?php error_reporting(0); ?>

    <nav class="navbar">
      <span class="logo">
        <img src="./assets/pharmacy.png" class="log" />
        <span class="">GPPhospitals</span>
      </span>
      <ul class="ul_bar">
        <li>
          <a href="#" class="a">ABOUT US</a>
        </li>
        <li>
          <a href="#" class="a"> Find a Docter</a>
        </li>
        <li>
          <a href="#" class="a"> CONTACT US? 9767852959</a>
        </li>
        <img src="./assets/email.png" />
        <img src="./assets/facebook.png" />
        <img src="./assets/instagram.png" />
        <img src="./assets/linkedin.png" />
        <img src="./assets/twitter.png" />
      </ul>
    </nav>
    <div class="container">
      <div class="con1">
        <span class="span_consult">Consult</span>
        <span class="span_trusted">TRUSTED EXPERTS </span
        ><span>AT YOUR COMFORT</span>
      </div>

      <form class="form" action="index.php" method="POST">
        <div class="bkapt">BOOK APPOINTMENT</div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input
            type="text"
            placeholder="Your Name"
            class="form-control"
            name="name"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            name="email"
            placeholder="example@mail.com"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Contact No.
          </label>
          <input
            placeholder="+91 0000000000"
            type="tel"
            class="form-control"
            name="contact"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputMessge1" class="form-label">Message</label>
          <input
            placeholder="Type your message"
            type="text"
            class="form-control"
            name="message"
          />
        </div>

        <button class="button" type="submit">Submit</button>
      </form>
    </div>

    <?php
      $usernam=$_POST["name"];
      $email=$_POST["email"];
      $contact=$_POST["contact"];
      $message=$_POST["message"];
      $success=false;
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        require './dataBase/DB.php';
    
      }
 
  ?>
  </body>
</html>
