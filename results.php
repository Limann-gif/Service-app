<?php

$con=mysqli_connect('localhost','root','','contestants_db') or die ("connection  failed: ");

?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Votes Management Service</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>



   <center><h2>LIST OF CONTESTANTS AND VOTES</h2></center>
          <br/>
          <br/>
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Contestant Name</th>
                  <th>Contestant Code</th>
                  <th>Contestant Votes</th>
              </tr>

          </thead>
          <tbody>

          <?php
                $result=mysqli_query($con,"SELECT C.contestant_code,sum(contestant_votes) AS contestant_votes, C.Contestant_name FROM votes V inner join contestants C ON V.contestant_code = C.Contestant_code GROUP BY contestant_code ORDER BY contestant_votes DESC");

                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row['Contestant_name'];
                    echo "</td><td>";

                    echo $row['contestant_code'];
                    echo "</td><td>";

                    echo $row['contestant_votes'];
                    echo "</td></tr>";

                }
                ?>

          </tbody>
      </table>
                <center>
                  <th> <a href="http://localhost/Votes/results.php"  class="btn btn-lg btn-primary pull-left" button onclick="window.print()">PRINT</a> </th>
                </center>
                       <a href="form.php">Go back to cast another vote</a>
   </body>
</html>
