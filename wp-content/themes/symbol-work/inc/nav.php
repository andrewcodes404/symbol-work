<div class="nav-wrapper">

    <nav class="nav">
        <div class="nav__logo">
            <h2>LOGO</h2>
        </div>

        <?php 
        wp_nav_menu( array(
            'menu' => 'navigation', 
            'menu_class' => 'nav__menu',
            'container' => "",
        ) );
   ?>

    </nav>
</div>