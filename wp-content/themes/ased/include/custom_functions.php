<?php

require_once ( "utilities.php" );

ased_queue_files( array("css/ased_custom") , STYLE );

ased_queue_files( array("js/ased") , SCRIPT );

remove_header_title();

ased_footer();