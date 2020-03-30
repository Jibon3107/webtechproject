<!DOCTYPE html>
<html>
  <head>
    <title>Home User</title>
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
    <li><a href="#bookticket"><i class="fas fa-calendar-week"></i>Book Ticket</a></li>
    <li><a href="#about"><i class="far fa-question-circle"></i>About</a></li>
    <li><a href="#contact"><i class="far fa-envelope"></i>Contact</a></li>
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
        <h4 style="margin-top: 250px;">Welcome <br> User</h4>
     </div>
     <div id="bookticket">
      <table style="margin-top: 130px;" cellspacing= 25px;>
        <tr>
        <td>
       <h1 style="margin-left: 100px;color: yellow;letter-spacing: 5px;">Movie</h1>
        <div class="select"  style="margin-left: 220px;margin-top: -40px;">
            <select id="movie" required>
             <option value="">Select Movie</option>
             <option value="Guns Akimbo">Guns Akimbo</option>
             <option value="Jumanji">Jumanji</option>
             <option value="Sonic">Sonic</option>
             <option value="The Call of The Wild">The Call of The Wild</option>
             <option value="Birds of Prey">Birds of Prey</option>
         </select>
        </div>
        </td>
        <td>
        <div class="date">
        <label for="date" style="margin-left:50px;font-family:'Mukta'; font-size:30px;color: yellow;letter-spacing: 5px;">Date</label>
        <input id="date" style="margin-left: 20px;" type="date" name="date" required>
        </div>
         </td>
          </tr>
          <tr>
              <td>
                  <h1 style="margin-left: 100px;color: yellow;letter-spacing: 5px;">Time</h1>
                  <div class="select"   style="margin-left: 220px;margin-top: -40px;">
                    <select id="time" required >
                     <option value="">Select showtime</option>
                     <option value="11am">11am</option>
                     <option value="3am">3am</option>
                     <option value="6am">6am</option>
                     <option value="9am">9am</option>
                     </select>
                  </div>
              </td>
              <td>
                <h1 style="margin-left: 50px;color: yellow;letter-spacing: 5px;">Seats</h1>
                <div class="select"   style="margin-left: 155px;margin-top: -40px;">
            <select id="seats" required>
             <option value="">Select No of seats(Max-5)</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
         </select>
        </div>
              </td>
          </tr>
          <tr>
                <td>
                
>                <label class="seattype" style="float: right;">
                  <input type="radio" name="type" value="vip" required> &nbsp VIP
                </label></td>
                <td>
                <label class="seattype">
                  <input type="radio" name="type" value="nonvip" required>&nbsp Non-VIP
                </label></td>
          </tr>
         </table>
              <table id="seatsBlock">
                  <tr>
                    <td colspan="20"><div class="screen" style="margin-left: 300px;">SCREEN</div></td>
                    <td rowspan="20">
                      <br><br><br><br><br><div class="smallBox greenBox"><span style="color: yellow; margin-left: 300px;">Selected Seat</span></div> <br>
                        <div class="smallBox redBox"><span style="color: yellow; margin-left: 300px;margin-right: 20px;">Reserved Seat</span></div> <br>
                        <div class="smallBox emptyBox"><span style="color: yellow; margin-left: 300px;margin-right: 20px;">Empty Seat</span></div>
                    </td>
                  </tr>
                         <tr id="seatA">
                            <td><input type="checkbox" id="1" class="seats" value="A1"></td>
                            <td><input type="checkbox" id="2" class="seats" value="A2"></td>
                            <td><input type="checkbox" id="3" class="seats" value="A3"></td>
                            <td><input type="checkbox" id="4" class="seats" value="A4"></td>
                            <td><input type="checkbox" id="5" class="seats" value="A5"></td>
                         </tr>
                          <tr id="seatB">
                            <td><input type="checkbox" id="6" class="seats" value="B1"></td>
                            <td><input type="checkbox" id="7" class="seats" value="B2"></td>
                            <td><input type="checkbox" id="8" class="seats" value="B3"></td>
                            <td><input type="checkbox" id="9" class="seats" value="B4"></td>
                            <td><input type="checkbox" id="10" class="seats" value="B5"></td>
                          </tr>
                          <tr id="seatC">
                            <td><input type="checkbox" id="11" class="seats" value="C1"></td>
                            <td><input type="checkbox" id="12" class="seats" value="C2"></td>
                            <td><input type="checkbox" id="13" class="seats" value="C3"></td>
                            <td><input type="checkbox" id="14" class="seats" value="C4"></td>
                            <td><input type="checkbox" id="15" class="seats" value="C5"></td>
                        </tr>
                    </table> 
                    <input type="submit" id="makepayment" name="submit" value="Make Payment"> 
                 </div>
                 <div id="about">
                        <p style="margin-top: 280px; margin-left: 150px; margin-right: 150px; align=center">What we do is make people happy, but who we are is a small team of curious people. Curious about your happiness, what makes you special, what you’re experts in. We want to know the what, the why, the how–pick your brain and turn the findings into happiness.<br><br>
                        We’ve spent the past five years learning about movies and happiness, new and old, local and abroad. Our passion is to take what we earn from you happiness and turn that into our goal that can accomplish anything.</p>           
     </div>
     <div id="contact">
         <h4><div class="card">
           <br><br>
             <h1><i class="far fa-envelope w3-text-teal" style="font-size:60px"></i></h1>
             <br><br>
             <hr color="black" style="width: 100%">
             <br><br><br><br>
             <table style="width:100%; font-size:17px; text-align: left;letter-spacing: 2px;margin-left: 20px;" cellspacing="12">
                 <tr>
                     <tH>E-mail:</tH>                    
                     <td>Info.mclub.com</td>                 
                 </tr>
                 <tr>
                     <tH>Phone:</tH>
                     <td>+01800000000</td>
                 </tr>
                 <tr>
                     <tH>Location:</tH>
                     <td>Dhaka Bangladesh</td>
                 </tr>
                  <tr>
                     <tH>Facebook:</tH>
                     <td>facebook.com/movieclub</td>
                 </tr>
                  <tr>
                     <tH>LinkedIn:</tH>
                     <td>Movie Club</td>
                 </tr>
             </table>
            </div>
        </h4>
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
                <tr>
             <input type="button" id="btneditpass" name="update" value="Update">
             </tr>            
            </div>
        </h4>
     </div>
     </form>
 </section>

  </body>
</html>
