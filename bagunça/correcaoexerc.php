<?php

for ($i = 1980; $i <= 2024; $i++) { 
  if ($i % 4 == 0 && $i % 100 != 0) {
    echo $i . "\n";
  } elseif ($i % 4 == 0 && $i % 400 != 0) {
    echo $i . "\n";
  }
}


//&& e AND funcionam da mesma forma.
//importante separar and && do ou || para que funcione corretamente
/* funciona da mesma forma que //, poŕem 
pode ser usado para mais de um comentário, 
sem ter que repetir o //. */ 
