<?php
/**
 * @file
 * Contains \Drupal\ps_demo\Controller\HelloController.
 */

namespace Drupal\ps_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    $event = "Meetup";
    $place = "SPb";
    $language = "PHP";

    $message = sprintf("Have a nice %1s %2s %3s", $language, $place, $event);

    return array(
      '#type' => 'markup',
      '#markup' => t($message),
    );
  }
}
?>