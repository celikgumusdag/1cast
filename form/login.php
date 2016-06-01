<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php
include('../db/db.php');

$Username = $_POST['Username'];
$pw = $_POST['Password'];
$Password = md5($pw);

//$result = mysqli_query($con,"SELECT id,username,password,name,surname FROM user inner join user_information WHERE username='$Username' ");

$result = mysqli_query($con, "SELECT u.id,u.username,u.password,ui.name,ui.surname FROM user as u inner join user_information as ui WHERE u.username='$Username' ");

if ($row = mysqli_fetch_array($result)) {

    if ($row['username'] == $Username) {
        if ($row['password'] == $Password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = stripslashes($row['name']) . " " . stripslashes($row['surname']);

        } else {
            print "<script type=\"text/javascript\">";
            print "alert('Şifrenizi Yanlış Girdiniz.')";
            print "</script>";
        }
    } else {
        print "<script type=\"text/javascript\">";
        print "alert('Kullanıcı Adınızı Yanlış Girdiniz.')";
        print "</script>";
    }


} else {
    print "<script type=\"text/javascript\">";
    print "alert('Kullanıcı Adınızı Yanlış Girdiniz.')";
    print "</script>";
}

mysqli_close($con);
?>

<script type="text/javascript">
    window.location = "../"
</script>