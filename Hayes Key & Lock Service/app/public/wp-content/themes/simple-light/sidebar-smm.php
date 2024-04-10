<?php 

    if ( is_active_sidebar( 'sidebar-smm' ) )  { 
    
?>
        
        <aside class="smm">
            <div class="row h-100 m-0">
                <?php dynamic_sidebar( 'sidebar-smm' ) ?>
            </div>
        </aside>

<?php 
    
    }