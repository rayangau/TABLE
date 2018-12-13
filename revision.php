<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Evaluation</title>


  <link rel="stylesheet" href="table.css">
</head>
<body>
  <h1>Evaluation</h1>
<style>

</style>
<?php
session_start();


if(isset($_POST['select'])){



  $nb =rand(1,10);
  $table= $_POST['select'];





  $resultat=$table*$nb;

  $_SESSION['resultat'] = $resultat;
  // echo $_SESSION['resultat'];
  ?>
      <form method="post" action="">
      <input style="display : none" type="text" name="rep" value="<?php echo $resultat ?>" >

      <input type="text"  name="calcul" value="<?php echo $nb.'x'.$table.' = ' ; ?>" readonly>

      <input type="text" name="reponse" placeholder="entrez votre réponse">
      <input type="submit" name="valider" value="Valider">


  </form>
  <?php
}

if(isset($_POST['valider'])){


  if($_SESSION['resultat']==$_POST['reponse']){


      echo "gagné";



  }
  else{
    echo "faux";
  }
}

?>



<?php if(!isset($_POST['select'])) : ?>
  <form method="post" action="">

    <select id="monselect" name="select">
      <option value="1">table 1</option>
      <option value="2" >table 2</option>
      <option value="3">table 3</option>
      <option value="4">table 4</option>
      <option value="5">table 5</option>
      <option value="6">table 6</option>
      <option value="7">table 7</option>
      <option value="8">table 8</option>
      <option value="9">table9</option>
      <option value="10">table 10</option>
    </select>
    <input type="submit" value="evaluer">
  </form>




<?php endif; ?>




</body>
</html>

