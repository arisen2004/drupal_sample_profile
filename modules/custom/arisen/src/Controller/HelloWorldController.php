<?php

namespace Drupal\arisen\Controller;

class HelloWorldController {

    public function hello() {
        return [
            '#markup' => 'Hello world, custom page'
        ];
    }
}