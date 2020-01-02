<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Database</title>
  
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->
<!--    <link rel='stylesheet' href='css/34b729901a37198f5d0414728.css'>-->
      <link rel="stylesheet" href="css/style.css">
<!--      <link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>-->
<!--      <link href="css/menu.css" rel="stylesheet" type="text/css">-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>   -->
<!--      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />-->
  
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.jumbotron{
  background-color: #808080;
  color: #02386E;
  padding: 100px 100px;
  font-family: Montserrat,sans-serif;
   background: url("realmadrid.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
/*
.bg-grey
    {
		background-color:#BFAFB2 ;
	}    
*/
/*Sticky Navbar    */
body {
  font-size: 28px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #001f3f;
}    
h2{
  font-size: 30px;
    font-weight: 800;
  color: #FFFFFF;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}   
    p{
        color: #00264D;
    }
    body{
        background: url("edgar1.jpg");
    }
    
</style>
<div class="jumbotron text-center ">
  <br><br><br><br>
</div> 
<body>
    
  <section>
      <ul class="active">
          
           <li><a href="../sportz/about.html">Home</a></li>
          <li><a href="../sportz/team.html">Team</a></li>
          <li><a href="../search_player/player_search.html">Search</a> </li>
          <li><a href="../insert_player/insert_new_player.html">Insert</a></li>
          <li><a href="database.php">Database</a></li>
          <li><a href="../update_player/update_player.html">update</a></li>
          <li><a href="../FIFAMATCH/wcup.php"><i>FIFAWC</i></a></li>
            <li><a href="../englishpremier/rajreq.php"><i>UEFA</i></a></li>
          
         
        </ul>  <br>      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "football";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>
  <h2 class>PERSONAL DETAILS</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>NAME</th>
          <th>AGE</th>
          <th>OVERALL RATING</th>
          <th>NATIONALITY</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM personal_details ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["player_name"]. "</td>";
          echo "<td>" .$row["age"]. "</td>";
         echo "<td>" .$row["overall_rating"]. "</td>";
          echo "<td>" .$row["nationality"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>

  <h2>PLAYER POSITIONS</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>GOALKEEPER</th>
          <th>DEFENDER</th>
          <th>CENTRAL-MID</th>
          <th>FORWARD</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM position ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["gk"]. "</td>";
          echo "<td>" .$row["df"]. "</td>";
         echo "<td>" .$row["cm"]. "</td>";
          echo "<td>" .$row["fr"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
      
  <h2>PLAYER EARNINGS</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>WAGE</th>
          <th>VALUE</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM salary ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["wage"]. "</td>";
          echo "<td>" .$row["value"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
        <h2>PLAYER STATS</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
        <th>ACCELERA TION</th>
            <th>BALANCE</th>
            <th>BALL CONTROL</th>
            <th>CROSSING</th>
            <th>CURVE</th>
            <th>DRIBBLING</th>
            <th>FINISHING</th>
            <th>GK KICKING</th>
            <th>GK POSITIONING</th>
            <th>PENALTIES</th>
            <th>SHORT PASS</th>
            <th>STAMINA</th>
            <th>STRENGTH</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM player_stats ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
        echo "<td>" .$row["acceleration"]. "</td>";
          echo "<td>" .$row["balance"]. "</td>";
         echo "<td>" .$row["ball_control"]. "</td>";
         echo "<td>" .$row["crossing"]. "</td>";
         echo "<td>" .$row["curve"]. "</td>";
         echo "<td>" .$row["dribbling"]. "</td>";
         echo "<td>" .$row["finishing"]. "</td>";
         echo "<td>" .$row["gk_kicking"]. "</td>";
         echo "<td>" .$row["gk_positioning"]. "</td>";
         echo "<td>" .$row["penalties"]. "</td>";
         echo "<td>" .$row["short_pass"]. "</td>";
         echo "<td>" .$row["stamina"]. "</td>";
         echo "<td>" .$row["strength"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
            
  <h2>PLAYER CLUB</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>CLUB</th>
          <th>PREFERRED POSITION</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM other_details ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["club"]. "</td>";
          echo "<td>" .$row["preferred_position"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }  
$conn-> close();
?>
<!-- </tbody>-->
</table>
</div><br>
      
<!--
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <rect id="dot-js" x="80" y="352" width="32" height="32" rx="16"></rect>
    </g>
-->
</section>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script src='js/4032af61ca0478304ab7b31b7.js'></script>

    <script  src="js/index.js"></script>


</body>

</html>
