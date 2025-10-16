<?php
//ob_start('comprimir_pagina');
date_default_timezone_set('America/Costa_Rica');
ini_set("session.gc_maxlifetime", "28800");
ini_set("session.gc_probability", "1");
ini_set("session.gc_divisor", "10000");
ini_set("display_errors", 0);
ini_set("log_errors", 1);
//ini_set("error_log", "error_log-JT");
session_start();
/*
echo 'display_errors = ' . ini_get('display_errors') . "\n";

echo 'session.gc_maxlifetime = ' . ini_get('session.gc_maxlifetime') . "\n";
echo 'session.gc_probability = ' . ini_get('session.gc_probability') . "\n";
echo 'session.gc_divisor = ' . ini_get('session.gc_divisor') . "\n";

echo 'log_errors = ' . ini_get('log_errors') . "\n";
echo 'error_log = ' . ini_get('error_log') . "\n";
*/

require_once "mvc/controllers/clc-error.php";
require_once "mvc/controllers/clc-validadores.php";
require_once "mvc/controllers/clc-principal.php";
require_once "mvc/controllers/clc-sesion.php";
$mvc = new MvcController();
$mvc -> main();

require_once "mvc/controllers/noScrypt.php";
//ob_end_flush();
function comprimir_pagina($buffer) {
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
    $reemplaza = array('>','<','\\1');
    return preg_replace($busca, $reemplaza, $buffer);
}
 /*

 sudo chmod -R 0777 /opt/lampp/htdocs/MiFacturaCR/PHE/vendor/
 	sql mode
 */
