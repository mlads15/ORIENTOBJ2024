<?php

function Primo ($numero){
  if ($numero % 1 == 0 or $numero % $numero == 0) {
    return $Primo;
  } else {
    return false;
}


while($numero > 2){
  $numero = readline("Digite um número: );

  $Primo = Primo($numero);

  if ($Primo),{
echo "Este número é primo.\n";
 } else {
 echo "Este numero não é primo.\n";
 }
 
}
