<?php 

/*              connect to database
    ============================================= */
    
$dbConnection = mysqli_connect("localhost","inbccbtvgs_66","iEycCsgWNW8","ased_skills_");

// Check connection
if (mysqli_connect_errno())
{
    die( "Failed to connect to database: " . mysqli_connect_error() );
}