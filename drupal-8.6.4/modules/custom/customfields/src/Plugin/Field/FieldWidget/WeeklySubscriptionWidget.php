<?php
namespace Drupal\customfields\Plugin\Field\FieldWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'WeeklySubscriptionWidget' widget.
 *
 * @FieldWidget(
 *   id = "WeeklySubscriptionWidget",
 *   label = @Translation("Weekly Subscription"),
 *   field_types = {
 *     "weeklysubscription"
 *   }
 * )
 */
class WeeklySubscriptionWidget extends WidgetBase {

  /**
   * Define the form for the field type.
   * 
   * Inside this method we can define the form used to edit the field type.
   * 
   */
  public function formElement(FieldItemListInterface $items,$delta, Array $element, Array &$form, FormStateInterface $formState) {

    $element['sunday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Sunday'),
      '#default_value' => isset($items[$delta]->sunday) ? 
          $items[$delta]->sunday : null,
      '#placeholder' => t('Sunday'),
    ];
    $element['monday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Monday'),
      '#default_value' => isset($items[$delta]->monday) ? 
          $items[$delta]->monday : null,
      '#placeholder' => t('Monday'),
    ];
     $element['tuesday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Tuesday'),
      '#default_value' => isset($items[$delta]->tuesday) ? 
          $items[$delta]->tuesday : null,
      '#placeholder' => t('Tuesday'),
    ];
     $element['wednesday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Wednesday'),
      '#default_value' => isset($items[$delta]->wednesday) ? 
          $items[$delta]->wednesday : null,
      '#placeholder' => t('Wednesday'),
    ];
    $element['thursday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Thursday'),
      '#default_value' => isset($items[$delta]->thursday) ? 
          $items[$delta]->thursday : null,
      '#placeholder' => t('Thursday'),
    ];
     $element['friday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Friday'),
      '#default_value' => isset($items[$delta]->friday) ? 
          $items[$delta]->friday : null,
      '#placeholder' => t('Friday'),
    ];
     $element['saturday'] = [
      '#type'  => 'checkbox',
      '#title' => t('Saturday'),
      '#default_value' => isset($items[$delta]->saturday) ? 
          $items[$delta]->saturday : null,
      '#placeholder' => t('Saturday'),
    ];

    return $element;
  }

} 