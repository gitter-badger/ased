<?php 

require_once("../ased-includes/header.php");

    echo CONTENT_WRAPPER_START;
?>

<div class="registerForm">
    <div class="registerFormTitle"> <h3 font="white"> Register</h3> </div>
    

    <form name="form1" method='POST' action="register_user.php">
        <div>
            <input class="registerForm" type="text" name="firstname" id="lastname" placeholder="First Name*" />
        </div>   

        <div>
            <input class="registerForm" type="text" name="lastname" id="lastname" placeholder="Last Name*"/>
        </div> 
        
        <div>
            <input class="registerForm" type="text" name="skills" id="email" placeholder="List your Skills (Seperated By Comma)*"/>
        </div>  

        <div>
            <input class="registerForm" type="text" name="profession" id="email" placeholder="Profession/Specialisation  i.e Data Analyst, Accountant "/>
        </div>          

        <div>
            <input class="registerForm" type="text" name="qualifications" id="email" placeholder="Qualifications (Seperated By Comma)*"/>
        </div>
        
        <div>
            <select name="Province">
            <option value="1">Eastern Cape</option>   
            <option value="2">Gauteng </option>
            <option value="3">KwaZulu Natal</option>
            <option value="4">Limpopo</option>
            <option value="5">Mpumalanga</option>
            <option value="6">North West</option>
            <option value="7">Northern Cape</option>
            <option value="8">Orange Free State</option>
            <option value="9">Western Cape</option>s        
            </select>       
        </div>          
 
        <div>
        <input class="registerForm" type="text" name="City" id="email" placeholder="City"/>
        </div>   
        
        <div>
        <input class="registerForm" type="text" name="email" id="email" placeholder="myname@gmail.com*"/>
        </div>
        
        <div>
        <input class="registerFormPwd" onchange="ValidateRegistrationForm(this)" type="password" name="password1" id="password1" placeholder="Password"/>
        </div>
        
        <div>
        <input class="registerFormPwd" type="password" name="password2" id="password2" placeholder="Confirm Passwork"/>  
        </div>
        
        <div>
        <button id="registerFormButton" type="submit" >Submit</button>
        </div>
        
    </form>
</div>

<?php

    echo CONTENT_WRAPPER_END;

require_once("../ased-includes/footer.php");