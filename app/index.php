<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 11/15/15
 * Time: 7:01 PM
 */

    require_once('../vendor/autoload.php');

    //Our Extended Class
    $dom = new \App\Classes\Packages\PHPHtmlParser\Dom;

    //Load URL with Proxy Server
    $html = $dom->loadFromUrlProxy( 'chrismedinaphp.com', 'YOUR_PROXY_IP:PROXY_PORT');
    echo $html;

    //Find a link
    $a = $dom->find('a')[0];
    echo $a->text;