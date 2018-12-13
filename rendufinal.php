<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Projet multiplication rendu</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="table.css">

</head>
<body>

  <h1>Projet multiplication</h1>
  <h2>Apprendre les tables de multiplication et réviser !</h2>
  <h3>Exercice 1 : Afficher la table de 3</h3>
<?php
  for ($i = 1; $i <= 10; $i++)
  {
    echo '3'.' x '.$i.' = '. 3*$i.'<br>';
  }
?>

  <br> <br> <br>

  <!----------------------------------------------FIN EXERCICE 1------------------------------------------------------>

  <h3>Exercice 2 : afficher une liste déroulante</h3>
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


    <input type="submit" value="Calculer" >

  </form>
  <?php

  echo'<br>';
  if (isset($_POST['select'])){
   for ($i = 1; $i <= 10; $i++)
   {
    echo $_POST['select'].' x '.$i.' = '. $_POST['select']*$i.'<br>';
  }
}
?>
<br> <br> <br>
<!----------------------------------------------FIN EXERCICE 2-------------------------------------------------->
<h3>Exercice 3 : Utiliser des checkbox</h3>
<form action="" method="post">
      <input type="checkbox" name="table[]" value="1" >Table 1
      <input type="checkbox" name="table[]" value="2" >Table 2
      <input type="checkbox" name="table[]" value="3" >Table 3
      <input type="checkbox" name="table[]" value="4" >Table 4
      <input type="checkbox" name="table[]" value="5" >Table 5
      <input type="checkbox" name="table[]" value="6" >Table 6
      <input type="checkbox" name="table[]" value="7" >Table 7
      <input type="checkbox" name="table[]" value="8" >Table 8
      <input type="checkbox" name="table[]" value="9" >Table 9
      <input type="checkbox" name="table[]" value="10" >Table 10

      <input type="submit" value="Calculer" >

    </form>

    <?php

    if(!empty($_POST['table']))
  {
      foreach($_POST['table'] as $check)
    {
        echo $check.'<br>';
         for ($i = 1; $i <= 10; $i++)
        {
          echo $check.' x '.$i.' = '. $check*$i.'<br>';
        }
    }
  }
    ?>
    <br> <br> <br>
<!----------------------------------------------FIN EXERCICE 3-------------------------------------------------->

<h3>Exercice 4 :Faire un système d'évaluation</h3>

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
