<?php

namespace Drupal\customfields\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

/**
 * Plugin implementation of the 'DailySubscriptionFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "DailySubscriptionFormatter",
 *   label = @Translation("Daily Subscription"),
 *   field_types = {
 *     "dailysubscription"
 *   }
 * )
 */
class DailySubscriptionFormatter extends FormatterBase {

  /**
   * Define how the field type is showed.
   * 
   * Inside this method we can customize how the field is displayed inside 
   * pages.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'markup',
        '#markup' => $item->daily
      ];
    }

    return $elements;
  }
  
} 