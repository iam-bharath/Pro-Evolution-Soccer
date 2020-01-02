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
   background: url("wall.jpg") no-repeat center center fixed; 
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
  background-color: #02386E;
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
    
</style>
<div class="jumbotron text-center ">
  <h1>Pro Evolution Soccer</h1>  
  <p align="right">Always earned , Never given ⚽</p>
</div> 
<body style="background-image: linear-gradient(to right top, #00172D, #00264D, #00264D, #00172D);">
    
  <section>
      <ul class="active">
          
           <li><a href="../sportz/about.html">Home</a></li>
          <li><a href="../search_player/player_search.html">Search</a> </li>
          <li><a href="../insert_player/insert_new_player.html">Insert</a></li>
          <li><a href="database.php">Database</a></li>
          <li><a href="../FIFAMATCH/wcup.php"><i>FIFAWC</i></a></li>
            <li><a href="../englishpremier/rajreq.php"><i>UEFA</i></a></li>
          
         
        </ul>  <br>      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifa";

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
$sql = "SELECT * FROM personal_details WHERE age<29 AND overall_rating>85 ";
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
 </tbody>
</table>

</body>

</html>
