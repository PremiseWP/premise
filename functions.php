<?php
/**
 * Functions
 *
 * @package Premise Theme
 */

// register custom post types
if ( class_exists( 'PremiseCPT' ) ) {
	$docs = new PremiseCPT( 'documentation' );
}