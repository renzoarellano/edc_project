<?php 

$sectionTitle = '';
$sectionVision = '';
$sectionGeotermia = '';
$sectionProyecto = '';
if(isset($_GET['section'])){
    if($_GET['section'] == 'nuestra-vision-para-el-sur'){
        $sectionTitle = 'NUESTRA VISIÓN PARA EL SUR';
        $sectionVision = 'active';
    }else if($_GET['section'] == 'que-es-la-geotermia'){
        $sectionTitle = 'QUÉ ES LA GEOTERMIA';
        $sectionGeotermia = 'active';
    }else{
        $sectionTitle = 'NUESTROS PROYECTOS';
        $sectionProyecto = 'active';
    }
}else{
    $sectionTitle = 'EDC EN PERÚ';
    $sectionVision = 'active';
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