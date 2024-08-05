<?php

$notas = ["8.5", "9.5", "5.3", "4.8", "9.0", "2.6", "10"];
$aprovados = "";
$reprovados = "";

foreach($notas as $indice => $nota) {
    if($nota >= 6) {
        $aprovados++;
        echo "Aluno " . $indice . ": Aprovado!" . "<br>";
    } else if($nota < 6) {
        echo "Aluno " . $indice . ": Reprovado!" . "<br>";
        $reprovados++;
    }
}

echo "<p>A quantidade de alunos APROVADOS foi: " . $aprovados . "</p>";
echo "<p>A quantidade de alunos REPROVADOS foi: " . $reprovados . "</p>";

?>