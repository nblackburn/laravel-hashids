<?php

/**
*/
return [

	/**
	 * The secret used for hashing.
	*/
	'salt' => config('app.key'),

	/**
	 * The maximum length of the hash.
	*/
	'length' => 10,

	/**
	 * The characters used for hashing.
	*/
	'alphabet' => 'abcedefghijklmnopqrstuvwxyzABCEDEFGHIJKLMNOPQRSTUVWXYZ123456890'

];
