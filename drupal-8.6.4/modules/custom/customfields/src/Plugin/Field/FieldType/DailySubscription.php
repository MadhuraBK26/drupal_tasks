<?php

namespace Drupal\customfields\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'daily subscription' field type.
 *
 * @FieldType(
 *   id = "dailysubscription",
 *   label = @Translation("Daily Subscription"),
 *   description = @Translation("Field of type daily subscription"),
 *   default_widget = "DailySubscriptionWidget",
 *   default_formatter = "DailySubscriptionFormatter"
 * )
 */
class DailySubscription extends FieldItemBase {

  /**
   * Field type properties definition.
   * 
   * Inside this method we defines all the fields (properties) that our 
   * custom field type will have.
   * 
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties = array();
    $properties['daily'] = DataDefinition::create('string')
        ->setLabel(t('Daily'))
        ->setRequired(TRUE);
      return $properties;
  }

  /**
   * Field type schema definition.
   * 
   * Inside this method we defines the database schema used to store data for 
   * our field type.
   * 
   */
   public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'daily' => array(
          'type' => 'varchar',
          'length' => 12
        ),
      ),
    );
  }

} 