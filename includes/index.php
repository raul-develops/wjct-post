<?php 






function wpjct_post_cat(){





    if ( is_single() && has_tag('cat') )
        {
            ?>
            <img src="https://images.unsplash.com/photo-1536589961747-e239b2abbec2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="150px" height="150px" />
            <?php 
        }
        
    
    
    
    
    }
    
    add_action('the_post', 'wpjct_post_cat');
    
    
    
    function wjct_post_title($title, $id=null){
    
        if(is_single() && has_tag('cat')){
    
            return get_the_date('F Y', get_the_ID())."-" . $title;
        }
        else{
            return $title;
        }
        
    }
    
    
    add_filter('the_title', 'wjct_post_title');




