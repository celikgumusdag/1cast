<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Anasayfa</title>
</head>
<body>

<?php include('inc/header.php'); ?>

<div id="home">
    <div class="homedesc">

    </div>

    <div class="registerform">
        <form action="./form/register.php" method="post">
            <input type="text" class="registerinput" id="Username" name="Username" maxlength="30" placeholder="Kullanıcı Adı" autocomplete="off" />
            <input type="text" class="registerinput" name="Ad" placeholder="Ad" maxlength="30"  autocomplete="off" />
            <input type="text" class="registerinput" name="Soyad" placeholder="Soyad" maxlength="30" autocomplete="off" />
            <input type="text" class="registerinput" name="Email" placeholder="Email" maxlength="30" autocomplete="off" />
            <input type="password" class="registerinput" name="Sifre" placeholder="Şifre" maxlength="15" autocomplete="off" />
            <input type="password" class="registerinput" name="Resifre" placeholder="Şifre Onay" maxlength="15" autocomplete="off" />


            <select name="Gun">
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo '<option value=' . $i . '>' . $i . '</option>';
                }
                ?>
            </select>
            <select name="Ay">
                <option value="Ocak">Ocak</option>
                <option value="Şubat">Şubat</option>
                <option value="Mart">Mart</option>
                <option value="Nisan">Nisan</option>
                <option value="Mayıs">Mayıs</option>
                <option value="Haziran">Haziran</option>
                <option value="Temmuz">Temmuz</option>
                <option value="Ağustos">Ağustos</option>
                <option value="Eylül">Eylül</option>
                <option value="Ekim">Ekim</option>
                <option value="Kasım">Kasım</option>
                <option value="Aralık">Aralık</option>
            </select>

            <select name="Yil">

                <?php
                for ($i = 1900; $i <= 2016; $i++) {
                    echo '<option value=' . $i . '>' . $i . '</option>';
                }

                ?>
            </select>

            <div class="gender"><input type="radio" name="Cinsiyet" value="Erkek" checked="checked"/>Erkek</div>
            <div class="gender"><input type="radio" name="Cinsiyet" value="Kadın"/>Kadın</div>

            <input type="submit" class="registerbutton"/>
        </form>
    </div>
    <div class="hometext">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla tincidunt purus, id gravida metus
        elementum rutrum. Donec vel erat nec lectus molestie scelerisque. Praesent ultricies nulla justo, ac congue sem
        convallis sed. Quisque sed purus massa. Sed at massa ipsum. Nunc id elit tortor. Sed euismod quam vel eros
        convallis, sed porttitor metus accumsan. Quisque cursus fringilla augue at luctus. Maecenas tincidunt lacus in
        suscipit egestas.

        Nunc facilisis, urna ut accumsan condimentum, quam diam semper neque, quis ultricies nisl sapien placerat leo.
        Sed lobortis urna in venenatis pretium. Etiam efficitur tortor metus, eu blandit ipsum convallis a. Praesent ut
        suscipit ligula. Curabitur convallis ultrices est. Donec ac ornare lectus.

    </div>

</div>

<?php include('inc/footer.php'); ?>

<script type="text/javascript">
    $('input#Username').bind('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

</body>
</html>