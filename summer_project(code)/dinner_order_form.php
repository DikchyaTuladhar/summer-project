<?php ?>
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

	</style>
</head>
<body background="images\back_5.jpg">
	<center>
		<h2>Dinner Choice</h2>
		<!-- <p><span class="error">* required field</span></p> -->
		<form action="dinner.php" method="POST">
			<p>
				<h3>Rice(Choose any one):</h3><br>
				<input type="radio" name="rice" value="jira rice">Jira Rice<br>
				<input type="radio" name="rice" value="plain rice">Plain Rice<br>
				<input type="radio" name="rice" value="butter rice">Butter Rice<br>
				<input type="radio" name="rice" value="pulau">Pulau<br>
				<input type="radio" name="rice" value="jafurani pulau">Jafirani Pulau<br>
				<input type="radio" name="rice" value="kasmiri pulau">Kasmiri Pulau<br>
				<input type="radio" name="rice" value="newari pulau">Newari Pulau<br>
				<!-- <span class="error">* <?php echo $RiceErr;?></span> -->
			</p>
			<p>
				<h3>Dal or Beans(Choose any one):</h3><br>
				<h3>Dal:</h3><br>
				<input type="radio" name="dal" value="dal makhani">Dal makhani<br>
				<input type="radio" name="dal" value="yelllow dal makhani">Yellow Dal Makhani<br>
				<input type="radio" name="dal" value="black dal fry">Black Dal Fry<br>
				<input type="radio" name="dal" value="mix dal fry">Mix Dal Fry<br>
				<input type="radio" name="dal" value="dal fry">Simple Dal fry<br>
				<input type="radio" name="dal" value="black musur tardaka">Black Musur Tadaka<br>
				<h3>Beans:</h3><br>
				<input type="radio" name="dal" value="chana masala">Chana Masala<br>
				<input type="radio" name="dal" value="rajma masala">Rajma Masala<br>
				<input type="radio" name="dal" value="kerau masala">Kerau Masala<br>
				<input type="radio" name="dal" value="rajma mix paneer">Rajma Mix Paneer<br>
				<!-- <span class="error">* <?php echo $DalErr;?></span> -->
			</p>
			<p>
				<h3>Chowmein or Roti (choose any one):</h3><br>
				<h3>Chowmein</h3><br>
				<input type="radio" name="chow" value="macoroni">Macoroni<br>
				<input type="radio" name="chow" value="chicken chowmein">Chicken Chowmein<br>
				<input type="radio" name="chow" value="mix chowmein">Mix Chowmein<br>
				<input type="radio" name="chow" value="veg chowmein">Vegetable Chowmein<br>
				<input type="radio" name="chow" value="veg mix chowmein">Veg Mix Chowmein<br>
				<input type="radio" name="chow" value="buff macoroni">Buff Macoroni<br>
				<h3>Roti</h3><br>
				<input type="radio" name="chow" value="bhatora">Bhatora<br>
				<input type="radio" name="chow" value="plain puri">Plain Puri<br>
				<input type="radio" name="chow" value="palak puri">Palak Puri<br>
				<input type="radio" name="chow" value="plain nan">Plain Nan<br>
				<input type="radio" name="chow" value="butter nan">Butter Nan<br>
				<input type="radio" name="chow" value="tanduri nan">Tanduri Nan<br>
				<input type="radio" name="chow" value="gobi nan">Gobi Nan<br>
				<input type="radio" name="chow" value="paneer nan">Paneer nan<br>
			</p>
			<p> 
				<h3>Chicken(Choose any one):</h3><br>
				<input type="radio" name="chicken" value="fry chicken">Fry Chicken<br>
				<input type="radio" name="chicken" value="chicken butter masala">Chicken Butter Masala<br>
				<input type="radio" name="chicken" value="chicken curry">Chicken Curry<br>
				<input type="radio" name="chicken" value="chicken tanduri">Chicken Tanduri<br>
				<input type="radio" name="chicken" value="chicken roast">Chicken Roast<br>
				<input type="radio" name="chicken" value="chicken sweet and sour">Chicken Sweet and Sour<br>
				<input type="radio" name="chicken" value="chicken golden mashroom mix">Chicken Golden Mushroom Mix<br>
				<input type="radio" name="chicken" value="chicken korma">Chicken Korma<br>
				<input type="radio" name="chicken" value="chicken saag">Chicken Saag<br>
				<input type="radio" name="chicken" value="chicken kofta">Chicken Kofta<br>
				<input type="radio" name="chicken" value="chicken tawa">Chicken Tawa
			</p>
			<p>
				<h3>Fish(Choose any one):</h3><br>
				<input type="radio" name="fish" value="fish fry">Fish Fry<br>
				<input type="radio" name="fish" value="fish chilly">Fish chilly<br>
				<input type="radio" name="fish" value="fish cutlet">Fish Cutlet<br>
				<input type="radio" name="fish" value="fish curry">Fish Curry<br>
				<input type="radio" name="fish" value="fish sweet and curry">Fish Sweet and Curry<br>
				<input type="radio" name="fish" value="fish garlic">Fish Garlic<br>
				<input type="radio" name="fish" value="fish tawa">Fish Tawa<br>
			</p>
			<p>
				<h3>Vegetable(Choose any one):</h3><br>
				<input type="radio" name="veg" value="mix dry vegetable">Mix Dry Vegetable<br>
				<input type="radio" name="veg" value="tawa vegetable">Tawa Vegetable<br>
				<input type="radio" name="veg" value="vegetable manchureyan">Vegetable Manchureyan<br>
				<input type="radio" name="veg" value="vegetable Korma">Vegetable Korma<br>
				<input type="radio" name="veg" value="vegetable malaye kofta">Vegetable Malaye Kofta<br>
				<input type="radio" name="veg" value="alu dam">Alu Dam<br>
				<input type="radio" name="veg" value="mix mushroom curry">Mix Mushroom Curry<br>
				<input type="radio" name="veg" value="session mix vegetable">Session Mix Vegetable<br>
				<input type="radio" name="veg" value="mix vegetable">Mix Vegetable<br>
				<input type="radio" name="veg" value="alu fry">Alu Fry<br>
				<input type="radio" name="veg" value="palak sadeko">Palak Sadeko<br>
				<input type="radio" name="veg" value="palak saag">Palak Saag<br>
				<input type="radio" name="veg" value="sahe saag">Sahe Saag<br>
			</p>
			<p>
				<h3>Pickle(Choose any one):</h3><br>
				<input type="radio" name="pickle" value="mix hot pickle">Mix Hot Pickle<br>
				<input type="radio" name="pickle" value="sweet and sour">Sweet and Sour<br>
				<input type="radio" name="pickle" value="mix alu achar">Mix Alu Achar<br>
				<input type="radio" name="pickle" value="tomato plain">Tomato Plain<br>
				<input type="radio" name="pickle" value="tomato muttor tofu">Tomato Muttor Tofu<br>
				<input type="radio" name="pickle" value="green pickle">Green Pickle<br>
				<input type="radio" name="pickle" value="gunduruk achar">Gunduruk Achar<br>
				<input type="radio" name="pickle" value="maseyora achar">Maseyora Achar<br>
				<input type="radio" name="pickle" value="strawberry achar">Strawberry Achar<br>
				<input type="radio" name="pickle" value="mango achar">Mango Achar<br>
			</p>
			<p>
				<h3>Salad(Choose any one) :</h3><br>
				<input type="radio" name="salad" value="green salad">Green Salad<br>
				<input type="radio" name="salad" value="russian salad">Russian Salad<br>
				<input type="radio" name="salad" value="mix julen salad">Mix Julen Salad<br>
				<input type="radio" name="salad" value="beans salad">Beans salad<br>
				<input type="radio" name="salad" value="italic salad">Italic Salad<br>
				<input type="radio" name="salad" value="walnut salad">Walnut Salad<br>
				<input type="radio" name="salad" value="papadi chat">Papadi Chat
			</p>
			<p>
				<h3>Dessert(Choose any one):</h3><br>
				<input type="radio" name="dessert" value="dahi">Dahi<br>
				<input type="radio" name="dessert" value="icecream">Icecream
				<input type="radio" name="dessert" value="rasabare">Rasabare<br>
				<input type="radio" name="dessert" value="lalmohan">Lalmohan<br>
				<input type="radio" name="dessert" value="barfi">Barfi<br>
				<input type="radio" name="dessert" value="jalebi">Jalebi<br>
				<input type="radio" name="dessert" value="gajar haluwa">Gajar Haluwa
			</p>
			<h2>Extra charge will be added in any of below item</h2>
			<p>
				<h3>Mutton(charge Rs.100 extra):</h3>
				<input type="radio" name="mutton" value="muttin tawa">Mutton Tawa<br>
				<input type="radio" name="mutton" value="mutton kofta">Mutton Kofta<br>
				<input type="radio" name="mutton" value="mutton korma">Mutton Korma<br>
				<input type="radio" name="mutton" value="mutton fry">Mutton Fry<br>
				<input type="radio" name="mutton" value="mutton kawab newari">Mutton Kawab Newari<br>
				<input type="radio" name="mutton" value="mutton curry">Mutton Curry
			</p>
			<p>
				<h3>Prawn Fish(Charge Rs.130 extra):</h3><br>
				<input type="radio" name="prawn" value="prawan mix">Prawn Mix<br>
				<input type="radio" name="prawn" value="prawn garlic">Prawn Garlic
			</p>
			<p>
				<h3>Pork(Charge Rs.65 extra):</h3><br>
				<input type="radio" name="pork" value="pork tawa">Pork Tawa<br>
				<input type="radio" name="pork" value="pork boil">Pork boil<br>
				<input type="radio" name="pork" value="pork curry">Pork Curry<br>
			</p>
			<p>
				<h3>Paneer(Charge Rs.50 extra):</h3><br>
				<input type="radio" name="paneer" value="paneer kofta">Paneer Kofta<br>
				<input type="radio" name="paneer" value="paneer butter masala">Paneer Butter Masala<br>
				<input type="radio" name="paneer" value="paneer sahe korma">Paneer Sahe Korma<br>
				<input type="radio" name="paneer" value="paneer makani">Paneer Makani<br>
				<input type="radio" name="paneer" value="palak paneer">Palak Paneer<br>
				<input type="radio" name="muttor paneer">Muttor Paneerxa
			</p>
			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">
		</form>
	</center>
</body>
</html>