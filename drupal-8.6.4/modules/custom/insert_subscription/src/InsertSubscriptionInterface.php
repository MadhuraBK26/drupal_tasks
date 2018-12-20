<?php
namespace  Drupal\insert_subscription;
use Drupal\Core\Entity\EntityInterface;

interface InsertSubscriptionInterface {
	public function insertValues(EntityInterface $node);

}