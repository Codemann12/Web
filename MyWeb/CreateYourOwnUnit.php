<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="IndexStyle.css">
       <div id="icon">
         <link rel="shortcut icon" href="Images/LT.ico" />
       </div>
     <title>LT_Wig</title>
 </head>

<body class="unitClass">
<?php include 'Header.php'; ?>
<?php include 'HeaderDecoration.php'; ?>

<h3 style="color: black">Create your own unit</h3>
<p>All our wigs on <a href="index.php" style="color: black">HairStyle.com</a> are custom made – no matter the style. However, if you’re looking for something to compliment your individual and unique personality you can customise your <br> own wig from start to finish! Decide exactly how you would like your wig to be constructed from hair type to cut and colour and create your own personal unit that will ensure that you stand <br> out from the crowd.</p>

<div id="unit">
	<form method="POST" action="MailHandler.php">
		<p> 

	   <div class="radio-item">
       <input type="radio" name="closure" value="LaceClosure" id="LaceClosure" /> <label for="LaceClosure">Lace closure</label>
       </div>

       <div class="radio-item">
       <input type="radio" name="closure" value="SilkClosure" id="SilkClosure" /> <label for="SilkClosure">Silk Closure</label>
       </div>

       <div class="radio-item">
       <input type="radio" name="closure" value="CustomiseLaceFrontal" id="CustomiseLaceFrontal" /> <label for="CustomiseLaceFrontal">Customise Lace Frontal</label>
       </div>

       <div class="radio-item">
       <input type="radio" name="closure" value="13-6" id="13-6" /> <label for="13-6">13 by 6 Frontal</label> 
       </div>
       <br>
      

      <div class="capSize-option-item">
       <label for="CapSize" style="color:purple;">CAP Size:</label><br />
       <select name="CapSize" id="CapSize">
           <option value="Large 23-24 circumference">Large 23-24 circumference</option>
           <option value="Medium 22-22.5 circumference">Medium 22-22.5 circumference</option>
           <option value="Small 20-21.5 circumference">Small 20-21.5 circumference</option>
       </select>
      </div>
      <p style="font-size: 15px">This is just a rough estimate as we will require six more measurement and picture of your hairline once your order has been processed.<br> For more accurate fitting</p>


      <div class="hairType-option-item">
       <label for="HairType" style="color:purple;">Hair Type:</label><br />
       <select name="HairType" id="HairType">
           <option value="Peruvian Straight Hair">Peruvian Straight Hair</option>
           <option value="Brazilian Straight Hair">Brazilian Straight Hair</option>
           <option value="Peruvian Natural Wave">Peruvian Natural Wave(+20€)</option>
           <option value="Brazilian Natural Wave">Brazilian Natural Wave (+20€)</option>
           <option value="Brazilian Body Wave">Brazilian Body Wave(+70€)</option>
           <option value="Peruvian Body Wave">Peruvian Body Wave(+90€)</option> 
           <option value="Malaysian Deep Wave">Malaysian Deep Wave(+40€)</option>
           <option value="Malaysian Loose Wave">Malaysian Loose Wave(+40€)</option>
       </select>
      </div><br/>

      <div class="hairLength-option-item">
       <label for="hairLength" style="color:purple;">Hair Length:</label><br />
       <select name="hairLength" id="hairLength">
       	   <option value="None">None</option>
           <option value="12">12(+140€)</option>
           <option value="14">14(+160€)</option>
           <option value="16">16(+190€)</option>
           <option value="18">18(+220€)</option>
           <option value="20">20(+250€)</option>
           <option value="22">22(+280€)</option>
           <option value="24">24(+310€)</option>
           <option value="26">26(+330€)</option>
       </select>
      </div><br/>

      <div class="hairColor-option-item">
       <label for="hairColor" style="color:purple;">Hair Color:</label><br />
       <select name="hairColor" id="hairColor">
           <option value="Natural Color {1B}">Natural Color {1B}</option>
           <option value="Purple">Purple</option>
           <option value="Jet Black">Jet Black (+130.00€)</option>
       	   <option value="Medium Brown ">Medium Brown (+130.00€)</option>
           <option value="Light Brown">Light Brown (+130.00€)</option>
           <option value="Brown Highlight">Brown Highlight (+150.00€)</option>
           <option value="Red">Red (+150.00€)</option>
           <option value="Copper ">Copper (+180.00€)</option>
           <option value="Dirty Blonde">Dirty Blonde (+180.00€)</option>
           <option value="Light Blonde">Light Blonde (+180.00€)</option>
           <option value="Auburn">Auburn (+200.00€)</option>
           <option value="Green ">Green (+230.00€)</option>     
       	   <option value="Platinum ">Platinum (+240.00€)</option>
           <option value="Blue">Blue (+230.00€)</option>
           <option value="Midnight Blue">Midnight Blue (+230.00€)</option>
           <option value="Ash Brown Highlight">Ash Brown Highlight (+280.00€)</option>
           <option value="Ash Blonde ">Ash Blonde (+300.00€)</option>                       
       </select>
      </div><br/>

      <div class="hairDensity-option-item">
       <label for="hairDensity" style="color:purple;">Hair Density:</label><br />
       <select name="hairDensity" id="hairDensity">
           <option value="< 300g">< 300g</option>
           <option value="400g">400g (+80€)</option>
           <option value="500g">500g (+160€)</option>>
       </select>
      </div><br/>

      <div class="styling-option-item">
       <label for="styling" style="color:purple;">Styling:</label><br />
       <select name="styling" id="styling">
           <option value="styled">Styled</option>
           <option value="Blunt Cut">Blunt Cut</option>
           <option value="Layered">Layered</option>
           <option value="Fringe">Fringe</option>
       </select>
      </div><br/>  

      <div class="processingTime-option-item">
       <label for="processingTime" style="color:purple;"">Processing Time:</label><br />
       <select name="processingTime" id="processingTime">
           <option value="5 to 10 working Days">5 to 10 working Days</option>
           <option value="5 working Days">5 workimg Days(+30€)</option>
           <option value="3 working Days">5 working Days(+50€)</option>
       </select>
             <p style="font-size: 15px">Processing Time is the amount of days it will take for your wig to be made. This does not include delivery time.</p>
      </div> 

      <div class="privateWigFitting-option-item">
       <label for="privateWigFitting" style="color:purple;">Private Wig Fitting:</label><br />
       <select name="privateWigFitting" id="privateWigFitting">
           <option value="No">No</option>
           <option value="Yes in Kiel">Yes in Kiel(+50€)</option>
       </select>
       <p style="font-size: 15px">For our private custom fitting Linda will personally meet you at a Kiel location of your choice to fit the wig to guarantee perfect sizing and <br> you comfort. She will also cornrow your natural hair, style the wig, and give you a mini tutorial on how to style the wig yourself. Finally,<br> she will sit down with you to discuss maintenance and the aftercare procedure in order to ensure you get the best out of your unit for as<br> long as possible! – Charges Apply.</p>
      </div> <br/>  

       <label for="addInfo" style="color: purple;">Additional Information:</label><br />
       <textarea name="addInfo" id="addInfo" style="width: 900px; height: 60px;"></textarea><br> <br>

       <label for="addImg" style="color: purple;">Attach An Image Reference:</label><br />
       <input type="file" name="upload"> <br/> <br>

       <div class="quantity-option-item">
       <label for="quantity" style="color:purple;">Quantity:</label><br />
       <select name="quantity" id="quantity">
       	   <option value="1" >1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
       </select>
      </div><br/>
      <input type="submit" name="submit" style="width: 450px; height: 40px;">
      <input type="reset" name="reset" style="width: 450px; height: 40px; ">


<p>As all our linda Tcheuffa wigs (LTwigs) are custom Hand made, construction start within 48 hours of <br>purchase.</p><p>
All our LTwigs are fittied with elastic band,combs and adjustable straps to ensure security and <br>confidence while wearing.</p>
<p>
Our LTwigs are made with 100% virgin hair and can be straightened dyed and curled to any desired look.
</p><p>
All our LTwigs come talloied to each individual so all sales are FINAL.</p><p>

All our LT Frontal wigs come already customised: the knots are bleached for transparency, tinted to<br> suit your scalp and hand plucked to create natural hairline.</p>
<p">
Do not expose the hair to too much heat, chemicals as this can damage the texture of your hair,<br> always consult a professional.</p>

</p>
</form>
</div>


<?php include("Footer.php"); ?>
</body>
</html>