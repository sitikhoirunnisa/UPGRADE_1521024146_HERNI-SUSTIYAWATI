<table border='1'>
	<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
</tr>
</tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
  <td>
  	<?php
  	$n1="HERNI SUSTIYAWATI" ;
  	echo $n1;
  	?>
  	</td>
  	<td>
  	<?php
  	$vA = substr_count($n1,"A") ;
  	echo $vA;
  	?>
  	</td>
  	  <td>
  	<?php
  	$vE = substr_count($n1,"E") ;
  	echo $vE
  	?>
  	</td>
  	  <td>
  	<?php
  	 $vI = substr_count($n1,"I") ;
  	 echo $vI
  	?>
  	</td>
  	  <td>
  	<?php
  	 $vU = substr_count($n1,"U") ;
  	 echo $vU
  	?>
  	</td>
  	  <td>
  	<?php
  	 $vO = substr_count($n1,"O") ;
  	 echo $vO
  	?>
  	</td>
  </tr>
  </table>