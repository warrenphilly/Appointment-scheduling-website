<center>
    <style>
        #tb{
            height:200px;
            width:500px;
            border-radius: 20px;
            border:none;
            padding:10px;
            font-size: 16px;
        }
       
        .textbo{
            background-color:#EEEEEE;
            color:#D63E2B;
          
        }
        .textbo ::placeholder { 
            color: white;
            opacity: 1; 
        }
         .choose{
             border-radius: 55px;
             color:white;
             background-color: #D63E2B;
             height: 40px;
             width: 60px;
            
            

         }
         #felix{
             background-color:white;
             color:#D63E2B;
             height:60px;
             color:#D63E2B;
             width:110px;
             font-size: 70px;
         }
    </style>
<form id="book" name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year; ?>&v=true&add=true">
<h3>*Select a Time*</h3>

<div id="select">
         
    <select name="Uour" class='choose'>
        <option " value="8">8</option>
        <option  value="9">9</option>
        <option  value="10">10</option>
        <option  value="11">11</option>
        <option  value="12">12</option>
        <option  value="1">1</option>
        <option  value="2">2</option>
        <option  value="3">3</option>
        <option  value="4">4</option>
    </select> &nbsp :  &nbsp 
    <select name="minute"class='choose'>
        <option value="00">00</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
    </select>
                        <h3>*Please fill out the fields below*</h3>
                        <input type ="textbox" class="textbo" name="clientfname" placeholder=" First Name" />
                        <input type ="textbox" class="textbo" name="clientlname" placeholder=" Last Name" />
                        <br />
                        <input type ="textbox"  class="textbo" name="clientnum"placeholder=" Tel" />
                        <input type ="textbox"  class="textbo" name="clientemail"placeholder=" Email" />
                        <h3>Select a date</h3>

</div>
                      
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
                            
                                    <br/><br/><br/>
                                    <textarea id="tb" name='txtdetail' placeholder="Additonal details" ></textarea>
                                    <br><input type='submit' id="felix" name='btnadd' value='book now'>


                            
                     </div>
                     Select a time: <input type="time" name="usr_time">
</form>
</div>
</center>