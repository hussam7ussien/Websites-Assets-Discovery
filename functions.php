<?php
// if(isset($_POST['filter']) && $_POST['filter']!=''):
    require "vendor/autoload.php";
    use PHPHtmlParser\Dom;

    $dom = new Dom;

    $dom->setOptions([
        'removeScripts' => false, 
        'removeStyles' => false, 
    ]);

    $url = $_POST['filter'];
    $parsed = parse_url($url);
    if (empty($parsed['scheme'])) {
        $url = 'http://' . ltrim($url, '/');
    }

    if(!url_exists($url)){
        echo json_encode(array('success' => 0,'message'=>'1'));
        die;
    }

    $dom->load($url);

    $_images = array();
    $_json = array();
    $_styles = array();
    $_scripts = array();
    //find all scripts
    $scripts = $dom->find('script');
    foreach ($scripts as  $object) {
        if($object->src != '')
            $_scripts[] = $object->src;
    }

    //find all style sheets
    $styles = $dom->find('link');
    foreach ($styles as  $object) {
        $ext = pathinfo($object->href, PATHINFO_EXTENSION);
        $imageTypes = array("jpeg", "gif", "png");
        $jsonTypes = array("json");
        if(in_array($ext, $imageTypes) && $object->href != '') 
            $_images[] = $object->href;
        elseif(in_array($ext, $jsonTypes) && $object->href != '') 
            $_json[] = $object->href;
        elseif($object->href != '')
            $_styles[] = $object->href;         
    }


    //find all images
    $images = $dom->find('img');
    foreach ($images as  $object) {
        if($object->src != '')
            $_images[] = $object->src;
    }

    $response = array(
        'success' => 1,
        'images'=> $_images,
        'styles'=> $_styles,
        'scripts'=> $_scripts,
        'other'=> $_json,
    );
    echo json_encode($response);
    die;
// endif;

function url_exists($url) {
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') 
        return false;
    else 
        return true;
}


