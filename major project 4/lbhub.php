
<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webapps2";
    $error = "Cannont connect to database, Please try again later...";

    $conn = mysqli_connect($hostname, $username, $password,$dbname) or die ($error);
    

?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<script>
function goLastMonth(month, year){
if(month == 1) {
--year;
month = 13;
}
--month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
function goNextMonth(month, year){
if(month == 12) {
++year;
month = 0;
}
++month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
</script>
<style>
    #gene{
        border-radius: 5px;
        border:none;
        padding:20px;
        background-color:#D63E2B;
        font-size: 16pt;
        color:#EEEEEE;
    }
    #searchM{
        border-radius: 35px;
        border:none;
        padding:20px;
        background-color:#EEEEEE;
        font-size: 16pt;
    }
.today{
background-color: #00ff00;
}
.event{
background-color: #FF8080;
}
</style>
</head>
<body>
<?php
if (isset($_GET['day'])){
$day = $_GET['day'];
} else {
$day = date("j");
}
if(isset($_GET['month'])){
$month = $_GET['month'];
} else {
$month = date("n");
}
if(isset($_GET['year'])){
$year = $_GET['year'];
}else{
$year = date("Y");
}
$currentTimeStamp = strtotime( "$day-$month-$year");
$monthName = date("F", $currentTimeStamp);
$numDays = date("t", $currentTimeStamp);
$counter = 0;
?>
<?php
if(isset($_GET['add'])){
$title =$_POST['txttitle'];
$detail =$_POST['txtdetail'];
$eventdate = $month."/".$day."/".$year;
$sqlinsert = "INSERT into eventcalendar(Title,Detail,eventDate,dateAdded) values ('".$title."','".$detail."','".$eventdate."',now())";
$resultinginsert = mysql_query($sqlinsert);
if($resultinginsert ){
echo "Event was successfully Added...";
}else{
echo "Event Failed to be Added....";
}
}
?>
<center>
    <h1>Welcome to the employee hub</h1>
<h3>Click on a date to view appointments</h3>
<div id="calem">
<table border='0'>
<tr>
<td><input style='width:50px;' type='button' value='<'name='previousbutton' onclick ="goLastMonth(<?php echo $month.",".$year?>)"></td>
<td colspan='5'><?php echo $monthName.", ".$year; ?></td>
<td><input style='width:50px;' type='button' value='>'name='nextbutton' onclick ="goNextMonth(<?php echo $month.",".$year?>)"></td>
</tr>
<tr>
<td width='50px'>Sun</td>
<td width='50px'>Mon</td>
<td width='50px'>Tue</td>
<td width='50px'>Wed</td>
<td width='50px'>Thu</td>
<td width='50px'>Fri</td>
<td width='50px'>Sat</td>
</tr>
<?php
echo "<tr>";
for($i = 1; $i < $numDays+1; $i++, $counter++){
$timeStamp = strtotime("$year-$month-$i");
if($i == 1) {
$firstDay = date("w", $timeStamp);
for($j = 0; $j < $firstDay; $j++, $counter++) {
echo "<td>&nbsp;</td>";
}
}
if($counter % 7 == 0) {
echo"</tr><tr>";
}
$monthstring = $month;
$monthlength = strlen($monthstring);
$daystring = $i;
$daylength = strlen($daystring);
if($monthlength <= 1){
$monthstring = "0".$monthstring;
}
if($daylength <=1){
$daystring = "0".$daystring;
}
$todaysDate = date("m/d/Y");
$dateToCompare = $monthstring. '/' . $daystring. '/' . $year;
echo "<td align='center' ";
if ($todaysDate == $dateToCompare){
echo "class ='today'";
} else{
$sqlCount = "select * from eventcalendar where eventDate='".$dateToCompare."'";
$noOfEvent = mysqli_num_rows(mysqli_query($conn, $sqlCount));
if($noOfEvent >= 1){
echo "class='event'";
}
}
echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
}
echo "</tr>";
?>
</table>

</div>
<center>
    <br>
    <br>
<form action="lbhub.php" method="POST">
          <input id="searchM" type="text" name="search" placeholder="search customers">

            <input id="gene" value="search" type="submit" name="sub-search">
        
</form>
          </center>
</center>
<center>
<?php

$sqlEvent = "select * FROM eventcalendar where eventDate='".$month."/".$day."/".$year."'";
$resultEvents = mysqli_query($conn, $sqlEvent);

while ($events = mysqli_fetch_array($resultEvents)){
    echo "<hr>";
echo "name: ".$events['clientFname']." ".$events['clientLname']."<br>";
echo "Date: ".$events['eventDate']."<br>";
echo "Time: ".$events['eventTime']."<br>";
echo "Service: ".$events['services']."<br>";
echo "Tel: ".$events['clientNumber']."<br>";
echo "email: ".$events['email']."<br>";
echo "Additional Information: ".$events['info']."<br>";
echo "<hr>";


}
echo"no other bookings on this day";

?>
</center>


          <?php
               $hostname = "localhost";
               $username = "root";
               $password = "";
               $dbname = "webapps2";
               $error = "Cannont connect to database, Please try again later...";
            
               $conn = mysqli_connect($hostname, $username, $password,$dbname) or die ($error);
               

            if(isset($_POST['sub-search'])){

              $search =mysqli_real_escape_string($conn, $_POST['search']);
              if(empty($search)){
                header("Location: lbhub.php?error=noresultsfound");

                exit();
              }
              else{
                $sql = "SELECT * FROM eventcalendar WHERE clientFname LIKE'%$search%'";
                $result= mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if($queryResult >0){
                  while($row =mysqli_fetch_assoc($result)){



                    //echoes the table row html code
                        echo"<hr>";
                       
                        echo"<center>";
                        echo "Name:  ".$row['clientFname']." ";
                        echo $row['clientLname']."<br/>";
                        echo "time:  ".$row['eventTime']."<br/>";
                        echo "Date:  ".$row['eventDate']."<br/>";
                        echo "Service:  ".$row['services']."<br/>";
                        
                        echo "Tel:  ".$row['clientNumber']."<br/>";
                        echo "email:  ".$row['email']."<br/>";
                        echo "Additonal Information:  ".$row['info']."<br/>";
                        echo"</center>";
                        echo"<hr>";
                  }
                }
                else{
                  header("Location: searchM.php?error=nomatch");
                  exit();
                }

              }
            }

           ?>



            
           
</body>
</html> 