<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8">
<title>Menu</title>
</head>
<body>

<?php


$kofta = array("La Kofta", "Description : Il s’agit de boulettes de viande hachée concoctées avec des épices. Ces boulettes sont traditionnellement roulées et rôties sur un bâton en bois, à la manière d’une brochette.", "14,95$", "https://www.voyageegypte.fr/cdn/eg-public/kofta_egyptien_shutterstock_1940304430-MAX-w1000h600.jpg");

$babaGanousch = array("Baba Ganousch", "Description: Ce plat est à base d'aubergine (préalablement grillée), préparée en mousse, mélangée à du tahini.", "19,50$", "https://www.luxorandaswan.com/admin/uploads/1605829704Baba-Ganoush.jpg" );

$Chawarma = array(" Le Chawarma", "Description : Viande épicée grillée sur une broche verticale, puis tranchée en lamelles.", "13,50$", "https://th.bing.com/th/id/OIP.CUv61i6IGfGIG0Iw9h1d_AHaLD?rs=1&pid=ImgDetMain" );


$Qatayef = array("Le qatayef", "Le katayef ou qatayef est un dessert à base de crêpe farcie de crème nappée de pistaches.", "5,30$" "https://www.fooddolls.com/wp-content/uploads/2022/04/Atayef12726.jpg");

$Jalabi = array("Le jalebi égyptien", "Le jilapi ou jalebi est un délicieux beignet léger trempé dans un sirop de sucre.", "4,78$", "https://www.diasporaco.com/cdn/shop/articles/hetal-jalebi_1200x1200.jpg?v=1614197120" );

$Basbousa = array(" Le basbousa", "La basboussa est un gâteau de semoule au sirop de d'eau de fleur d'oranger.", "3,99$", "https://ilovearabicfood.com/wp-content/uploads/2020/08/01-Lotus-Basbousa.jpg" );



$coca = array("Coca-cola", "1,50$" "https://tp2019gmp1.wordpress.com/wp-content/uploads/2019/04/logo-coca-cola.png?w=648");

$sprite = array("Sprite", "1,50$", "https://upload.wikimedia.org/wikipedia/commons/b/b9/Sprite_Logo.svg" );

$fanta = array(" Fanta", "1,50$", "https://logo-marque.com/wp-content/uploads/2020/06/Fanta-Logo.png" );

?>

<section>

<h1><li><?php echo($kofta[0]) ?></li></h1>
	<img src="<?php echo($kofta[3]) ?> width="154" height="142">
	<h3> <?php echo($kofta[1]) ?> </h3>
	<h3> <?php echo($kofta[2]) ?> </h3>

</section>

<section>

<h2><li><?php echo($babaGanousch[0]) ?></li></h2>
<img src="<?php echo($babaGanousch[3]) ?> width="154" height="142">
	<h3> <?php echo($babaGanousch[1]) ?> </h3>
	<h3> <?php echo($babaGanousch[2]) ?> </h3>
</section>


<section>

<h2><li><?php echo($Chawarma[0]) ?></li></h2>
<img src="<?php echo($Chawarma[3]) ?> width="154" height="142">
	<h3> <?php echo($Chawarma[1]) ?> </h3>
	<h3> <?php echo($Chawarma[2]) ?> </h3>
</section>
    
</section>

<h1>Déssert</h1>

<section>

<h2><li><?php echo($Qatayef[0]) ?></li></h2>
<img src="<?php echo($Qatayef[3]) ?> width="154" height="142">
	<h3> <?php echo($Qatayef[1]) ?> </h3>
	<h3> <?php echo($Qatayef[2]) ?> </h3>
</section>
    
</section>

<section>

<h2><li><?php echo($Jalabi[0]) ?></li></h2>
<img src="<?php echo($Jalabi[3]) ?> width="154" height="142">
	<h3> <?php echo($Jalabi[1]) ?> </h3>
	<h3> <?php echo($Jalabi[2]) ?> </h3>
</section>
    
</section>

<section>

<h2><li><?php echo($Basbousa[0]) ?></li></h2>
<img src="<?php echo($Basbousa[3]) ?> width="154" height="142">
	<h3> <?php echo($Basbousa[1]) ?> </h3>
	<h3> <?php echo($Basbousa[2]) ?> </h3>
</section>
    
</section>

<h1>Boissons</h1>

 <section>

  <img src=<?php echo($coca[3]) ?> width="154" height="142">
  <img src=<?php echo($sprite[3]) ?> width="154" height="142">
  <img src=<?php echo($fanta[3]) ?>" width="154" height="142">
  <h3> Prix : 1,50 	</h3>

    
</section>

</body>
</html>
