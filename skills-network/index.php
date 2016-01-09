<?php 

require_once("../ased-includes/header.php");

 //Connect to the database
require_once("../ased-includes/connect.php");

echo CONTENT_WRAPPER_START;

        $query = 'select * from users';		//make sql query
        $result = mysqli_query($dbConnection, $query);
        $row = mysqli_fetch_assoc($result);
        
        if($row):
        
            echo '<section class="row" >';
            
            //Print All users as Blocks
            do {
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
        
            } while ($row = mysqli_fetch_array($result));
            
                echo "</section>";
        endif; 

echo CONTENT_WRAPPER_END;

require_once("../ased-includes/footer.php");