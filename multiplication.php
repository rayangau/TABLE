<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projet multiplication</title>


  <link rel="stylesheet" href="table.css">
</head>
<body>
  <h1>Projet multiplication</h1>
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


  for ($i = 1; $i <= 10; $i++)
  {
    echo '3'.' x '.$i.' = '. 3*$i.'<br>';
  }



  echo $_POST['select'];
  echo'<br>';
  if (isset($_POST['select'])){
   for ($i = 1; $i <= 10; $i++)
   {
    echo $_POST['select'].' x '.$i.' = '. $_POST['select']*$i.'<br>';
  }
}

?>

<br><br><br><br><br><br><br><br><br><br>

<!-- <?php
for ($i = 1; $i <= 10; $i++)
{
    Echo 'La Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}





?> -->

</body>
</html>
<!--  <div class="container">
    <div class="row">
      <div class="col-md-1 Menu">première table
        <ul id="sousMenu">
                <li>TABLE</li>

            </ul>
      </div>
      <div class="col-md-1">deuxième table

      </div>
      <div class="col-md-1">troisiéme table

      </div>
      <div class="col-md-1">quatrième table

      </div>
      <div class="col-md-1">cinquième table

      </div>
      <div class="col-md-1">sixème table

      </div>
      <div class="col-md-1">septième table

      </div>
      <div class="col-md-1">huitième table

      </div>
      <div class="col-md-1">neuvième table

      </div>
      <div class="col-md-1">dixième table

      </div>
    </div>
  </div> -->
