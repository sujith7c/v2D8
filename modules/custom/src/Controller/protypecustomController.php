<?php
namespace Drupal\custom\Controller\CustomController;
use Drupal\Core\Controller\ControllerBase;

class CustomController extends ControllerBase {
    public function content() {
        return [
          '#type' => 'markup',
          '#markup' => $this->t('Hello, World!'),
        ];
      }
}
?>