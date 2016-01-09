<?php 

require_once("../ased-includes/header.php");


    echo CONTENT_WRAPPER_START;
    
    //This PHP, gets all users from the database. And displays them on the html
    //#echo "<br><br>Starting MySQL <br><br>";

    //Connect to the database
    $dbConnection = mysql_connect('localhost', 'inbccbtvgs_66', 'iEycCsgWNW8' ); //or die(mysql_error()); 


    if (!$dbConnection):
        die('Could not connect: ' . mysql_error());
    else:
        mysql_select_db('ased_skills_', $dbConnection);

        $query = 'select * from ased_skills_.users';		//make sql query
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);

        
        if($row):
            //For each row, print row
            $dbNumOfUsersCount = -1;
            
            $result = mysql_query($query, $dbConnection);
            //$row = mysql_fetch_assoc($result); 	//Get the first row
            
            echo '<section class="row" >';
            
            //Print All users as Blocks
            while ($row = mysql_fetch_array($result)):
                //Get province name using "provinceID"
                $queryProvince = "SELECT * FROM ased_skills_.provincialstructures where provinceID = '". $row["provinceID"] ."';";		//make sql query
                $resultProvince = mysql_query($queryProvince, $dbConnection);
                $rowProvince = mysql_fetch_assoc($resultProvince);
                
?>                
                <section class="col-lg-4 col-md-4 col-sm-12">
                    
                    <article class="ased_user_container">
                        <figure class="user-profpic" >
                            <img src='<?php echo $row["pictureURL"]; ?>'>
                        </figure>
                        
                        <article class="user_details" >
                            
                            <p class="ased_username"><a href=""><?php echo $row["firstname"] . " " . $row["lastname"] ; ?></a></p>
                            
                            <p class="skills-emp" > <?php echo $row["skills"] . " at " . $row["profession"]; ?> </p>
                            
                            <p class="place">Lives in  <?php echo $row["city"] ." - " . $row["provinceName"];?> </p>
                            
                        </article>
                        
                        <footer class="row btn-container">
                            <a href="#" class="button primary-btn custom-btn" id="network-btn" >Network With</a>
                            <a href="#" class="button primary-btn custom-btn" id="send-msg-btn" >Send Message</a>
                        </footer>
                        
                     </article>
                    
                </section>
            
        
        <?php
            endwhile;
                echo "</section>";
        endif; 
        
    endif;

    echo CONTENT_WRAPPER_END;

require_once("../ased-includes/footer.php");