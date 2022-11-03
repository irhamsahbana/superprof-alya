<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleph Connect - Dashboard</title>
    <!--- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="style.css">
    <!--- ICONSCOUT STYLESHEET-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--- GOOGLE FONT (DM SANS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
    
<body>
<!----------------------------------- NAV ----------------------------------------------------->
    <nav>
        <div class="container nav_container">
            <a href="Dashboard.php"><img class="logo" src="Images/Logo.svg" class="logo"></a>
            <ul class="nav_items">
                <li><a href="Search.php">People of Aleph</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="Images/Avatar.png">
                    </div>
                    <ul>
                        <li><a href="Profile-1.php">Profile</a></li>
                        <li><a href="AccountSettings.php">Account Settings</a></li>
                        <li><a href="Index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        
        </div>
    </nav>

<!----------------------------------- KV ----------------------------------------------------->
    
<div id="content-wrap">

    <div class="KV_Dashboard">
        <div class="Big_Title">
            <h1>stay connected with each other and keep our bond strong. </h1>
            <p>Connect with your fellow Alephians and dont miss anything about Aleph Indonesia</p>
        </div>

        <img src="Images/KV.png">
    </div>

<!----------------------------------- RECENT NEWS ----------------------------------------------------->

<div class="dashboard_content">

    
    <div class="dashboard-contentItems">
        <div class="dashboard-title">
            <h3>Recent News</h3>
            <p>Don’t miss the Aleph News! 📢</p>
        </div>
        
        <div class="dashboard-card">
            <div class="dashboard-cardItems">
                <small>Date created</small>
                <img src="Images/Avatar.png">
                <h4>News Title</h4>
                <p>3 Agustus (Rabu) & 4 Agustus (Kamis), kantor akan ditutup sementara untuk disinfektan ruangan.
5 Agustus (Jumat), kantor akan dibuka kembali.</p>
            </div>
            
            <div class="dashboard-cardItems">
                <small>Date created</small>
                <img src="Images/Avatar.png">
                <h4>News Title</h4>
                <p>3 Agustus (Rabu) & 4 Agustus (Kamis), kantor akan ditutup sementara untuk disinfektan ruangan.
5 Agustus (Jumat), kantor akan dibuka kembali.</p>
            </div>

            <div class="dashboard-cardItems">
                <small>Date created</small>
                <img src="Images/Avatar.png">
                <h4>News Title</h4>
                <p>3 Agustus (Rabu) & 4 Agustus (Kamis), kantor akan ditutup sementara untuk disinfektan ruangan.
5 Agustus (Jumat), kantor akan dibuka kembali.</p>
            </div>
        </div>
    
    </div>
    
    
    <!----------------------------------- WFO SCHEDULE ----------------------------------------------------->
    <div class="dashboard-contentItems">
        <div class="dashboard-title">
            <h3>December 2022 WFO Schedule</h3>
            <p>Let’s connect at the office 🤝</p>
        </div>
        
        <table style="width:100%">
          <tr>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Total Days</th>
            <th>Note</th>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </table>

    </div>
    <!----------------------------------- PROJECTS ----------------------------------------------------->
    <div class="dashboard-contentItems">
        <div class="dashboard-title">
            <h3>Past and On Going Projects</h3>
            <p>Projects handled by Aleph Indonesia 🎨 </p>
        </div>
        
        <div class="dashboard-project">
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
            
            <div class="dashboard-projectItems">
                <div class="project_logo">
                    <img src="Images/Project_logo.svg">
                </div>
                <small>(2019 - Present)</small>
                <button id="openModal"><p>View Details</p></button>
            </div>
        </div>
    </div>

<!------------------------------------------- OPEN PROJECT DETAILS ----------------------------------------------->

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
  <div class="modal-content_short">
    
      <div class="modal-content-addProject">
          <div class="modal-head">
            <h3>Project Name</h3>
            <span class="close">&times;</span>
          </div>
          
            <div class="project_details">
                <div class="dashboard-projectItems">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
                </div>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, tellus diam, rutrum diam consectetur faucibus gravida. Pretium integer maecenas ultricies sit. Suspendisse amet, cursus vel commodo. Vitae odio pulvinar augue et ultrices aliquam nec, amet erat.
                </p>
            </div>

            <hr>

            <a href="Search.php" style="width: 100%; font-weight: bold; text-align: center">View Team</a>
        </div>
      
  </div>  
</div>


    <!----------------------------------- DEPARTMENTS ----------------------------------------------------->
    <div class="dashboard-contentItems">
        <div class="dashboard-title">
            <h3>Departments in Aleph Indonesia</h3>
            <p>The brain behind Aleph 🙆‍♀️</p>
        </div>
        
        <div class="dashboard-card">
            <div class="dashboard-cardItems">
                <img src="Images/Avatar.png">
                <h4>Department Name</h4>
                <a>View Team</a>
            </div>
            
            <div class="dashboard-cardItems">
                <img src="Images/Avatar.png">
                <h4>Department Name</h4>
                <a>View Team</a>
            </div>
            
            <div class="dashboard-cardItems">
                <img src="Images/Avatar.png">
                <h4>Department Name</h4>
                <a>View Team</a>
            </div>
            
            <div class="dashboard-cardItems">
                <img src="Images/Avatar.png">
                <h4>Department Name</h4>
                <a>View Team</a>
            </div>
            
            <div class="dashboard-cardItems">
                <img src="Images/Avatar.png">
                <h4>Department Name</h4>
                <a>View Team</a>
            </div>
        </div>
    </div>  
</div>   
</div>    
    
<?php
include 'partials/footer.php';
?>