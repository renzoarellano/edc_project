<?php 

$url = 'https://www.instagram.com/edc_peru/?__a=1';
$json = file_get_contents($url);

function objeto_a_json($data)
{
    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    } else {
        return $data;
    }
}

//Url para publicaciones: https://www.instagram.com/p/CBOVNTohA4k/
// CBOVNTohA4k = ShortCode.
// thumbnail_src = ruta de Imagen
//Tipos:
//__typename = GraphVideo - Video de Instagram
//__typename = GraphImage - Imagen simple de Instagram
//__typename = GraphSideCar - Carousel de imagenes de Instagram
//taken_at_timestamp = fecha de la publicación
//display_url = url
$jsonTiendas = objeto_a_json($json);
$arrayJSON = json_decode($jsonTiendas, true);
$arrayJSON = $arrayJSON['graphql']['user']['edge_owner_to_timeline_media']['edges'];
$countImages = count($arrayJSON);
if($countImages > 6){
    $countImages = 6;
}
foreach($arrayJSON as $publicacion){
    if($countImages > 0){
        if($publicacion['node']['__typename'] == 'GraphVideo'){
            $iconVideo = '<img width="24px" height="24px" src="app/img/play-button.png" alt="">';
        }else{
            $iconVideo = '';
        }
        $instagramPicture .= '
        <div class="imageInstagram col-6 col-md-3 col-lg-6  np">
            <span class="iconInstagram">
                '.$iconVideo.'
            </span>
            <a class="linkInstagram" href="https://www.instagram.com/p/'.$publicacion['node']['shortcode'].'/" target="_blank">
                <img width="100%" height="145px" src="'.$publicacion['node']['thumbnail_src'].'" alt="">
            </a>
        </div>
        ';
    }
   $countImages = $countImages - 1;
}
//print_r($arrayJSON['graphql']['user']['edge_owner_to_timeline_media']['edges']);

$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>