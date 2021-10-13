<?php

namespace Drupal\arisen\Controller;

/**
 * Hello World Controller.
 */
class HelloWorldController {

  /**
   * Function for rendering hello page.
   */
  public function hello() {
    return [
      '#markup' => 'Hello world, custom page',
    ];
  }

}
