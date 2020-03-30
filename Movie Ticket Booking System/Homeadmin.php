<!DOCTYPE html>
<html>
  <head>
    <title>Home Admin</title>
    <link rel="stylesheet" href="styleuser.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto|Trade+Winds|Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body style="overflow:hidden">
   <?php
                error_reporting(0);
                $er_id = "";
                $id = "";
                $er_fname = "";
                $fname = "";
                $er_lname = "";
                $lname = "";
                $er_email = "";
                $email = "";
                $er_phone = "";
                $phone = "";
                $er_address = validate_input($_POST["address"]);
                $address = "";
                $er_salary = "";
                $salary = "";
                $boolean = false;
    
                if(isset($_POST['submit']))
                {        
                       if(!is_numeric($_POST["id"]))
                        {
                             $er_id = "Invalid id";
                             $boolean = false;
                        }
                        else
                        {
                            $id = validate_input($_POST["id"]);
                            $boolean = true;
                        }
                    
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
                    
                        if(!preg_match('/^[1-9]{1}[0-9]{3,5}$/', $_POST["salary"]))
                        {
                             $er_salary = "Invalid salry";
                             $boolean = false;
                        }
                        else
                        {
                            $salary = validate_input($_POST["salary"]);
                            $boolean = true;
                        }
                    }
    
			   function validate_input($data) 
               {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
               }
    
            /*databas*/
	?>   
   
    <header class="showcase">
              <label class="logo">Movie Club </label>
    </header>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn00"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header class="dashboard">Dashboard</header>
  <ul>
    <li><a href="#home"><i class="fas fa-qrcode"></i>Home</a></li>
    <li><a href="#employee"><i class="fas fa-users-cog"></i>Employee</a>
     <ul>
            <li><a href="#manageemployee"><i class="fas fa-calendar-plus"></i>Manage</a></li>
            <li><a href="#employeedetails"><i class="fas fa-users"></i>Employee Details</a></li>
    </ul>
    </li>
    <li><a href="#movieshowdetails"><i class="fas fa-ticket-alt"></i>Shows</a></li>
    <li><a href="#profile"><i class="fas fa-id-card"></i>Profile</a></li>
    <li><a href="#settings"><i class="fas fa-cogs"></i>Settings</a></li>
  </ul>
  <br><br><br><br>
  <ul id="ul2">
      <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
  </ul>
</div>   
 <section>
    <form method="post" action="#">
     <div id="home">
        <h4 style="margin-top: 250px;">Welcome <br> Admin</h4>
     </div>
     <div id="employee">
         <div id="manageemployee">
               <table id="manageemployeetable" style="margin-top: 120px; margin-left: 150px;">
                   <tr><td><h1 style="color: white;margin-top: 20px; margin-bottom: 35px;margin-left: 30px;">Employees</h1></td></tr>
                   <tr>
                       <td>
                        <div class="searchbox">
                            <input style = "padding: 10px;font-size: 17px;border: none;float: left;width: 173%;color: black;background-color: #FEE12B;"type="text" id="textbox2" placeholder="Search using Employee Id" name="search">
                        </div>
                       </td>
                       <td>
                            <input style="width: 50%;padding: 10px;font-size: 17px;cursor: pointer;" type="button" id="findemployee" name="find" value="Find Employee">
                        </td>
                   </tr>
                <tr></tr><tr></tr>
                   <tr>
                    <td>
                        <div class="textbox1">
                    <input type="text" name="id" value="<?php echo $id;?>"placeholder="Id" required>
                </div>
                    <span id="span1" style="color: white;"><?php echo $er_id;?></span>
                    </td>
                </tr>  
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name" required>
                </div>
                    <span id="span1" style="color: white;"><?php echo $er_fname;?></span>
                    </td>
                    <td>
                        <input type="submit" id="addemployee" name="submit" value="Add Employee">
                    </td>
                </tr>
               <tr>
                   <td>
                       <div class="textbox1">
                    <input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name" required>
                </div>
                  <span id="span1" style="color: white;"><?php echo $er_lname;?></span>
                   </td>
                   <td>
                        <input type="submit" id="updateemployee" name="submit" value="Update Employee">
                    </td>
               </tr>
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="email" value="<?php echo $email;?>" placeholder="E-mail" required>
                </div>
                   <span id="span1" style="color: white;"><?php echo $er_email;?></span>
                    </td>
                     <td>
                        <input type="submit" id="deleteemployee" name="delete" value="Delete Employee">
                    </td>
                </tr>
               
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone Number" required>
                </div> 
                   <span id="span1" style="color: white;"><?php echo $er_phone;?></span>
                    </td>
                </tr>
                   <tr>
                   <td>
                       <div class="radio1">
                    <ul>
                     <li  style="list-style:none;">
                     <input style="margin-left: 50px;" type="radio" name="gender" value="male" required>
                      <span style="color: yellow" >Male</span>
                     <input style="margin-left: 50px;" type="radio" name="gender" 
                     value="female"><span style="color: yellow">Female</span>
                     <input style="margin-left: 50px;" type="radio" name="gender" 
                     value="other"><span style="color: yellow">Others</span>
                     </li>
                </ul>
                </div>
                   </td>
               </tr>
                    <tr>
                        <td>
                            <div class="textbox1">
                    <input type="text" name="address" value="<?php echo $address;?>" placeholder="Address" required>
                </div>
                        </td>
                    </tr>     
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="salary" value="<?php echo $salary;?>" placeholder="Salary(TK)" required>
                </div>
                   <span id="span1" style="color: white;"><?php echo $er_salary;?></span>
                    </td>
                </tr> 
               </table>
               </div>
                
         <div id="employeedetails">
             <table id="employeedetailstable"  align="center" border="1px" width="1100px" height="200" style="margin-left:60px;margin-top: 150px">
                <tr>
                    <td style="border: none;"><h1><span style="color: yellow; font-size: 30px; margin-left: 300px; margin-top: 400px;">Employees</span></h1></td>
                </tr>
                 
			    <tr align="center" bgcolor="#FEE12B">
			    <td>Id</td>
			    <td>First name</td>
			    <td>Last name</td>
			    <td>E-mail</td>
			    <td>Phone Number</td>			
				<td>Gender</td>
				<td>Address</td>
				<td>Salary</td>		
				
				</tr> 
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>1122</td>
				<td>Nihal</td>
				<td>Ahmed</td>
				<td>nihal@email.com</td>
				<td>+8801825252525</td>
				<td>Male</td>
				<td>Mirpur 10,Dhaka</td>
				<td>10000</td>
				</table>
         </div>
     </div>
     <div id="movieshowdetails">
         <table id="movieshowdetailstable"  align="center" border="1px" width="1100px" height="200" style="margin-left:60px;margin-top: 150px">
                <tr>
                    <td style="border: none;"><h1><span style="color: yellow; font-size: 30px; margin-left: 300px; margin-top: 400px;">Movies show time</span></h1></td>
                </tr>
                 
			    <tr align="center" bgcolor="#FEE12B">
			    <td>Movie name</td>
			    <td>Date</td>
			    <td>Time</td>			
				<td>Type</td>
				<td>Total Seats</td>
				<td>price</td>				
				</tr> 
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>Bird of Prey</td>
				<td>03/07/2020</td>
				<td>11 Am</td>
				<td>Non-Vip</td>
				<td>80</td>
				<td>350</td>
				</table>

     </div>
     <div id="profile">
        <h4><div class="card">
           <br><br>
             <h1><i class="fas fa-id-card w3-text-teal" style="font-size:50px"></i></h1>
             <br><br>
             <hr color="black" style="width: 100%">
             <table style="width:100%; font-size:17px; text-align: left;letter-spacing: 2px;margin-left: 20px;">
                 <tr>
                     <tH>Name:</tH>                    
                     <td><div class="textbox"><input type="text" value="User" name="profilename" disabled></div></td>                 
                 </tr>
                 <br>
                 <tr>
                     <tH>E-mail:</tH>
                     <td><div class="textbox"><input type="text" value="example@movie.com" name="profileemail" disabled></div></td>
                 </tr>
                 <br>
                 <tr>
                     <tH>Phone:</tH>
                     <td><div class="textbox"><input type="text" value="01833320000" name="profilephone" disabled></div></td>
                 </tr>
             </table>
              <br><br>
             <input type="button" id="btnedit" name="edit" value="Edit">
            </div>
        </h4>
     </div>
     <div id="settings">
          <h4><div class="card">
           <br><br>
             <h1><i class="fas fa-cogs w3-text-teal" style="font-size:50px"></i></h1>
             <br><br>
             <hr color="black" style="width: 100%">
             <table style="width:100%; font-size:17px; text-align: left;letter-spacing: 2px;margin-left: 20px;">
                 <tr>
                     <tH style="font-size: 13px;">Current Password:</tH>                    
                     <td><div class="textbox"><input style="font-size: 13px;" type="text" placeholder="Current Password" name="currentpass"></div></td>                 
                 </tr>
                 <br>
                 <tr>
                     <tH style="font-size: 13px;">New Password:</tH>
                     <td><div class="textbox"><input style="font-size: 13px;" type="text" placeholder="New Password" name="newpass"></div></td>
                 </tr>
                 <br>
                 <tr>
                     <tH style="font-size: 13px;">Confirm Password:</tH>
                     <td><div class="textbox"><input style="font-size: 13px;" type="text" placeholder="Confirm Password" name="connfirmpass" ></div></td>
                 </tr>
             </table>
              <br><br><br>
             <input type="button" id="btneditpass" name="update" value="Update">
            </div>
        </h4>
     </div>
     </form>
 </section>
  </body>
</html>
