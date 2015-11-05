<?php

if ( file_exists( $argv[1] ) )
	$mt_data = simplexml_load_file( $argv[1] );
else die;

foreach ( $mt_data as $key => $mt_object ) {
	if ( 'entry' === $key ) {
		print_r( $mt_object );
	}
}