<?php

require __DIR__ .'/vendor/autoload.php';

use \App\Entity\Medico;
use \App\Entity\Paciente;
use \App\Entity\Convenio;

$medicos = Medico::getMedico(); 
$pacientes = Paciente::getpaciente();
$convenios = Convenio::getconvenio();

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/footer.php';