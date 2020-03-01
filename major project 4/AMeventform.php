<center>
<link rel="stylesheet" href="css/main.css">
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
         #tame{
            border-radius:35px;
            border:none;
            background-color:#EEEEEE;
            padding:20px;
         }
    </style>
<form id="book" name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year; ?>&v=true&add=true">
<h3>*Select a Time*</h3>
<div id="select">
         <input id="tame"type="time" name="time"min="08:00:00"max="16:30:00>

                        <h3>*Please fill out the fields below*</h3>
                        <input type ="textbox" class="textbo" name="clientfname" placeholder=" *First Name*" />
                        <input type ="textbox" class="textbo" name="clientlname" placeholder=" *Last Name*" />
                        <br />
                        <input type ="textbox"  class="textbo" name="clientnum" placeholder=" *Tel*" />
                        <input type ="textbox"  class="textbo" name="clientemail" placeholder="*Email*" />
                   

</div>

                        <div id="selection">
                                    <h3>Please select style</h3>
                                    <label id="style_1">
                                        <input id="hairstyle1" type="radio" name="h_style" value="wash"/>
                                        <span>Hairwash</span>
                                    </label>

                                    <label id="style_2">
                                            <input id="hairstyle2" type="radio" name="h_style" value="Haircut"><span>Haircut </span>

                                    </label>
                                    <label id="style_3">
                                            <input id="hairstyle3" type="radio" name="h_style" value="Relaxer"><span>Relaxer    </span>

                                    </label>
                                    <label id="style_4">
                                            <input id="hairstyle4"type="radio" name="h_style" value="treat"><span>Treat   </span>

                                    </label>
                                <br/>
                                <br />
                                <br/>
                                <label id="style_5">
                                        <input id="hairstyle5"type="radio" name="h_style" value="trim">
                                        <span>Hairtrim</span>

                                    </label>
                                    <label id="style_6">
                                        <input id="hairstyle6"type="radio" name="h_style" value="eyebrow waxing"><span>waxing  </span>

                                    </label>
                                    <label id="style_7">
                                            <input id="hairstyle7" type="radio" name="h_style" value="Texturize"><span>Texturize</span>

                                    </label>
                                    <label id="style_8">
                                            <input id="hairstyle8" type="radio" name="h_style" value="Box Braids"><span>Boxbraid</span>

                                    </label>

                                    <br/><br/><br/>
                                    <textarea id="tb" name='service' placeholder="*Additonal details*" ></textarea>
                                    <br><input type='submit' id="felix" name='btnadd' value='book now'>



                     </div>

</form>
</div>
</center>
