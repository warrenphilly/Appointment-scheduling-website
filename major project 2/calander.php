
<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tutorial";
    $error = "Cannont connect to database, Please try again later...";

    $conn = mysqli_connect($hostname, $username, $password,$dbname) or die ($error);
    

?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
     #neat{
      background-color: #D63E2B;
      color:white;
      border-radius: 35px;
      margin-top:300px;
      padding:10px;
    
  }
    table{
        color:white

    }
    table a{
        color:white;
        text-decoration: none;
    }

    table a:visited{
        color:white;
        text decoration: none;
    }
.today{
background-color: #FABEA6;
}

#cal{
    background-color:  #D63E2B;
    color:white
}
</style>
</head>
<body>
<center>
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
$resultinginsert = mysqli_query($conn, $sqlinsert);
if($resultinginsert ){
echo "Booking was successfully Added...";
}else{
echo "Booking Failed to be Added....";
}
}
?>
<div id="cal">
    <a href ="index.html">< Back to Home</a>
    <h1>*Please select a date*</h1>
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
<?php
if(isset($_GET['v'])) {

echo "<br/><br/><a id='neat' href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Confirm Date</a>";
if(isset($_GET['f'])) {
include("eventform.php");
}

}
?>
</body>
</center>
</html> 