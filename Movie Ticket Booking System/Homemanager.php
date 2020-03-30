<!DOCTYPE html>
<html>
  <head>
    <title>Home Manager</title>
    <link rel="stylesheet" href="styleuser.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto|Trade+Winds|Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body style="overflow:hidden">
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
    <li><a href="#movie"><i class="fas fa-ticket-alt"></i>Movies</a>
        <ul>
            <li><a href="#managemovienowplaying"><i class="fas fa-calendar-plus"></i>Now playing</a></li><li><a href="#managemoviecomingsoon"><i class="fas fa-calendar-plus"></i>Coming soon</a></li>
            <li><a href="#moviedetails"><i class="fas fa-ticket-alt"></i>Movie Details</a></li>
        </ul>
    </li>
      <li><a href="#createshowtime"><i class="fas fa-calendar-plus"></i>Create Showtime</a></li>
    <li><a href="#customerdetails"><i class="fas fa-users"></i>Customer Details</a></li>
    <li><a href="#profile"><i class="fas fa-id-card"></i>Profile</a></li>
    <li><a href="#settings"><i class="fas fa-cogs"></i>Settings</a></li>
  </ul>
  <br><br><br><br>
  <ul id="ul2">
      <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
  </ul>
</div>   
 <section>
    <form>
     <div id="home">
        <h4 style="margin-top: 250px;">Welcome <br> Manager</h4>
     </div>
     <div id="movie">
         <div id="managemovienowplaying">
             <table id="managemovienowplayingtable" style="margin-top: 120px; margin-left: 150px;" cellspacing=10px;>
                   <tr><td><h1 style="color: white;margin-top: 20px; margin-bottom: 35px;margin-left: 30px;">Movies(Now Playing)</h1></td></tr>
                    
                     <tr>
                       <td>
                        <div class="searchbox">
                            <input style = "padding: 10px;font-size: 17px;border: none;float: left;width: 165%;color: black;background-color: #FEE12B;"type="text" id="textbox2" placeholder="Search using Movie name" name="searchmovienowplaying">
                        </div>
                       </td>
                       <td>
                            <input style="width: 50%;padding: 10px;font-size: 17px;cursor: pointer;" type="button" id="findmovienowplaying" name="findmovienowplaying" value="Find Movie">
                        </td>
                   </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr>
                     <tr>
                      <TD><div class="file">
                        <input type="file" id="movieposternowplaying" name="movieposternowplaying">
                        </div>
                        </TD>
                       
                    </tr> 
                <tr>
                    <td>
                        <div class="textbox1">
                    <input type="text" name="moviename" placeholder="Movie Name">
                </div>
                    </td>
                    <td>
                        <input type="button" id="addmovienowplaying" name="addmovienowplaying" value="Add Movie">
                    </td>
                </tr>  
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="director" placeholder="Movie Director">
                </div>
                    </td>
                    <td>
                        <input type="button" id="updatemovienowplaying" name="updatemovienowplaying" value="Update Movie">
                    </td>
                </tr>
               <tr>
                   <td>
                       <div class="textbox1">
                    <input type="text" name="genre" placeholder="Genre">
                </div>
                   </td>
                    <td>
                        <input type="button" id="deletemovienowplaying" name="deletemovienowplaying" value="Delete Movie">
                    </td>
               </tr>
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="Duration" placeholder="Duration">
                </div>
                    </td>
                 </tr>    
               </table>
         </div>
         <div id="managemoviecomingsoon">
             <table id="managemoviecomingssontable" style="margin-top: 120px; margin-left: 150px;" cellspacing=10px;>
                   <tr><td><h1 style="color: white;margin-top: 20px; margin-bottom: 35px;margin-left: 30px;">Movies(Coming soon)</h1></td></tr>
                   
                   <tr>
                       <td>
                        <div class="searchbox">
                            <input style = "padding: 10px;font-size: 17px;border: none;float: left;width: 165%;color: black;background-color: #FEE12B;"type="text" id="textbox2" placeholder="Search using Movie name" name="searchmoviecomingsoon">
                        </div>
                       </td>
                       <td>
                            <input style="width: 50%;padding: 10px;font-size: 17px;cursor: pointer;" type="button" id="findmoviecomingsoon" name="findvoviecomingsoon" value="Find Movie">
                        </td>
                   </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr>
                   <tr>
                      <TD><div class="file">
                        <input type="file" id="moviepostercomingsoon" name="movieosternowplaying">
                        </div>
                        </TD>               
                    </tr>  
                <tr>
                    <td>
                        <div class="textbox1">
                    <input type="text" name="moviename" placeholder="Movie Name">
                </div>
                    </td>
                    <td>
                        <input type="button" id="addmoviecomingsoon" name="addmoviecomingsoon" value="Add Movie">
                    </td>
                </tr>  
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="director" placeholder="Movie Director">
                </div>
                    </td>
                    <td>
                        <input type="button" id="updatemoviecomingsoon" name="updatemoviecomingsoon" value="Update Movie">
                    </td>
                </tr>
               <tr>
                   <td>
                       <div class="textbox1">
                    <input type="text" name="genre" placeholder="Genre">
                </div>
                   </td>
                   <td>
                        <input type="button" id="deletemoviecomingsoon" name="deletemoviecomingsoon" value="Delete Movie">
                    </td>
               </tr>
                <tr>
                    <td>
                         <div class="textbox1">
                    <input type="text" name="Duration" placeholder="Duration">
                </div>
                    </td>
                 </tr>   
               </table>
         </div>
         <div id="moviedetails">   
             <table id="moviedetailstablenowplaying"  align="center" border="1px" width="1100px" height="200" style="margin-left:60px;margin-top: 150px">
                <tr>
                    <td style="border: none;"><h1><span style="color: yellow; font-size: 30px; margin-left: 300px; margin-top: 400px;">Movie(Now Playing)</span></h1></td>
                </tr>
                 
			    <tr align="center" bgcolor="#FEE12B">
			    <td>Movie Pic</td>
				<td>Movie Name</td>
				<td>Director</td>
				<td>Genre</td>				
				<td>Duration</td>
				
				</tr> 
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>Pic1</td>
				<td>Guns Akimbo</td>
				<td> Jason Lei Howden</td>
				<td>Thriller</td>				
				<td>95</td>
	
				
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>Pic2</td>
				<td>Jumanji</td>
				<td>Jake Kasdan</td>
				<td>Adventure</td>
				<td>123</td>
				
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>Pic3</td>
				<td>Sonic</td>
				<td>Jeff Fowler</td>
				<td>Comedic</td>			
				<td>100</td>
				</tr>
				</table>
                <table id="moviedetailstablecomingsoon"  align="center" border="1px" width="1100px" height="200" style="margin-left:60px;margin-top: 150px">
                        <tr>
                            <td style="border: none;"><h1><span style="color: yellow; font-size: 30px; margin-left: 300px; margin-top: 400px;">Movie(Coming Soon)</span></h1></td>
                        </tr>

                        <tr align="center" bgcolor="#FEE12B">
                        <td>Movie Pic</td>
                        <td>Movie Name</td>
                        <td>Director</td>
                        <td>Genre</td>				
                        <td>Duration</td>

                        </tr> 

                        <tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
                        <td>Pic1</td>
                        <td>KGF</td>
                        <td> Prashanth Neel</td>
                        <td>Action</td>				
                        <td> </td>



                        <tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
                        <td>Pic2</td>
                        <td>Underwater</td>
                        <td>William Eubank</td>
                        <td>Adventure, Action</td>
                        <td></td>


                        <tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
                        <td>Pic3</td>
                        <td>Black Widow</td>
                        <td>Cate Shortland</td>
                        <td>Action</td>			
                        <td></td>
                        </tr>
                        </table>
         </div>
     </div>
      <div id="createshowtime">
                <h1>Show Time</h1>
                <table id="showtime" style="margin-top: 130px;" cellspacing= 20px;>
                   <tr>
                       <td>
                           <label for="text" style="float: right; font-family: Mukta;font-size: 25px; color: yellow; margin-left: 200px;letter-spacing: 5px;">Movie Name:</label>
                       </td>
                       <td>
                           <div class="textbox1">
                            <input type="text" name="moviename" placeholder="Movie Name" required>
                            </div>
                       </td>
                   </tr>
                    <tr>
                        <td>
                            <label for="date" style="float: right; margin-left:250px;font-family:'Mukta'; font-size:25px;color: yellow;letter-spacing: 5px;">Date:</label>
                        </td>
                        <td>
                            <div class="date">                       
                                <input id="date" style="margin-left: 20px;" type="date" name="date" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text" style="float: right; font-family: Mukta;font-size: 25px; color: yellow; margin-left: 200px;letter-spacing: 5px;">Time:</label>
                        </td>
                        <td>
                            <div class="textbox1">
                                <input type="text" name="time" placeholder="Time" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text" style="float: right; font-family: Mukta;font-size: 25px; color: yellow; margin-left: 200px;letter-spacing: 5px;">Total Seats:</label>
                        </td>
                        <td>
                            <div class="textbox1">
                            <input type="text" name="totalseats" placeholder="Total seats" required>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class="seattype" style="float: right;">
                          <input type="radio" name="type" value="vip" required> &nbsp VIP
                        </label></td>
                        <td>
                        <label class="seattype">
                          <input type="radio" name="type" value="nonvip" required>&nbsp Non-VIP
                        </label></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text" style="float: right; font-family: Mukta;font-size: 25px; color: yellow; margin-left: 200px;letter-spacing: 5px;">Ticket Price:</label>
                        </td>
                        <td>
                            <div class="textbox1">
                            <input type="text" name="price" placeholder="Ticket price" required>
                        </div>
                        </td>
                    </tr>
                </table>
                <input type="submit" id="createshow" name="createshow" value="Create Show">
     </div>
     <div id="customerdetails">
         <table id="customerdetailstable"  align="center" border="1px" width="1100px" height="200" style="margin-left:60px;margin-top: 150px">
                <tr>
                    <td style="border: none;"><h1><span style="color: yellow; font-size: 30px; margin-left: 300px; margin-top: 400px;">Customers</span></h1></td>
                </tr>
                 
			    <tr align="center" bgcolor="#FEE12B">
			    <td>First name</td>
			    <td>Last name</td>
			    <td>Phone Number</td>
				<td>Movie Name</td>
				<td>Date</td>
				<td>Time</td>
				<td>Type</td>
				<td>Seats</td>	
				<td>Price</td>
				</tr> 
				
				<tr align="center" style="color: yellow;font-family: Mukta;background-color:black;border-color: white;">
				<td>Nihal</td>
				<td>Ahmed</td>
				<td>+8801825252525</td>
				<td>Jumanji</td>
				<td>03/07/2020</td>
				<td>3 Pm</td>
				<td>Vip</td>
				<td>4</td>
				<td>2000</td>				
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
