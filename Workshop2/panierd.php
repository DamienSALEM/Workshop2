<?php
session_start();
require_once("con_base.php");
$sql="INSERT into panier (Client,Produit,nb_produit) values ('". $_SESSION["id"] ."','". $_POST["ID"] ."','" . $_POST["quantite"] ."')";
mysqli_query($conn,$sql);


$sql2="SELECT pr.Nom, pr.Prix, pa.nb_produit
FROM panier pa
inner JOIN produit pr ON (pr.ID = pa.Produit)
WHERE pa.Client='".$_SESSION["id"]."'
ORDER BY pr.Prix";
$result=mysqli_query($conn,$sql2);
?>


<html>
<head>
<title>Votre panier</title>
<link rel="stylesheet" type="text/css" href="style-panier.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="center" style="padding-bottom:5px;"> VOTRE PANIER</div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td>Nom du produit</td>
<td>Prix du produit</td>
<td>Quantité</td>
<td>Prix total</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Nom"]; ?></td>
<td><?php echo $row["Prix"]; ?></td>
<td><?php echo $row["nb_produit"]; ?></td>
<td><?php echo ($row["nb_produit"]*$row["Prix"]) ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<a href="payment.php">Pour payer</a>
</form>
</div>
</body>
</html>