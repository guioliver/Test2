<?php
$VALOR1=$_POST ["val1"];
$VALOR2=$_POST["val2"];
$vSOMA=$_POST["som"];
$vSUBTRACAO=$_POST["sub"];
$vMULTIPLICACAO=$_POST["mult"];
$vDIVISAO=$_POST["div"];
$CALC=$_POST ["result"];
 
 
 if ($vSOMA == true)
 { $calc = $VALOR1 + $VALOR2; 
	 echo " O resultado é    :" .$calc;
	 echo "<BR>";
 }
   if ($vSUBTRACAO == true)
 { $calc = $VALOR1 - $VALOR2; 
	 echo " O resultado é    :" .$calc;
	 echo "<BR>";
 }
  if ($vMULTIPLICACAO == true)
 { $calc = $VALOR1 * $VALOR2; 
	 echo " O resultado é    :" .$calc;
	 echo "<BR>";
 }
 if ($vDIVISAO == true)
 { $calc = $VALOR1 / $VALOR2; 
	 echo " O resultado é    :" .$calc;
	 echo "<BR>";
 }
 
 ?>
     