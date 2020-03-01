
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>

    
 
</head>
<body>
    
    <a href="index.html">back to home</a>
   
    <div id="head">
        <div id="menu">
            <center>
                <nav id="navigation"> 
                    <button id="select_service" class="nav_butt">Select Service</button>
                    <button id="enter_information" class="nav_butt">Enter Information</button>
                    <button id="confirm_booking" class="nav_butt">Comfirm booking</button>
                
                </nav>
                <form id="book">
                    <div id="selection">
                        <h3>Please select style</h3>
                        <label id="style_1">
                            <input id="hairstyle1" type="radio" name="h_style" />
                            
                
                            <span>This One</span>
                        </label>
                        
                        <label id="style_2">
                                <input id="hairstyle2" type="radio" name="h_style"><span>This One</span>

                        </label>
                        <label id="style_3">
                                <input id="hairstyle3" type="radio" name="h_style"><span>This One</span>

                        </label>
                        <label id="style_4">
                                <input id="hairstyle4"type="radio" name="h_style"><span>This One</span>

                        </label>
                      <br/>
                      <br />
                      <br/>
                      <label id="style_5">
                            <input id="hairstyle5"type="radio" name="h_style">
                            <span>This One</span>

                        </label>
                        <label id="style_6">
                             <input id="hairstyle6"type="radio" name="h_style"><span>This One</span>

                        </label>
                        <label id="style_7">
                                <input id="hairstyle7" type="radio" name="h_style"><span>This One</span>

                        </label>
                        <label id="style_8">
                                <input id="hairstyle8" type="radio" name="h_style"><span>This One</span>

                        </label>
                      
                     
                      
                    </div>
                    <div id="personal_info">
                        <h3>Please fill out the fields below</h3>
                        <input type ="textbox" class="textbo" placeholder=" First Name" />
                        <input type ="textbox" class="textbo" placeholder=" Last Name" />
                        <br />
                        <input type ="textbox"  class="textbo" placeholder=" Tel" />
                        <input type ="textbox"  class="textbo" placeholder=" Email" />
                        <h3>Select a date</h3>
                    
                         <div class="container">
                            <ul class="list-inline">
                                
                                <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
                            
                            </ul>
                            
                            <table class="table table-bordered">
                                
                                    <tr>
                                        <td>Sun</td>
                                        <td>Mon</td>
                                        <td>Tue</td>
                                        <td>Wed</td>
                                        <td>Thu</td>
                                        <td>Fri</td>
                                        <td>Sat</td>
                                        
                                    </tr>
                                
                                <tbody>
                                    <?php
                                        foreach ($weeks as $week) {
                                            echo $week;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
             

                        </table>
                        <button id="comfirm_booking">View Booking</button>
                    </div>
                    <div id="confimation">
                    </div>
                </form>
                
            </center>
        </div>
    </div>
<div class="clearfloat"></div>
    <div id="content">

    </div>
<div class="clearfloat"></div>
    <div id="submit">

    </div>
    <div class="clearfloat"></div>
    <div id="footer">
        <center>
                <p>Contact Info</p>
                <br/>
                <p>Tel: 1(246)426-1173 &nbsp&nbsp&nbsp Fax: 1(246)426-1643 &nbsp&nbsp&nbsp Email:leBev_hair@gmail.com</p>
        </center>
        

    </div>

    <script type="text/javascript">
        document.getElementById("select_service").onclick = function(){
            document.getElementById("selection").style.display = "block";
            document.getElementById("personal_info").style.display = "none";
            document.getElementById("select_service").style.backgroundColor = "#D63E2B";
            document.getElementById("select_service").style.color = "white";
            document.getElementById("enter_information").style.backgroundColor = "#ececec";
            document.getElementById("enter_information").style.color = "#D63E2B";

            
        }
        document.getElementById("enter_information").onclick = function(){
            document.getElementById("selection").style.display = "none";
            document.getElementById("personal_info").style.display = "block";
            document.getElementById("enter_information").style.backgroundColor = "#D63E2B";
            document.getElementById("enter_information").style.color = "white";
            document.getElementById("select_service").style.backgroundColor = "#ececec";
            document.getElementById("select_service").style.color = "#D63E2B";
        }
    
    </script>
    
</body>
</html>





<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tutorial";
    $error = "Cannont connect to database, Please try again later...";

    $conn = mysqli_connect($hostname, $username, $password,$dbname) or die ($error);
    

?>