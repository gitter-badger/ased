<?php 
    
    require_once("../wp-load.php");
    
    wp_head();
    
    do_action( 'genesis_before_header' );
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
    
    define( "CONTENT_WRAPPER_START" , "<section class='content_wrapper container' >" );
    define( "CONTENT_WRAPPER_END" , "</section>" );
    
    
    echo '<script>

                (function($){

                $(document).ready(function(){

                    var url_string = window.location.href;

                    var url_pieces = url_string.split("/");

                    var page = url_pieces[ url_pieces.length - 2 ];
                    
                    $("body").addClass( " custom-page " +page );

                });
                })(jQuery);
                    
               </script>';
    
