<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php
include('../db/db.php');

$Ad = $_POST['Ad'];
$Soyad = $_POST['Soyad'];
$Email = $_POST['Email'];
$Sifre = $_POST['Sifre'];
$Resifre = $_POST['Resifre'];
$Gun = $_POST['Gun'];
$Ay = $_POST['Ay'];
$Yil = $_POST['Yil'];
$Cinsiyet = $_POST['Cinsiyet'];
$Username = $_POST['Username'];


$result = mysqli_query($con, "SELECT * from user where email='$Email' or username='$Username' ");
if ($row = mysqli_fetch_array($result)) {
    die(
    "
	    <script type=\"text/javascript\">
	    alert('yapma')
	    history.back();
		</script>
		");
}

if (($Ad == null) || ($Soyad == null) || ($Sifre == null) || ($Email == null) || ($Gun == null) || ($Ay == null) || ($Yil == null) || ($Cinsiyet == null) || ($Username == null)) {

    die(
    "
	    <script type=\"text/javascript\">
	    alert('Lütfen boşluk Bırakmayınız.')
	    history.back();
		</script>
		");
} else {
    if ($Sifre != $Resifre) {
        die(
        "
		    <script type=\"text/javascript\">
		    alert('Şifreler Birbirinin Aynısı Olmak Zorundadır.')
		    history.back();
			</script>
			");
    } else {
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $MD5Sifre = md5($Sifre);
            mysqli_query($con, "INSERT INTO user (username,password,email) VALUES ('$Username','$MD5Sifre','$Email')");
            $DogumTarihi = $Gun . "." . $Ay . "." . $Yil;
            mysqli_query($con, "INSERT INTO user_information (name,surname,birthday,gender) VALUES ('$Ad','$Soyad','$DogumTarihi','$Cinsiyet')");

            mysqli_close($con);

            print "<script type=\"text/javascript\">";
            print "alert('Üyeliğiniz başarıyla alınmıştır.Lütfen giriş yapınız.')";
            print "</script>";

        } else {
            die(
            "
					    <script type=\"text/javascript\">
					    alert('Mailiniz Geçersizdir.')
					    history.back();
						</script>");
        }

    }
}


?>


<script type="text/javascript">
window.location = "../index.php"
</script>


