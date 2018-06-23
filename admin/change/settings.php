<?php

session_start();

if (file_exists( '../../includes/config.php' )) { require( '../../includes/includes.php'); }  else { header( 'Location: ../../install' );};
if(base64_decode($_SESSION['loggedin']) == 'true') {}
else { header('Location: ../../login.php'); }
if($username != 'admin') { header("Location: ../../"); }

if(isset($adminenabled) && $adminenabled != 'true'){ header("Location: ../../error-pages/403.html"); }

$r1 = 0;
if(isset($_POST['SITENAME']) && $sitetitle != $_POST['SITENAME']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v1 = mysqli_real_escape_string($conn, $_POST['SITENAME']);
    $sql1 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v1."' WHERE `VARIABLE` = 'SITE_NAME';";
    if (mysqli_query($conn, $sql1)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['THEME']) && $config["THEME"] != $_POST['THEME']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v2 = mysqli_real_escape_string($conn, $_POST['THEME']);
    $sql2 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v2."' WHERE `VARIABLE` = 'THEME';";
    if (mysqli_query($conn, $sql2)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['LANGUAGE']) && $locale != $_POST['LANGUAGE']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v3 = mysqli_real_escape_string($conn, $_POST['LANGUAGE']);
    $sql3 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v3."' WHERE `VARIABLE` = 'LANGUAGE';";
    if (mysqli_query($conn, $sql3)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['DEFAULT_TO_ADMIN']) && $config["DEFAULT_TO_ADMIN"] != $_POST['DEFAULT_TO_ADMIN']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d1 = mysqli_real_escape_string($conn, $_POST['DEFAULT_TO_ADMIN']);
    $sql4 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d1."' WHERE `VARIABLE` = 'DEFAULT_TO_ADMIN';";
    if (mysqli_query($conn, $sql4)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['VESTA_HOST_ADDRESS']) && $config["VESTA_HOST_ADDRESS"] != $_POST['VESTA_HOST_ADDRESS']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v4 = mysqli_real_escape_string($conn, $_POST['VESTA_HOST_ADDRESS']);
    $sql5 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v4."' WHERE `VARIABLE` = 'VESTA_HOST_ADDRESS';";
    $vwi_value = $_POST['VESTA_HOST_ADDRESS'];
    if (mysqli_query($conn, $sql5)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['VESTA_SSL_ENABLED']) && $config["VESTA_SSL_ENABLED"] != $_POST['VESTA_SSL_ENABLED']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d2 = mysqli_real_escape_string($conn, $_POST['VESTA_SSL_ENABLED']);
    $sql6 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d2."' WHERE `VARIABLE` = 'VESTA_SSL_ENABLED';";
    if (mysqli_query($conn, $sql6)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['VESTA_PORT']) && $config["VESTA_PORT"] != $_POST['VESTA_PORT']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v5 = mysqli_real_escape_string($conn, $_POST['VESTA_PORT']);
    $sql7 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v5."' WHERE `VARIABLE` = 'VESTA_PORT';";
    if (mysqli_query($conn, $sql7)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['VESTA_ADMIN_UNAME']) && $vst_username != $_POST['VESTA_ADMIN_UNAME']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v6 = mysqli_real_escape_string($conn, $_POST['VESTA_ADMIN_UNAME']);
    $sql8 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v6."' WHERE `VARIABLE` = 'VESTA_ADMIN_UNAME';";
    if (mysqli_query($conn, $sql8)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['VESTA_ADMIN_PW']) && $vst_password != $_POST['VESTA_ADMIN_PW']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v7 = mysqli_real_escape_string($conn, $_POST['VESTA_ADMIN_PW']);
    $sql9 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v7."' WHERE `VARIABLE` = 'VESTA_ADMIN_PW';";
    if (mysqli_query($conn, $sql9)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['FTP_URL']) && $config["FTP_URL"] != $_POST['FTP_URL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v8 = mysqli_real_escape_string($conn, $_POST['FTP_URL']);
    $sql10 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v8."' WHERE `VARIABLE` = 'FTP_URL';";
    if (mysqli_query($conn, $sql10)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['WEBMAIL_URL']) && $config["WEBMAIL_URL"] != $_POST['WEBMAIL_URL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v9 = mysqli_real_escape_string($conn, $_POST['WEBMAIL_URL']);
    $sql11 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v9."' WHERE `VARIABLE` = 'WEBMAIL_URL';";
    if (mysqli_query($conn, $sql11)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['PHPMYADMIN_URL']) && $config["PHPMYADMIN_URL"] != $_POST['PHPMYADMIN_URL']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v10 = mysqli_real_escape_string($conn, $_POST['PHPMYADMIN_URL']);
    $sql12 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v10."' WHERE `VARIABLE` = 'PHPMYADMIN_URL';";
    if (mysqli_query($conn, $sql12)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['PHPPGADMIN_URL']) && $config["PHPPGADMIN_URL"] != $_POST['PHPPGADMIN_URL']) {  
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v11 = mysqli_real_escape_string($conn, $_POST['PHPPGADMIN_URL']);
    $sql13 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v11."' WHERE `VARIABLE` = 'PHPPGADMIN_URL';";
    if (mysqli_query($conn, $sql13)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['SUPPORT_URL']) && $config["SUPPORT_URL"] != $_POST['SUPPORT_URL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v12 = mysqli_real_escape_string($conn, $_POST['SUPPORT_URL']);
    $sql14 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v12."' WHERE `VARIABLE` = 'SUPPORT_URL';";
    if (mysqli_query($conn, $sql14)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_ADMIN']) && $config["ADMIN_ENABLED"] != $_POST['ENABLE_ADMIN']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d3 = mysqli_real_escape_string($conn, $_POST['ENABLE_ADMIN']);
    $sql15 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d3."' WHERE `VARIABLE` = 'ADMIN_ENABLED';";
    if (mysqli_query($conn, $sql15)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_PROFILE']) && $config["PROFILE_ENABLED"] != $_POST['ENABLE_PROFILE']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d4 = mysqli_real_escape_string($conn, $_POST['ENABLE_PROFILE']);
    $sql16 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d4."' WHERE `VARIABLE` = 'PROFILE_ENABLED';";
    if (mysqli_query($conn, $sql16)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_WEB']) && $config["WEB_ENABLED"] != $_POST['ENABLE_WEB']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d5 = mysqli_real_escape_string($conn, $_POST['ENABLE_WEB']);
    $sql17 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d5."' WHERE `VARIABLE` = 'WEB_ENABLED';";
    if (mysqli_query($conn, $sql17)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_DNS']) && $config["DNS_ENABLED"] != $_POST['ENABLE_DNS']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d6 = mysqli_real_escape_string($conn, $_POST['ENABLE_DNS']);
    $sql18 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d6."' WHERE `VARIABLE` = 'DNS_ENABLED';";
    if (mysqli_query($conn, $sql18)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_MAIL']) && $config["MAIL_ENABLED"] != $_POST['ENABLE_MAIL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d7 = mysqli_real_escape_string($conn, $_POST['ENABLE_MAIL']);
    $sql19 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d7."' WHERE `VARIABLE` = 'MAIL_ENABLED';";
    if (mysqli_query($conn, $sql19)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_DB']) && $config["DB_ENABLED"] != $_POST['ENABLE_DB']) {  
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d8 = mysqli_real_escape_string($conn, $_POST['ENABLE_DB']);
    $sql20 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d8."' WHERE `VARIABLE` = 'DB_ENABLED';";
    if (mysqli_query($conn, $sql20)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_CRON']) && $config["CRON_ENABLED"] != $_POST['ENABLE_CRON']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d9 = mysqli_real_escape_string($conn, $_POST['ENABLE_CRON']);
    $sql21 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d9."' WHERE `VARIABLE` = 'CRON_ENABLED';";
    if (mysqli_query($conn, $sql21)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_BACKUPS']) && $config["BACKUPS_ENABLED"] != $_POST['ENABLE_BACKUPS']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d10 = mysqli_real_escape_string($conn, $_POST['ENABLE_BACKUPS']);
    $sql22 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d10."' WHERE `VARIABLE` = 'BACKUPS_ENABLED';";
    if (mysqli_query($conn, $sql22)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_SOFTURL']) && $config["SOFTACULOUS_URL"] != $_POST['ENABLE_SOFTURL']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d11 = mysqli_real_escape_string($conn, $_POST['ENABLE_SOFTURL']);
    $sql23 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d11."' WHERE `VARIABLE` = 'SOFTACULOUS_URL';";
    if (mysqli_query($conn, $sql23)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_OLDCPURL']) && $config["OLD_CP_LINK"] != $_POST['ENABLE_OLDCPURL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d12 = mysqli_real_escape_string($conn, $_POST['ENABLE_OLDCPURL']);
    $sql24 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d12."' WHERE `VARIABLE` = 'OLD_CP_LINK';";
    if (mysqli_query($conn, $sql24)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['ENABLE_REG']) && $config["REGISTRATIONS_ENABLED"]  != $_POST['ENABLE_REG']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $d13 = mysqli_real_escape_string($conn, $_POST['ENABLE_REG']);
    $sql25 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$d13."' WHERE `VARIABLE` = 'REGISTRATIONS_ENABLED';";
    if (mysqli_query($conn, $sql25)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['GOOGLE_ANALYTICS_ID']) && $config["GOOGLE_ANALYTICS_ID"] != $_POST['GOOGLE_ANALYTICS_ID']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v13 = mysqli_real_escape_string($conn, $_POST['GOOGLE_ANALYTICS_ID']);
    $sql26 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v13."' WHERE `VARIABLE` = 'GOOGLE_ANALYTICS_ID';";
    if (mysqli_query($conn, $sql26)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['INTERAKT_APP_ID']) && $config["INTERAKT_APP_ID"] != $_POST['INTERAKT_APP_ID']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v14 = mysqli_real_escape_string($conn, $_POST['INTERAKT_APP_ID']);
    $sql27= "UPDATE ".$mysql_table."config SET `VALUE` = '".$v14."' WHERE `VARIABLE` = 'INTERAKT_APP_ID';";
    if (mysqli_query($conn, $sql27)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['INTERAKT_API_KEY']) && $config["INTERAKT_API_KEY"] != $_POST['INTERAKT_API_KEY']) {
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v15 = mysqli_real_escape_string($conn, $_POST['INTERAKT_API_KEY']);
    $sql28 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v15."' WHERE `VARIABLE` = 'INTERAKT_API_KEY';";
    if (mysqli_query($conn, $sql28)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['CLOUDFLARE_API_KEY']) && $config["CLOUDFLARE_API_KEY"] != $_POST['CLOUDFLARE_API_KEY']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v16 = mysqli_real_escape_string($conn, $_POST['CLOUDFLARE_API_KEY']);
    $sql29= "UPDATE ".$mysql_table."config SET `VALUE` = '".$v16."' WHERE `VARIABLE` = 'CLOUDFLARE_API_KEY';";
    if (mysqli_query($conn, $sql29)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['CLOUDFLARE_EMAIL']) && $config["CLOUDFLARE_EMAIL"] != $_POST['CLOUDFLARE_EMAIL']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v17 = mysqli_real_escape_string($conn, $_POST['CLOUDFLARE_EMAIL']);
    $sql30 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v17."' WHERE `VARIABLE` = 'CLOUDFLARE_EMAIL';";
    if (mysqli_query($conn, $sql30)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['PLUGINS']) && $config["PLUGINS"] != $_POST['PLUGINS']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v18 = mysqli_real_escape_string($conn, $_POST['PLUGINS']);
    $sql31 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v18."' WHERE `VARIABLE` = 'PLUGINS';";
    if (mysqli_query($conn, $sql31)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['TIMEZONE']) && $config["TIMEZONE"] != $_POST['TIMEZONE']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v19 = mysqli_real_escape_string($conn, $_POST['TIMEZONE']);
    $sql32 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v19."' WHERE `VARIABLE` = 'TIMEZONE';";
    if (mysqli_query($conn, $sql32)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['KEY1']) && $key2 != $_POST['KEY1']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v20 = mysqli_real_escape_string($conn, $_POST['KEY1']);
    $sql33 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v20."' WHERE `VARIABLE` = 'KEY1';";
    if (mysqli_query($conn, $sql33)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
} 
if(isset($_POST['KEY2']) && $key2 != $_POST['KEY2']) { 
    $conn=mysqli_connect($mysql_server,$mysql_uname,$mysql_pw,$mysql_db);
    $v21 = mysqli_real_escape_string($conn, $_POST['KEY2']);
    $sql34 = "UPDATE ".$mysql_table."config SET `VALUE` = '".$v21."' WHERE `VARIABLE` = 'KEY2';";
    if (mysqli_query($conn, $sql34)) {} else { $r1 = $r1 + 1; }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body class="fix-header">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
            </svg>
        </div>

        <form id="form" action="../list/settings.php" method="post">
            <?php 
            echo '<input type="hidden" name="r1" value="'.$r1.'">';
            ?>
        </form>
        <script type="text/javascript">
            document.getElementById('form').submit();
        </script>
    </body>
    <script src="../../plugins/bower_components/jquery/dist/jquery.min.js"></script>
</html>