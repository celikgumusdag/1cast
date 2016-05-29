
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />										
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anasayfa</title>
</head>
<body>

<?php include('inc/header.php'); ?>		

<div id="home">
	<div class="homedesc">

	</div>

	<div class="registerform">
		<input type="text" class="registerinput" name="İsim" placeholder="Ad" />
		<input type="text" class="registerinput" name="İsim" placeholder="Soyad"/>
		<input type="text" class="registerinput" name="İsim" placeholder="Email"/>
		<input type="text" class="registerinput" name="İsim" placeholder="Şifre"/>
		<input type="text" class="registerinput" name="İsim" placeholder="Şifre Onay"/>


		<select name="day">
		<?php
		for($i=1;$i<=31;$i++)
		{
		    echo '<option value='.$i.'>'.$i.'</option>';
		}
		?>
		</select>
		<select name="month">
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="Mars">Mars</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>

		<select name="year">

		<?php
		for($i=2011;$i<=2015;$i++)
		{
		    echo '<option value='.$i.'>'.$i.'</option>';
		}

		?>
		</select>

		<div class="gender"><input type="radio" name="Gender"/>Erkek</div>
		<div class="gender"><input type="radio" name="Gender"/>Kadın</div>

		<input type="submit" class="registerbutton" name="İsim"/>

	</div>
	<div class="hometext">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla tincidunt purus, id gravida metus elementum rutrum. Donec vel erat nec lectus molestie scelerisque. Praesent ultricies nulla justo, ac congue sem convallis sed. Quisque sed purus massa. Sed at massa ipsum. Nunc id elit tortor. Sed euismod quam vel eros convallis, sed porttitor metus accumsan. Quisque cursus fringilla augue at luctus. Maecenas tincidunt lacus in suscipit egestas.

Nunc facilisis, urna ut accumsan condimentum, quam diam semper neque, quis ultricies nisl sapien placerat leo. Sed lobortis urna in venenatis pretium. Etiam efficitur tortor metus, eu blandit ipsum convallis a. Praesent ut suscipit ligula. Curabitur convallis ultrices est. Donec ac ornare lectus. 

	</div>

</div>

<?php include('inc/footer.php'); ?>		

</body>
</html>