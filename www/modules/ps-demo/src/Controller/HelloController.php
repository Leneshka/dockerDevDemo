<?php
/**
 * @file
 * Contains \Drupal\ps_demo\Controller\HelloController.
 */

namespace Drupal\ps_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Have a nice SPb PHP Meetup!'),
    );
  }
}
?>