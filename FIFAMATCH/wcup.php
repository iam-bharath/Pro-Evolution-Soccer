<html>
<head>
  <meta charset="UTF-8">
  <title>Database</title>
  
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->
<!--    <link rel='stylesheet' href='css/34b729901a37198f5d0414728.css'>-->
<!--      <link rel="stylesheet" href="css/style.css">-->
<!--      <link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>-->
<!--      <link href="css/menu.css" rel="stylesheet" type="text/css">-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>   -->
<!--      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />-->
    <link rel="stylesheet" href="styling.css">
  
	<meta name="viewport" content="width=device-width,initial-scale=1">
<!--
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<!--

    <script src='js/4032af61ca0478304ab7b31b7.js'></script>

    <script  src="js/index.js"></script>
-->

</head>
    <style>
.jumbotron{
  background-color: #808080;
  color: #02386E;
  padding: 100px 100px;
  font-family: Montserrat,sans-serif;
   background: url("russia.jpg") ; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
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
background-image:linear-gradient(to top, #fddb92 0%, #d1fdff 100%);
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
 <br>
    <br><br><br>
</div> 
<body style=" background-image: linear-gradient(to top, #fddb92 0%, #d1fdff 100%);">
    
      <ul class="active">
         <li><a href="../sportz/about.html">Home</a></li>
          <li><a href="../sportz/team.html">Team</a></li>
          <li><a href="../search_player/player_search.html">Search</a> </li>
          <li><a href="../insert_player/insert_new_player.html">Insert</a></li>
          <li><a href="../database/database.php">Database</a></li>
          <li><a href="../update_player/update_player.html">update</a></li>
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
        
 
<!--</div><br>-->
    
  <div class="container">
  <table class="table table-fixed">
      <thead>
    <tr>
      <th class="col-xs-3">ROUND NUMBER</th>
      <th class="col-xs-3">DATE</th>
        <th class="col-xs-6">LOCATION</th>
         <th class="col-xs-3">HOME TEAM</th>
          <th class="col-xs-3">AWAY TEAM</th>
            <th class="col-xs-6">GROUP</th>
            <th class="col-xs-6">RESULT</th>
    </tr>
  </thead>
  <tbody>
 <?php
$sql = "SELECT * FROM worldcup";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
        
        echo "<td>" .$row["COL 1"]. "</td>";
         echo "<td>" .$row["DATE"]. "</td>";
          echo "<td>" .$row["COL 3"]. "</td>";
         echo "<td>" .$row["COL 4"]. "</td>";
         echo "<td>" .$row["COL 5"]. "</td>";
         echo "<td>" .$row["COL 6"]. "</td>";
         echo "<td>" .$row["COL 7"]. "</td>";
         
         echo "</tr>";  
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
    </tbody>
  </table>
</div>

    
    
    
    </body>
</html>