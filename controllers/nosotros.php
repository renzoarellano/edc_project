<?php 

$sectionTitle = '';
$sectionQuienes = '';
$sectionEDC = '';
$sectionGobierno = '';
if(isset($_GET['section'])){
    if($_GET['section'] == 'quienes-somos'){
        $sectionTitle = 'QUIENES SOMOS';
        $sectionQuienes = 'active';
    }else if($_GET['section'] == 'edc-en-el-mundo'){
        $sectionTitle = 'EDC EN EL MUNDO';
        $sectionEDC = 'active';
    }else{
        $sectionTitle = 'GOBIERNO CORPORATIVO';
        $sectionGobierno = 'active';
    }
}else{
    $sectionTitle = 'QUIENES SOMOS';
    $sectionQuienes = 'active';
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