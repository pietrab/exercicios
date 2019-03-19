<?php
 print "Escreva a nota: ";
 $nota = fgets (STDIN);

while (0>$nota or $nota>10){
     print "Não é válido \n";
     print "Escreva a nota: ";
     $nota = fgets (STDIN);
 }

if ($nota<=10) {
    print "A nota é válida \n";
 }