<?php

include ('loca_startpage.php');
include ('common.php');

include ('w3c.txt');
include ('header.tpl');

?>
<link rel='stylesheet' type='text/css' href='css/styles.css' />
<link rel='stylesheet' type='text/css' href='css/about.css' />
<script src="js/functions.js" type="text/javascript"></script>
<script language="JavaScript" src="js/tw-sack.js"></script>
<script language="JavaScript" src="js/registration.js"></script>
<script language="JavaScript" >
<?php include ('common.js'); ?>
</script>
</head>
<body>

<a href="#pustekuchen" style="display:none;"><?=loca("LOGIN_LINK");?></a>

<div id="main">

<?php include ('products.php'); ?>

<?php include ('loginmenu.tpl'); ?>    

<div id="mainmenu">
<?php mainmenu ("preview"); ?>
</div>

<?php include ('content_screenshots.tpl'); ?>

<script>
document.loginForm.universe.focus();
</script>

</body>

</html>