<?php 

$sectionTitle = '';
$sectionSostenibilidad = '';
$sectionEnPeru = '';
$sectionEnElMundo = '';
if(isset($_GET['section'])){
    if($_GET['section'] == 'sostenibilidad'){
        $sectionTitle = 'SOSTENIBILIDAD';
        $sectionSostenibilidad = 'active';
    }else if($_GET['section'] == 'rsc-en-peru'){
        $sectionTitle = 'RSC EN PERÚ';
        $sectionEnPeru = 'active';
    }else{
        $sectionTitle = 'RSC EN EL MUNDO';
        $sectionEnElMundo = 'active';
    }
}else{
    $sectionTitle = 'RESPONSABILIDAD SOCIAL CORPORATIVA';
    $sectionSostenibilidad = 'active';
}
/*
echo $sectionTitle;
echo 'quienes: '.$sectionQuienes;
echo 'edc: '.$sectionEDC;
echo 'gobierno: '.$sectionGobierno;
*/

$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>