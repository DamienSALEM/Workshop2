<?php
if (count($_POST) > 0) {
    require_once("con_base.php");
	$sql = "INSERT INTO msgcontact (nom, prenom, mail, message) VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["mail"] . "','" . $_POST["message"] . "')";
	mysqli_query($conn, $sql);
	$current_id = mysqli_insert_id($conn);
        $message = "Message envoyé avec succès. ";
    }
?>
<!DOCTYPE html>

<html>

<head>
    <title>Formulaire de contact</title>
    <meta http-equiv="pragma" content='no cache' />
    <meta charset="UTF-8" /> <!-- voilà les commentaires débiles-->
    <link rel="stylesheet" href="">
</head>

<body>
<div class="message"><?php if (isset($message)) {
										echo $message;
									} ?></div>
        <form name="input" action="" method="POST">
            <div> Name: <input type="text" name="firstname"> Last name: <input type="text" name="lastname"></div><br>
            <div>Mail: <input type="email" name="mail"></div><br>
            <div>
                <label for="msg">Message :</label>
                <textarea style="width:400px; height:200px" id="msg" name="message" maxlength="6000"></textarea>
            </div>
            <input type="submit" value="envoyer">
            <br>

        </form>
</body>

</html>