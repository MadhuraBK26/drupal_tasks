<?php

namespace Drupal\subscription_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class LogMessage
 */
class LogMessage implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */

  static function getSubscribedEvents() {
    $events['log.event'] = ['logMessage'];

    return $events;
  }

  /**
   * This method is called whenever the log.event event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function logMessage(Event $event) {
   
   //Log Message for nodes of type daily subscription
   $nids = \Drupal::entityQuery('node')->condition('type','daily_subscription')->execute();

   $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
   $time = date("H:i:s"); 
   foreach ($nodes as $node)
   {
     $nodeId = $node->nid->getValue();
     $getNodeId = $nodeId[0]['value'];
    
     
     $message = "Subscription for Node id: $getNodeId is dispatched on $time";
    \Drupal::logger('subscription_event')->error($message);
   }
  
   //Log Message for nodes of type weekly subscription
    $nids = \Drupal::entityQuery('node')->condition('type','weekly_subscription')->execute();
    $loadNodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
    
    foreach ($loadNodes as $loadNode)
    {
     $nodeId = $loadNode->nid->getValue();
     $getNodeId = $nodeId[0]['value'];
     $subscription = $loadNode->field_weekly_subsc->getValue();
     
     $day = date("l");
     $getDay = lcfirst($day);
     foreach ($subscription as $subsribe)
      {

            if(($subsribe['monday'] == 1) && ($getDay == 'monday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time ";
            
               \Drupal::logger('subscription_event')->error($message);
            }

            if(($subsribe['tuesday'] == 1) && ($getDay == 'tuesday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
            
               \Drupal::logger('subscription_event')->error($message);
            }

            if(($subsribe['wednesday'] == 1) && ($getDay == 'wednesday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
         
               \Drupal::logger('subscription_event')->error($message);
            }
            
             if(($subsribe['thursday'] == 1) && ($getDay == 'thursday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
           
               \Drupal::logger('subscription_event')->error($message);
            }
             
            if(($subsribe['friday'] == 1) && ($getDay == 'friday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
            
               \Drupal::logger('subscription_event')->error($message);
            } 
            
            if(($subsribe['saturday'] == 1) && ($getDay == 'saturday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
           
               \Drupal::logger('subscription_event')->error($message);
            } 
            
            if(($subsribe['sunday'] == 1) && ($getDay == 'sunday')){
              $message = "Subscription for Node id: $getNodeId is dispatched on $time";
          
               \Drupal::logger('subscription_event')->error($message);
            } 
       }
     }

  }
}
