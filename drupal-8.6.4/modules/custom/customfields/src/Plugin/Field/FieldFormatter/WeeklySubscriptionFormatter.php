<?php

namespace Drupal\customfields\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

/**
 * Plugin implementation of the 'WeeklySubscriptionFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "WeeklySubscriptionFormatter",
 *   label = @Translation("Weekly Subscription"),
 *   field_types = {
 *     "weeklysubscription"
 *   }
 * )
 */
class WeeklySubscriptionFormatter extends FormatterBase {

  /**
   * Define how the field type is showed.
   * 
   * Inside this method we can customize how the field is displayed inside 
   * pages.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    $sunday = [];
    $monday = [];
    $tuesday = [];
    $wednesday = [];
    $thursday = [];
    $friday = [];
    $saturday = [];
    
    foreach ($items as $delta => $item) {
      if ($item->sunday == 1){
        $sunday[$delta] = [
        '#plain_text' => "Sunday"
      ];
      }
     if ($item->monday == 1){
        $monday[$delta] = [
        '#plain_text' => "Monday"
      ];
      }
      if ($item->tuesday == 1){
        $tuesday[$delta] = [
        '#plain_text' => "Tuesday"
      ];
      }
      if ($item->wednesday == 1){
        $wednesday[$delta] = [
        '#plain_text' => "Wednesday"
      ];
      }
     if ($item->thursday == 1){
        $thursday[$delta] = [
        '#plain_text' => "Thursday"
      ];
      }
     if ($item->friday == 1){
        $friday[$delta] = [
        '#plain_text' => "Friday"
      ];
      }
      if ($item->saturday == 1){
        $saturday[$delta] = [
        '#plain_text' => "Saturday"
      ];
      }
   }
    $elements = array_merge($sunday,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday);
    return $elements;
  }
  
} 