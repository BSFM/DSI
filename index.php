<?php
require_once ('loader.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo ApplicationConfig::APPLICATION_TITLE; ?></title>
        <meta http-equiv="Content-Style-Type" content="text/css">
        <link type="text/css" rel="stylesheet" href="<?php echo Chemins::STYLESHEETS . 'main.css'; ?>" >
    </head>
    <body>  
        <?php include_once (Chemins::VIEW.'v_header.php'); ?>
        <div id="container">
        </div>
        <?php include_once (Chemins::VIEW.'v_footer.php'); ?>
        <p>Hello World </p>
    </body>
</html>
