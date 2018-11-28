<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<h1>Ο παρακάτω πίνακας χρησιμοποιεί βρόχους επανάληψης.</h1>
<table border="1px solid blue;">
<?php for ($i=1;$i<=10;$i++)
      {
        if ($i%2 == 0){
          echo '<tr>';
          for ($j=1;$j<=10;$j++)
          {
            echo "<td style='background-color: green;' width='30px'; height='30px'; ></td>";
          }
          echo '</tr>';
        }else{
          echo '<tr>';
          for ($j=1;$j<=10;$j++)
          {
            echo "<td class='kokkina'style='background-color: red;' width='30px'; height='30px'; ></td>";
          }
          echo '</tr>';

        }
      }
?>
</table>

<script>

  var answer = prompt("Εισάγετε ένα μήνυμα","");
  for (k=0;k<50;k++)
  {
  document.getElementsByClassName('kokkina')[k].innerHTML = answer ;
  }

</script>
</body>
</html>
