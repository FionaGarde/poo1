<?php
require('impot.php');
if(!empty($_POST["name"]) && !empty($_POST["revenu"])){
    $form = new Impot($_POST["name"], $_POST["revenu"]);
    echo $form->AfficheImpot();
}
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Test </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body> 
<form action="" method="POST"> 
<p>Votre nom :  <input type="text" name="name" /></p>
<p>Votre revenu :  <input type="text" name="revenu" /></p>
<p><input type="submit" value="OK"></p>
</form>
</body>
</html>