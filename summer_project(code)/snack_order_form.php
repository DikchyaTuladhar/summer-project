<?php

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css_doc\padding.css">
<head>
	<style type="text/css">
		input[type=text], select, textarea {
    		width: 35%;
    		padding: 12px;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		resize: vertical;
		}
		input[type=number], select, textarea {
    		width: 35%;
    		padding: 12px;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		resize: vertical;
		}
		input[type=date], select, textarea {
    		width: 35%;
    		padding: 12px;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		resize: vertical;
		}
		label {
    		padding: 12px 12px 12px 0;
    		display: inline-block;
		}
		input[type=submit] {
    		background-color: #5A6AAA;
   	 		color: white;
    		padding: 12px 20px;
    		border: none;
    		border-radius: 4px;
    		cursor: pointer;
    		float: middle;
		}
		input[type=reset] {
    		background-color: #5A6AAA;
   	 		color: white;
    		padding: 12px 20px;
    		border: none;
    		border-radius: 4px;
    		cursor: pointer;
    		float: middle;
		}
		
		input[type=submit]:hover {
    		background-color: #3A4885;
		}
		input[type=reset]:hover {
    		background-color: #3A4885;
		}
        p{
            border: 2px solid #3A4885;
            border-radius: 8px;
            width: 400px;
        }
        /*img{
            background-repeat: no-repeat;
            background-blend-mode: color-burn;
            height: 500px;
        }*/

	</style>
</head>
<body background="images\back.jpg">
	<form method="post" action="snacks.php">
	   <center>
           <h3>Snacks Choice</h3>
           <p>
               Buff (choose any one):<br>
               <input type="radio" name="buff" value="buff sadeko">Buff Sadeko<br>
               <input type="radio" name="buff" value="buff momo">Buff MO:MO<br>
               <input type="radio" name="buff" value="buff chilly">Buff Chilly<br>
               <input type="radio" name="buff" value="buff sekuwa">Buff Sekuwa<br>
               <input type="radio" name="buff" value="buff boil">Buff Boil<br>
               <input type="radio" name="buff" value="buff salami">Buff Salami<br>
               <input type="radio" name="buff" value="buff meatball">Buff meat Ball<br>
               <input type="radio" name="buff" value="buff sasage roll">Buff Sasage Roll <br>
               <input type="radio" name="buff" value="buff sasage grill">Buff Sasage Grill<br>
               <input type="radio" name="buff" value="buff sasage fry">Buff Sasage fry<br>
               <input type="radio" name="buff" value="buff sasage chilly">Buff Sasage Chilly<br>
           </p>
           <p>
               Chicken(Choose any One):<br>
               <input type="radio" name="chicken" value="chicken sasage">Chicken Sasage <br>
               <input type="radio" name="chicken" value="Chicken tandoori">Chicken Tandoori <br>
               <input type="radio" name="chicken" value="chicken tikka">Chicken Tikka<br>
               <input type="radio" name="chicken" value="chicken chilly"> Chciken Chilly<br>
               <input type="radio" name="chciken" value="chciken bbq">Chicken BBQ<br>
           </p>
           <p>
               Fish(choose any One):<br>
               <input type="radio" name="fish" value="fish ball">Fish Ball<br>
               <input type="radio" name="fish" value="fish chilly">Fish Chilly<br>
               <input type="radio" name="fish" value="fish tikka">Fish Tikka<br>
               <input type="radio" name="fish" value="fish spice">Fish Spice<br>
               <input type="radio" name="fish" value="fish finger">Fish Finger<br>
           </p>
           <!-- <p>
               Vegetable(choose any four):<br>
               <p>
                Fires:
               <input type="checkbox" name="veg" value="potato chips">Potato Chips<br>
               <input type="checkbox" name="veg" value="finger chips">Finger chips<br>
               <input type="checkbox" name="veg" value="chips chilly">Finger chips chilly<br>
               <input type="checkbox" name="veg" value="chesse potato">Chesse Potato<br>
               <input type="checkbox" name="veg" value="veg chilly">Vegetable Chilly<br>
               <input type="checkbox" name="veg" value="vegetable fry">Vegetable Fry<br>
               <input type="checkbox" name="veg" value="muge bara">Mugi Bara<br>
               <input type="checkbox" name="veg" value="mas bara">Mas Bara<br>
               <input type="checkbox" name="veg" value="thai pakoda">Thai Pakoda<br>
               <input type="checkbox" name="veg" value="penut pakoda">Penut Pakoda<br>
               <input type="checkbox" name="veg" value="Vegetable pakoda">Vegetable Pakoda<br>
               <input type="checkbox" name="veg" value="eggplant pakoda">Eggplant Pakoda<br>
               <input type="checkbox" name="veg" value="tofu chilly">Tofu chilly<br> 
               <input type="checkbox" name="veg" value="salad figure">Salad Figure<br>
               <input type="checkbox" name="veg" value="prone">Prone Fish<br>
           </p> -->
           <p>
               Soup(choose any one):<br>
               <input type="radio" name="soup" value="chicken soup">Chicken Soup<br>
               <input type="radio" name="soup" value="chicken corn soup">Chicken Corn Soup<br>
               <input type="radio" name="soup" value="tomato soup">Tomato Soup <br>
               <input type="radio" name="soup" value="hot and sour soup">Hot and Sour Soup<br>
               <input type="radio" name="soup" value="vegetable mushroom soup">Vegetable Mushroom Soup<br>
               <input type="radio" name="soup" value="multi venue special soup">Multi Venue Special Soup
           </p>
           <h3>Extra charge will be added in these dishes</h3>
           <p>
               Mutton(exta Rs.100 Charged):<br>
               <input type="radio" name="mutton" value="mutton sekuwa">Mutton Sekuwa<br>
               <input type="radio" name="mutton" value="mutton bbq">Mutton BBQ
               <br>
           </p>
           <p>
               Pork(extra Rs.65 charged):<br>
               <input type="radio" name="pork" value="pork fry">Pork Fry<br>
               <input type="radio" name="pork" value="pork chilly">Pork Chilly<br>
               <input type="radio" name="pork" value="pork stick">Pork Stick<br>
               <input type="radio" name="pork" value="pork bbq">Pork BBQ
           </p>
           <p>
               Cheese(extra Rs.50 charged):<br>
               <input type="radio" name="cheese" value="cheese ball">Cheese Ball<br>
               <input type="radio" name="cheese" value="cheese stick">Cheese Stick<br>
               <input type="radio" name="cheese" value="cheese slice">Cheese Slice<br>
           </p>
           <p>
               Paneer(extra Rs.50 charged):<br>
               <input type="radio" name="paneer" value="paneer ball">Paneer Ball<br>
               <input type="radio" name="paneer" value="paneer chilly">Paneer Chilly<br>
               <input type="radio" name="paneer" value="paneera pakoda">Paneer
               Pakoda<br>
               <input type="radio" name="paneer" value="paneer finger">Paneer Finger
           </p>
           <input type="submit" name="Submit" value="Submit">
           <input type="reset" name="reset" value="Reset">
       </center>	
    </form>
</body>
</html>