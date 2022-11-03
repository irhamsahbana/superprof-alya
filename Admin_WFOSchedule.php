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
    
<!---------------------------------- SIDE NAV ------------------------------------------------------->
<div class="sidenav">
    <div class="img_sideNav"><img class="logo" src="Images/Logo.svg" class="logo"></div>
    <a href="Admin_UserProfile.php">People of Aleph Profile</a>
    <a href="Admin_RecentNews.php">Recent News</a>
    <a href="Admin_WFOSchedule.php" class="selected">WFO Schedule</a>
    <a href="Admin_Project.php">Projects</a>
    <a href="Admin_Department.php">Departments</a>
    <a href="Admin_FAQ.php">FAQ</a>
    <hr>
    <a href="Admin_Account.php">Account</a>
    <a href="Index.php">Log Out</a>
</div>
    
<!---------------------------------- CONTENT ------------------------------------------------------->
<div class="main">
     <div class="main_title">
        <h3>WFO Schedule</h3>
        <button class="btn_PrimarySmall" id="openModal">Add New</button>
    </div>
</div>
    
    
<!---------------------------------- CALENDAR ------------------------------------------------------->


<!----------------------------------- MODAL (EDIT) ------------------------------------------------> 

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
    <div class="modal-content_short">
    <form name="PopUp" action="">

                    <div class="div2_Popup">
                    <h4>Project Team<span style="color:var(--color-red)">*</span></h4>
                    <select name="ProjectList" id="ProjectList">
                        <option value="1">Project 1</option>
                        <option value="2">Project 1</option>
                        <option value="3">Project 1</option>
                        <option value="4">Project 1</option>
                    </select>
                    </div>

                    <div class="div2_Popup">
                    <h4>Team Member<span style="color:var(--color-red)">*</span></h4>
                    <input type="number" placeholder="Ex: 5">
                    </div>
                    
                    <div class="div2_Popup">
                    <h4>Work Location<span style="color:var(--color-red)">*</span></h4>
                    <select name="WorkLoc" id="WorkLoc">
                        <option value="1">Aleph Studio</option>
                        <option value="2">Client Office</option>
                    </select>
                    </div>
                    
                    <hr>
                    
                    <div class="action_button2">
                        <button class="btn_SecondarySmall">Cancel</button>
                        <button class="btn_PrimarySmall">Save</button>
                    </div>
                </form>
    
    </div>
    </div>
    
    <script type="text/javascript" src="./js/main.js"></script>
    
</body>
    
    
</html>