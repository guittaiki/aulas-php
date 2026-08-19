<?php // recursos.php
const ALUNO = "Taiki";
define("ESCOLA", "Senac Penha");
$curso = "Tecnico em Informatica para Internet";
$tecnologias = ["PHP", "SQL", "HTML", "CSS", "JavaScript"];
function verificarIdade(int $idade):string {
   return $idade >= 18 ? "maior" : "menor";
}