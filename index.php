<?php
include "db_conn.php";
?>
<!DOCTYPE html> 
<html> 
<head> 
<title>Spin Master Club Table Tennis (SMCTT) </title> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style> 
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif} 
</style> 

 <!-- Bootstrap --> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head> 
<body class="w3-light-grey w3-content" style="max-width:1600px"> 


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>SPIN MASTER CLUB</b></h4>
    <p class="w3-text-black">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-black"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT SMC</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
	<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 
	<a href="#club collaboration" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CLUB COLLABORATION</a>
	<a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-black"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  
  </div>
 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>WELCOME TO SPIN MASTER CLUB</b></h1>
     

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
    <p align="center"><img src="photo/logo2.png" alt="Me" style="width:200%"></p>
    </div>
    
 

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Spin Master Club</b></h4>
    <p>
Welcome to the Spin Masters Club, where the thrilling fusion of precision and passion awaits! Within our dynamic haven, the resounding click-clack of paddles and the swish of the ball create a symphony of table tennis excellence. Whether you're a seasoned pro or a newcomer to the spin, our top-tier facilities beckon you into an arena where strategic brilliance meets the joy of a well-executed shot. Our diverse community is a melting pot of talent, fostering camaraderie and shared enthusiasm for the game. Guided by our seasoned coaches, embark on a journey of skill refinement and witness your abilities evolve. Beyond the strategic duels, Spin Masters Club is a place where fun takes center stage, and every rally is a story waiting to unfold. Join us for a smashing good time filled with camaraderie, skill-building, and, most importantly, a whole lot of fun on the table tennis court! </p>
    <hr>
    
	<!-- Committee -->
<div class="w3-container w3-padding-64 w3-center" id="committee">
<h2>OUR COMMITTEE</h2>
<p>Meet the members :</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/president.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmad Baihaqi</h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/vice.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muhammad Aqil</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/secretary.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Lisa</h3>
  <p>Secretary</p>
</div>

<div class="w3-quarter">
  <img src="photo/treasurer.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muhd Haziq</h3>
  <p>treasurer</p>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/coaching.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Timo Boll</h3>
  <p>Coaching and Development</p>
</div>

<div class="w3-quarter">
  <img src="photo/facilities.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Cristiano Ronaldo</h3>
  <p>Training Coordinator</p>
</div>

<div class="w3-quarter">
  <img src="photo/coordinator.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ma Liong</h3>
  <p>Coaching Coordinator</p>
</div>

<div class="w3-quarter">
  <img src="photo/event.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Maisarah</h3>
  <p>Events Coordinator</p>
</div>

<div class="w3-quarter">
  <img src="photo/facilities2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Don Lee</h3>
  <p>Facilities Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/medical.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nadia Brion</h3>
  <p>Medical</p>
</div>

<div class="w3-quarter">
  <img src="photo/liaison.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muhd Zulhakimi</h3>
  <p>Intramural Sports Liaison</p>
</div>

<div class="w3-quarter">
  <img src="photo/alumni.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muhd Said</h3>
  <p>Alumni Relations Coordinator</p>
</div>

<div class="w3-row"><br>

<hr>

</div>
</div>
	
	    <!-- Membership -->

    <h4><b>Spin Master Club</h4></b>
   
	 <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	<p id="membership"  align="center"><h3>Membership form for SMC  2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    </p>
    <hr>
	
	    <!-- Activity -->
  <div id="activity" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Activities form for Spin Master Club (SMC) </h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
 
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <hr>
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
    
	  <!-- club collaboration -->	
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
	 
    ?>
	<p id="club collaboration" align="center"><h3>Club form for Spin Master Club (SMC) </h3></p>
    <a href="add_club.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
            <td>
         
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
  
  <hr>
  
  <div class="w3-container w3-padding-64 w3-center" id="committee">
<h2>OUR ACHIEVEMENT</h2>
<p></p>

  <!-- Achievement-->
  <div id="achievement" class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/scholar.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Individual Scholar-Athlete Awards</b></p>
        <p>Scholar-athlete awards at the collegiate level recognize exceptional performance in both classroom and table tennis, recognizing students who contribute to their university's team's success and academic achievements. These honors emphasize the importance of balancing academic and athletic pursuits.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/achievement1.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Intercollegiate Championships</b></p>
        <p> University teams excel in intercollegiate table tennis championships, showcasing their skills and representing their institution with pride. These championships bring recognition to the university and the table tennis program, attracting attention from students, faculty, and the community..</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/award.jpeg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Recognition and Awards</b></p>
        <p>Receiving recognition or awards from the university or student organizations for outstanding contributions to campus life, sportsmanship, or community service can be a prestigious achievement for the club.</p>
      </div>
    </div>
  </div>
  
  <hr>
  
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Contact Us for Spin Master Club (SMC) </h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
       
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Chicago, US</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

 

</body>
</html>
