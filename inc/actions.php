<?php
/**
 * All add_action() calls.
 */

// Initialisation des fonctions personnalisées du thème.
add_action( 'after_setup_theme', 'montheme_setup' );

// Add Gutenberg script.
// add_action( 'enqueue_block_editor_assets', 'gutenberg_gallery_block' );

// Register the menu locations.
add_action( 'init', 'register_my_menu' );

// File d'attente des styles et des scripts
add_action( 'wp_enqueue_scripts', 'montheme_scripts_styles' );