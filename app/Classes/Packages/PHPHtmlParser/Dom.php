<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 11/15/15
 * Time: 12:32 PM
 */
namespace App\Classes\Packages\PHPHtmlParser;

use App\Classes\Curl;
use \PHPHtmlParser\Exceptions\CurlException;

/**
 * Class Dom - Extends PHPHtmlParser\Dom to allow for Proxy Support
 * @package App\Classes\Packages\PHPHtmlParser
 */
class Dom extends \PHPHtmlParser\Dom {

    public function loadFromUrlProxy($url, $proxy = '', $options = [], CurlException $curl = null)
    {
        if (is_null($curl))
        {
            // use the default curl interface
            $curl = new Curl;
        }
        $content = $curl->get($url, $proxy);

        return $this->loadStr($content, $options);
    }

}