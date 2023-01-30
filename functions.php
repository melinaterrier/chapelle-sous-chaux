<?php
    /**
     * Fonction du thèmes
     * @link https://developer.wordpress.org/themes/basics/theme-functions/
     * Pour organiser les fonctions du thèmes
     * @link https://florianbrinkmann.com/en/organizing-files-functions-wordpress-theme-4190/
     */
    
    // Intégration du fichier avec les appels add_action().
    require_once get_template_directory() . '/inc/actions.php';
    
    // Intégration du fichier avec les fonctions de template.
    require_once get_template_directory() . '/inc/template-functions.php';   
?>