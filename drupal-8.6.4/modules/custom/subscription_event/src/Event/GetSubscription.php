<?php

namespace Drupal\subscription_event\Event;

use Symfony\Component\EventDispatcher\Event;
use Drupal\Core\Entity\EntityInterface;

class GetSubscription extends Event {
  const LOG_EVENT = 'log.event';

}
