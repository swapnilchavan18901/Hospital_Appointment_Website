<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="5" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <style>
    .head {
      display: flex;
      margin: 20px;
    }
    .btn {
      margin-left: 700px;
    }
  </style>
  <body>
    <div class="container">
      <div class="head">
        <h1>All Records</h1>
        <button class="btn btn-danger" onclick90=<?php echo "hello worldasa"?>>Delete All Records</button>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">SrNo.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="booking_appointment";
            $conn=mysqli_connect($servername,$username,$password,$database);
            $sql="SELECT * FROM `bookingform`";
            $result=mysqli_query($conn,$sql);
            $SrNo=0;
            while ($row=mysqli_fetch_assoc($result)) {

              $SrNo=$SrNo+1;
              echo"
              <tr>
              <th scope='row'>".$SrNo."</th>
              <td>".$row['Name']."</td>
              <td>".$row['EmailAddress']."</td>
              <td>".$row['ContactNo.']."</td>
              <td>".$row['Message']."</td>
              <td>".$row['Date']."</td>
              </tr>";
            }
            $conn->close();
            ?>      
        </tbody>
      </table>
    </div>
  </body>
</html>
