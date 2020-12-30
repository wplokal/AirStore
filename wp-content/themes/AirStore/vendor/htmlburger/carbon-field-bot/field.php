<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Bot\Bot_Field;

define( 'Carbon_Field_Bot\\DIR', __DIR__ );

Carbon_Fields::extend( Bot_Field::class, function( $container ) {
	return new Bot_Field(
		$container['arguments']['type'],
		$container['arguments']['name'],
		$container['arguments']['label']
	);
} );
