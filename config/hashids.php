<?php

/**
*/
return [

	/**
	 * The secret used for hashing.
	*/
	'salt' => env('HASHIDS_SALT'),

	/**
	 * The maximum length of the hash.
	*/
	'length' => env('HASHIDS_LENGTH'),

	/**
	 * The characters used for hashing.
	*/
	'alphabet' => env('HASHIDS_ALPHABET')

];
