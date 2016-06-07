<?php

    /**
     * Aggiunge una sezione nel Customizer
     */

    function zencom_custom_options ($wp_customize) {

        /* aggiunge la voce di menu del customizer */

        $wp_customize->add_section(
            'zencom_theme_date_section',
            array(
                'title' => 'Data del progetto',
                'description' => 'Imposta mese ed anno di creazione del sito',
                'priority' => 999,
            )
        );

        /* aggiunge i campi alla sezione */

        $wp_customize->add_setting(
             'zencom_theme_month_option',
             array(
                 'default' => 'mm', /* valore di default del campo */
             )
         );
        $wp_customize->add_setting(
             'zencom_theme_year_option',
             array(
                 'default' => 'YYYY', /* valore di default del campo */
             )
         );

        /* lega i campi a dei controlli input nell'interfaccia */

        $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 'zencom_theme_month_option', 
        array (
            'label' => 'Mese',
            'section' => 'zencom_theme_date_section',
            'type' => 'text'
             )
        ));
        $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 'zencom_theme_year_option', 
        array (
            'label' => 'Anno',
            'section' => 'zencom_theme_date_section',
            'type' => 'text'
             )
        ));
    }
    add_action('customize_register','zencom_custom_options');

?>