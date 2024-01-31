<?php

add_action( 'gform_after_submission', 'postToSalesForce', 10, 2 );
function postToSalesForce( $entry, $form ) {

    if($form['id'] === 2 || $form['id'] === 4){
      $body = [
        'first_name' => $entry[1],
        'last_name' => $entry[2],
        'email' => $entry[3],
        'phone' => $entry[4],
        'company' => $entry[5],
      ];

      return $body;
    }

}