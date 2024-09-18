<?php
 
namespace Drupal\hello_name\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
 
class HelloNameController extends ControllerBase {
 
  public function content() {
    $url = Url::fromRoute('hello_name.form');
    $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
    return ['#markup'=>$this->t('Hello, [Your Name]! @link', ['@link' => $link])];
  }

  public function greeting($name) {
    return [
      '#markup' => $this->t('Hello, @name!', ['@name' => $name])
    ];
  }


 
}