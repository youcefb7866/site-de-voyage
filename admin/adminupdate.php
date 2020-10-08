
<?php

 require '../php/BDD.php';
 $id = $_POST['id'];
 $user = 'root';
 $pass = '';

 /*if(isset($_POST['id'])){
   $titre= $_POST['titre'];
   $texte= $_POST['texte'];
    $image= $_POST['image'];
    $prix= $_POST['prix'];
 if(!empty($titre) AND !empty($texte) AND !empty($image) AND !empty($prix) AND !empty($taille)){
*/
 


 /*while ($circuits= $reponse->fetch()){
<tr>
  <td><?php echo $circuits['titre']; ?></td>
  <td><?php echo $circuits['texte']; ?></td>
  <td><?php echo $circuits['image']; ?></td>
  <td><?php echo $circuits['prix']; ?></td>
</tr>
*/
 $dbh = new PDO('mysql:host=localhost;dbname=sitedevoyage', 'root', '');
 $reponse = $dbh->query("SELECT * FROM circuits WHERE id");
 /*$reponse = $dbh->query("SELECT * FROM circuits WHERE id_circuits=$id");*/

?>
<form  class="was-validated" action="update.php?id=<?php echo $id;?>" method="POST">
<?php if ($table=="circuits"){?>
<div class="form-group">
    <label for="validationTitre">Titre</label></br>
    <input type="text" name="titre" class="form-control" id="validationTitre" placeholder="" required>
</div>
<div class="form-group">
    <label for="validationTexte">Texte</label></br>
    <input name="texte" class="form-control" id="validationTexte" placeholder="" required>
  
</div>
<div class="form-group">
    <label for="validationImage">Image</label></br>
    <input type="text" name="image" class="form-control" id="validationImage" placeholder="" required>
</div>
<div class="form-group">
    <label for="validationPrix">Prix</label></br>
    <input type="text" class="form-control" name="prix" id="validationPrix" placeholder="" required>
</div>
 </form>
<button type="submit" class="btn btn-primary">Ajouter</button>
<?php
header('Location: ../update.php');
?>


