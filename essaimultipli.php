<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication checkbox</title>
</head>
<body>
 <h1>table</h1>

    <form action="#" method="post">
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

</body>
</html>
