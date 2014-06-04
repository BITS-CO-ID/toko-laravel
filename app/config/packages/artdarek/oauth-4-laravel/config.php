<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | oAuth Config
      |--------------------------------------------------------------------------
     */

    /**
     * Storage
     */
    'storage' => 'Session',
    /**
     * Consumers
     */
    'consumers' => array(
        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id' => '1374445972820863',
            'client_secret' => 'aca6db182a986d6050e6f10c35c969d6',
            'scope' => array('email', 'read_friendlists', 'user_online_presence'),
        ),
        'Twitter' => array(
            'client_id' => 'Baoon51vIAKso7kQlsA',
            'client_secret' => 'LfEkusgXpUwj6xiSlbulysnZED8qaggNIs2VNO8w',
        ),
    )
);
