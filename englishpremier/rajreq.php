<html>
<head>
  <meta charset="UTF-8">
  <title>Database</title>
<!--   <link rel="stylesheet" href="styling.css">-->
  
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

</head>
    <style>
.jumbotron{
  background-color: #808080;
  color: #02386E;
  padding: 100px 100px;
  font-family: Montserrat,sans-serif;
   background: url("madrid.jpg") no-repeat center center fixed ; 
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
background-color:#0074D9;
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
            background-color: #7FDBFF;
        }   
    

   
        
</style>
<div class="jumbotron text-center ">
 <br>
    <br><br><br>
</div> 
<body>
    
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
<!--        <h2>ENGLISH MATCH DATA</h2>-->
  <div class="container">
  <table class="table table-fixed">
      <thead>
        <tr>
             <th class="col-xs-1">DATE</th>
      <th class="col-xs-5">HOMETOWN</th>
             <th class="col-xs-63">AWAYTEAM</th>
      <th class="col-xs-3">FTHG</th>
             <th class="col-xs-1">FTAG</th>
      <th class="col-xs-5">FTR</th>
        <th class="col-xs-3">HTHG</th>
      <th class="col-xs-3">HTAG</th>
             <th class="col-xs-1">HTR</th>
      <th class="col-xs-5">REFEREE</th>
             <th class="col-xs-3">HS</th>
      <th class="col-xs-3">AS</th>
             <th class="col-xs-1">HST</th>
      <th class="col-xs-5">AST</th>
             <th class="col-xs-3">HF</th>
      <th class="col-xs-3">AF</th>
             <th class="col-xs-1">HC</th>
      <th class="col-xs-5">AC</th>
      
         
     </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM english ORDER BY DATE";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["DATE"]. "</td>";
        echo "<td>" .$row["COL 2"]. "</td>";
          echo "<td>" .$row["COL 3"]. "</td>";
         echo "<td>" .$row["COL 4"]. "</td>";
         echo "<td>" .$row["COL 5"]. "</td>";
         echo "<td>" .$row["COL 6"]. "</td>";
         echo "<td>" .$row["COL 7"]. "</td>";
         echo "<td>" .$row["COL 8"]. "</td>";
         echo "<td>" .$row["COL 9"]. "</td>";
         echo "<td>" .$row["COL 10"]. "</td>";
         echo "<td>" .$row["COL 11"]. "</td>";
         echo "<td>" .$row["COL 12"]. "</td>";
         echo "<td>" .$row["COL 13"]. "</td>";
         echo "<td>" .$row["COL 14"]. "</td>";
        echo "<td>" .$row["COL 15"]. "</td>";
        echo "<td>" .$row["COL 16"]. "</td>";
        echo "<td>" .$row["COL 17"]. "</td>";
        echo "<td>" .$row["COL 18"]. "</td>";
        
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