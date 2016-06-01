<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<div id="header">
    <div id="logo"><a href="index.php"><img src="./img/logo.png"/></a></div>
    <div id="search"><input type="text" maxlength="35"></div>
    <?php
    if (isset($_SESSION['id'])) {
        print'
    <div id="profile">
        <div class="profilename">
            <a href="profile.php">';
        echo $_SESSION["name"];;
        print'</a>
        </div>
        <div class="profilephoto">
            <a href="./form/logout.php"><img src="./img/cihan.png" width="40" height="40"/></a>
        </div>
    </div>
    ';
    } else {
        print'
    <div id="login">
        <a href="#" class="loginbutton">Giriş Yap</a>
    </div>
    <div class="loginform">
    <form action="./form/login.php" method="post">
        <input type="text" class="logininput" name="Username" id="Username" maxlength="30" placeholder="Kullancı Adı" autocomplete="off" />
        <input type="password" class="logininput" name="Password" maxlength="15" placeholder="Şifre" autocomplete="off" />
        <input type="submit" class="loginbutton" />
    </form>
    </div>
    ';
    }
    ?>


</div>

<script>
    $(document).ready(function () {
        $(".loginbutton").click(function () {
            $(".loginform").show();
        });
    });
</script>