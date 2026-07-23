<?php
/**
 * Custom Walker_Nav_Menu so wp_nav_menu() output matches the original
 * hand-coded markup exactly: parent items with children get a
 * "has-dropdown" class, and the child <ul> gets class "dropdown"
 * (instead of WordPress' default "sub-menu"), plus a chevron icon.
 *
 * @package Payroll_Servicess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Payroll_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Start the child menu list.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n{$indent}<ul class=\"dropdown\">\n";
	}

	/**
	 * Start each menu item.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent     = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes    = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );

		$li_classes   = array();
		if ( $has_children ) {
			$li_classes[] = 'has-dropdown';
		}
		if ( in_array( 'current-menu-item', $classes, true ) || in_array( 'current-menu-ancestor', $classes, true ) ) {
			$li_classes[] = 'active';
		}

		$class_names = $li_classes ? ' class="' . esc_attr( implode( ' ', $li_classes ) ) . '"' : ' class=""';

		$output .= "{$indent}<li{$class_names}>";

		$attributes  = ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : ' href="#"';
		$link        = '<a' . $attributes . '>';
		$link       .= esc_html( $item->title );
		if ( $has_children ) {
			$link .= ' <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i>';
		}
		$link       .= '</a>';

		$output .= $link;
	}
}
