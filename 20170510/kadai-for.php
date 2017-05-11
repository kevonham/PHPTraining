<table border="1">
<?php
for ($i=1;$i<=10;$i++) {
    echo"<tr>";
    for ($x=1;$x<=10;$x++) {
      echo"<td>".$i*$x."</td>";
  }
    echo"</tr>";
}
 ?>
</table>

<table border="1">
<?php
for ($i=1; $i<=10; $i++) {
    echo"<tr>";
    if($i*1<=10){
    echo"<td>".$i*1."</td>";
    }
    elseif($i*2<=20){
    echo"<td>".$i*1."</td>";
    }
    elseif($i*3<=30){
    echo"<td>".$i*3."</td>";
    }
    elseif($i*4<=40){
    echo"<td>".$i*4."</td>";
    }
    elseif($i*5<=50){
    echo"<td>".$i*5."</td>";
    }
    elseif($i*4<=40){
    echo"<td>".$i*4."</td>";
    }
    echo"</tr>";
}
 ?>
</table>
