<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Recent News</title>
    <!--- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="./style.css">
    <!--- ICONSCOUT STYLESHEET-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--- GOOGLE FONT (POPPINS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <!--- GOOGLE FONT (DM SANS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
    
<body>
<!----------------------------------- SIDE NAV ----------------------------------------------------->
<div class="sidenav">
    <div class="img_sideNav"><img class="logo" src="Images/Logo.svg" class="logo"></div>
    <a href="Admin_UserProfile.php"  class="selected">People of Aleph Profile</a>
    <a href="Admin_RecentNews.php">Recent News</a>
    <a href="Admin_WFOSchedule.php">WFO Schedule</a>
    <a href="Admin_Project.php">Projects</a>
    <a href="Admin_Department.php">Departments</a>
    <a href="Admin_FAQ.php">FAQ</a>
    <hr>
    <a href="Admin_Account.php">Account</a>
    <a href="Index.php">Log Out</a>
</div>
    
<!------------------------------- CONTENT ------------------------------------------------------------>
<div class="main">
    <!----------------------------------- Title ------------------------------------------------------>
    <div class="main_title">
        <h3>People of Aleph Profile</h3>
        <button class="btn_PrimarySmall"><a href="Admin_UPNew.php" style="color: white">Add New</a></button>
    </div>
    
    <!----------------------------------- Cards ------------------------------------------------------>
    
    <div class="search_profile">
        <input type="text" placeholder="Search name...">
        
            <div class="custom-select" style="width:200px;">
              <select>
                <option value="0">Department</option>
                <option value="1">Department</option>
                <option value="2">Project 1</option>
                <option value="3">Project 2</option>
                <option value="4">Project 3</option>
                <option value="5">Project 4</option>
              </select>
            </div>
            
        </div>


    
        <script type="text/javascript" src="./js/main.js"></script>
        
    <div class="projects_profile">
        <a href="Admin_UPDetails-1.php">
        <div class="cardProfile">
            <img class="avatar3" src="Images/Avatar.png">
            <div>
                <p><b>Alya Dhia Zahra</b></p>
                <p>ABC/134/456</p>
                <p>Creative</p>
            </div> 
        </div>
        </a>
        
        <a href="Admin_UPDetails-1.php">
        <div class="cardProfile">
            <img class="avatar3" src="Images/Avatar.png">
            <div>
                <p><b>Alya Dhia Zahra</b></p>
                <p>ABC/134/456</p>
                <p>Creative</p>
            </div> 
        </div>
        </a>
        
        <a href="Admin_UPDetails-1.php">
        <div class="cardProfile">
            <img class="avatar3" src="Images/Avatar.png">
            <div>
                <p><b>Alya Dhia Zahra</b></p>
                <p>ABC/134/456</p>
                <p>Creative</p>
            </div> 
        </div>
        </a>
        
        <a href="Admin_UPDetails-1.php">
        <div class="cardProfile">
            <img class="avatar3" src="Images/Avatar.png">
            <div>
                <p><b>Alya Dhia Zahra</b></p>
                <p>ABC/134/456</p>
                <p>Creative</p>
            </div> 
        </div>
        </a>
    </div>
</div>

    
</body>
</html>