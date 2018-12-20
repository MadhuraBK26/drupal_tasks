<?php
namespace Drupal\customfields\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'weekly subscription' field type.
 *
 * @FieldType(
 *   id = "weeklysubscription",
 *   label = @Translation("Weekly subscription"),
 *   description = @Translation("Field of type weekly subscription"),
 *   default_widget = "WeeklySubscriptionWidget",
 *   default_formatter = "WeeklySubscriptionFormatter"
 * )
 */
class WeeklySubscription extends FieldItemBase {

  /**
   * Field type properties definition.
   * 
   * Inside this method we defines all the fields (properties) that our 
   * custom field type will have.
   * 
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
   $properties = array();
    $properties['sunday'] = DataDefinition::create('string')
        ->setLabel(t('Sunday'))
        ->setRequired(TRUE);
    $properties['monday'] = DataDefinition::create('string')
        ->setLabel(t('Monday'))
        ->setRequired(TRUE);
    $properties['tuesday'] = DataDefinition::create('string')
        ->setLabel(t('Tuesday'))
        ->setRequired(TRUE);
    $properties['wednesday'] = DataDefinition::create('string')
        ->setLabel(t('Wednesday'))
        ->setRequired(TRUE);
    $properties['thursday'] = DataDefinition::create('string')
        ->setLabel(t('Thursday'))
        ->setRequired(TRUE);
    $properties['friday'] = DataDefinition::create('string')
        ->setLabel(t('Friday'))
        ->setRequired(TRUE);
    $properties['saturday'] = DataDefinition::create('string')
        ->setLabel(t('Saturday'))
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
        'sunday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'monday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'tuesday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'wednesday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'thursday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'friday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
        'saturday' => array(
          'type' => 'varchar',
          'length' => 12
        ),
      ),
    );
  }

} 