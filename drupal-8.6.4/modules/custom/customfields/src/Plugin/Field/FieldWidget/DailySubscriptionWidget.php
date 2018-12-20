<?php

namespace Drupal\customfields\Plugin\Field\FieldWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'DailySubscriptionWidget' widget.
 *
 * @FieldWidget(
 *   id = "DailySubscriptionWidget",
 *   label = @Translation("Daily Subscription"),
 *   field_types = {
 *     "dailysubscription"
 *   }
 * )
 */
class DailySubscriptionWidget extends WidgetBase {

  /**
   * Define the form for the field type.
   * 
   * Inside this method we can define the form used to edit the field type.
   * 
   */
  public function formElement(FieldItemListInterface $items,$delta, Array $element, Array &$form, FormStateInterface $formState) {
    
     $element['daily'] = [
      '#type'  => 'checkbox',
      '#title' => t('Subscribe Daily'),
      '#default_value' => isset($items[$delta]->daily) ? 
          $items[$delta]->daily : null,
      '#placeholder' => t('Daily'),
    ];

    return $element;
  }

} 