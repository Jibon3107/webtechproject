<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto|Trade+Winds|Rubik&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php
                error_reporting(0);
                $er_fname = "";
                $fname = "";
                $er_lname = "";
                $lname = "";
                $er_email = "";
                $email = "";
                $er_phone = "";
                $phone = "";
                $er_password = "";
                $password = "";
                $er_conpassword = "";
                $compassword = "";
                $boolean = false;
    
                if(isset($_POST['submit']))
                {                      
                       if (!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"]))
                        {
                            $er_fname = "letters and white space allowed";
                            $boolean = false;
                        }
                        else
                        {
                            $fname =validate_input($_POST["fname"]);
                            $boolean = true;
                        }

                        
                        if (!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"]))
                        {
                            $er_lname = "letters and white space allowed";
                            $boolean = false;
                        }
                        else
                        {
                            $lname = validate_input($_POST["lname"]);
                            $boolean = true;
                        }
                        
                        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                        {
                          $er_email = "Invalid email format";
                          $boolean = false;
                        }
                        else
                        {
                            $email = validate_input($_POST["email"]);
                            $boolean = true;
                        }
                        
                        if(!preg_match('/^[0]{1}[1]{1}[1-9]{1}[0-9]{8}$/', $_POST["phone"]))
                        {
                             $er_phone = "Invalid Phone";
                             $boolean = false;
                        }
                        else
                        {
                            $phone = validate_input($_POST["phone"]);
                            $boolean = true;
                        }
                        
                        $len = strlength($_POST["password"]);
                            
                        if ($len)
                        {
                            $er_password = $len;
                            $boolean = true;
                        }
                        else
                        {
                            $password = validate_input($_POST["password"]);
                            $boolean = true;
                        }
                    
                        if($_POST["confirmpassword"] != $password)
                        {
                            $er_conpassword = "Password did't match!";
                            $boolean = false;
                        }
                    }
    
			   function validate_input($data) 
               {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
               }
               
               function strlength($str)
               {
                   $ln = strlen($str);
                    
                   if($ln >12)
                   {
                       return "Password should be less then 12 characters!";
                   }
                   elseif($ln<6 && $ln >=1)
                   {
                       return "Password should be greater than 5 characters!";
                   }
                   retturn;
               }
    
            /*databas*/
	?>   
    <header class="showcase">
            <input type="checkbox" id="check">
              <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
              </label>
              <label class="logo">Movie Club</label>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#signup">Sign up</a></li>
              </ul>
    </header>
    <section>
           <form action="#" method="post">
            <div id="signup">
                <h1>Sign Up here</h1>
                <div class="textbox">
                    <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_fname;?></span>
                <div class="textbox">
                    <input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_lname;?></span>
                 <div class="textbox">
                    <input type="text" name="email" value="<?php echo $email;?>" placeholder="E-mail" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_email;?></span>
                <div class="textbox">
                    <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone Number" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_phone;?></span>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_password;?></span>
                <div class="textbox">
                    <input type="password" name="confirmpassword"  placeholder="Confirm Password" required>
                </div>
                <span id="span1" style="color: white;"><?php echo $er_conpassword;?></span>
                <br>
                <div class="checkbox">
                    <input type="checkbox" name="acceptcondition" value="accepted" required> &nbsp <span style="font-size: 12px;">I accept the terms and conditions</span>
                </div>
                    <input class="btn" type="submit" name="submit" value="Sign Up">
                    <br><br>
                    <h5 align= "center">Already have an account?</h5>
                    <input class="btn" type="button" name="login" value="Sign In" onclick="window.location.href = 'login.php'">
             </div>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
             <div class="about">   
                 <h1 style="font-size: 30px; text-shadow: 1px 2px 5px yellow; color: white"> &nbsp &nbsp &nbsp About</h1>        
                 <div id="about">
                        <br><br> 
                        <p align="center">What we do is make people happy, but who we are is a small team of curious people. Curious about your happiness, what makes you special, what you’re experts in. We want to know the what, the why, the how–pick your brain and turn the findings into happiness.<br>
                        We’ve spent the past five years learning about movies and happiness, new and old, local and abroad. Our passion is to take what we earn from you happiness and turn that into our goal that can accomplish anything.</p>
                 </div>	
            </div>
                <br><br><br><br><br><br><br>
               <h1 style="font-size: 30px; text-shadow: 1px 2px 5px yellow; color: white">&nbsp &nbsp &nbsp Contact us</h1>
                    <br><br><br>
                  
                <div id="contact">                 
                      <div class="card">
                        <i class="card-icon far fa-envelope"></i>
                        <p>info@mclub.com</p>
                      </div>

                      <div class="card">
                        <i class="card-icon fas fa-phone"></i>
                        <p>+01800000000</p>
                      </div>

                      <div class="card">
                        <i class="card-icon fas fa-map-marker-alt"></i>
                        <p>Dhaka,Bangladesh</p>
                      </div>
        </div>
        <br><br><br><br><br><br><h6 style="text-align: center; color: yellow; letter-spacing: 2px">© 2020 Webtech sec: A</h6><br><br><br><br><br>
        </form>
     </section>
</body>
</html>