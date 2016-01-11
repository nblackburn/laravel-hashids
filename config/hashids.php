<?php

/**
 * Laravel Hashids
 * This file allows you to bind settings to the Hashids instance.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
return [

    'length'   => env('HASHIDS_LENGTH', 8),
    'salt'     => env('HASHIDS_SALT', 'THISISMYREALLYSECRETSALT'),
    'alphabet' => env('HASHIDS_ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'),

];
