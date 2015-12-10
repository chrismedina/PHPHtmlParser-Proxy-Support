# PHPHtmlParser-Proxy-Support
This is an example of extending PHPHtmlParser with proxy server support.

PHPHtmlParser (https://github.com/paquettg/php-html-parser) is a simple, flexible, html parser which allows you to select tags using any css selector, like jQuery. The goal is to assist in the development of tools which require a quick, easy way to scrap html, whether it's valid or not! This project was original supported by sunra/php-simple-html-dom-parser but the support seems to have stopped so this project is my adaptation of his previous work.

To autoload your application, do something similar to what is seen in composer.json:

  "autoload" : {
    "psr-4": {
      "App\\": "app/",
      "App\\Classes\\": "app/Classes/",
      "App\\Classes\\Packages\\": "app/Classes/Packages/",
      "App\\Classes\\Packages\\PHPHtmlParser\\": "app/Classes/Packages/PHPHtmlParser/"
    }
  }
