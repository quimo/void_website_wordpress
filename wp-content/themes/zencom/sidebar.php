<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zencom
 */
?>

<?php if (is_active_sidebar('sidebar-1')) : ?>
    <aside>
        <h2>Aside fullscreen</h2>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
<?php endif ?>
