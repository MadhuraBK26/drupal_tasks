<?php

/**
 * @file providing the service 
 *
 */
namespace  Drupal\insert_subscription;

use Drupal\Core\Entity\EntityInterface;
use Drupal\insert_subscription\InsertSubscriptionInterface;


class InsertSubscription implements InsertSubscriptionInterface  {

    public function insertValues(EntityInterface $node) {
        $connection = \Drupal::service('database');
        if ($node->bundle() == 'daily_subscription')
        {
        	$nodeId = $node->nid->getValue();
        	$getNodeId = $nodeId[0]['value'];
         	$subscription = $node->field_subsc_daily->getValue();
            $getDailySubscription = $subscription[0]['daily'];
    	    $connection->insert('subscription')
    	               ->fields([
    	                 'entity_id' => $getNodeId,
    	                 'daily_subscription' => $getDailySubscription,
    	                 'weekly_subscription' => null
    	               ])
    	               ->execute(); 
        } 

        if($node->bundle() == 'weekly_subscription')
        {
        	$nodeId = $node->nid->getValue();
        	$getNodeId = $nodeId[0]['value'];
        	$subscription = $node->field_weekly_subsc->getValue();
        	foreach ($subscription as $subsribe)
        	{
        		foreach ($subsribe as $key=>$value)
        		{
        			$array[] = array($key=>$value);

        		}
        	}

        	$getJsonArray = json_encode($array);
        	$connection->insert('subscription')
    	               ->fields([
    	                 'entity_id' => $getNodeId,
    	                 'daily_subscription' => null,
    	                 'weekly_subscription' => $getJsonArray
    	               ])
    	               ->execute(); 
        }
     }
}

