<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Projects</title>
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
    <a href="Admin_UserProfile.php">People of Aleph Profile</a>
    <a href="Admin_RecentNews.php">Recent News</a>
    <a href="Admin_WFOSchedule.php">WFO Schedule</a>
    <a href="Admin_Project.php" class="selected">Projects</a>
    <a href="Admin_Department.php">Departments</a>
    <a href="Admin_FAQ.php">FAQ</a>
    <hr>
    <a href="Admin_Account.php">Account</a>
    <a href="Index.php">Log Out</a>
</div>
    
<!------------------------------- CONTENT ------------------------------------------------------------>
<div class="main">
    <!--- Title --->
    <div class="main_title">
        <h3>Projects</h3>
        <button class="btn_PrimarySmall" id="openModal">Add New</button>
    </div>
    
<!--------------------------- TABLE ---------------------------------------------------------------->
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Project Description</th>
                    <th>Logo</th>
                    <th style="color:white;">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>The office will be closed!</td>
                    <td>24 August 2022</td>
                    <td>24 August 2022</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh sapien elit consequat urna leo, a lobortis diam. </td>
                    <td>Image</td>
                    <td>
                        <div class="action_button">
                            <button id="openModal" style="background: var(--color-bg)">
                                <i class="uil uil-pen" style="color:var(--color-4); font-size: 20px"></i>
                            </button>
                            
                            <div class="vl"></div>
                            
                            <button onclick="confirmDialog()" style="background: var(--color-bg)">
                                <i class="uil uil-trash" style="color:var(--color-4); font-size: 20px"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td>The office will be closed!</td>
                    <td>24 August 2022</td>
                    <td>24 August 2022</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh sapien elit consequat urna leo, a lobortis diam. </td>
                    <td>Image</td>
                    <td>
                        <div class="action_button">
                            <button id="openModal" style="background: var(--color-bg)">
                                <i class="uil uil-pen" style="color:var(--color-4); font-size: 20px"></i>
                            </button>
                            
                            <div class="vl"></div>
                            
                            <button onclick="confirmDialog()" style="background: var(--color-bg)">
                                <i class="uil uil-trash" style="color:var(--color-4); font-size: 20px"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
    
<!----------------------------------- ADD PROJECT ------------------------------------------------> 

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
    <div class="modal-content_short">
    <form name="PopUp" action="">

                    <div class="div2_Popup">
                    <h4>Project Name<span style="color:var(--color-red)">*</span></h4>
                    <input type="text" placeholder="Project Name">
                    </div>

                    <div class="div2_Popup">
                    <h4>Start Date<span style="color:var(--color-red)">*</span></h4>
                    <input type="date" placeholder="DD/MM/YYYY">
                    </div>
        
                    <div class="div2_Popup">
                    <h4>Ongoing Project?<span style="color:var(--color-red)">*</span></h4>
                    <div>
                        <div class="radio_button" style="width: 80px; padding-bottom: 8px">
                              <input style="width: auto" type="radio" id="yes" name="ongoing_project" value="yes">
                              <label style="width: 600px" for="age1">Yes</label>
                        </div>

                        <div class="radio_button" style="width: 80px">
                              <input style="width: auto" type="radio" id="no" name="ongoing_project" value="no">
                              <label style="width: 600px" for="age1">No</label>
                        </div>
                    </div>
                    </div>
                    
                    <div class="div2_Popup">
                    <h4>End Date<span style="color:var(--color-red)">*</span></h4>
                    <input type="date" placeholder="DD/MM/YYYY">
                    </div>
        
                    <div class="div2_Popup">
                    <h4>Project Description<span style="color:var(--color-red)">*</span></h4>
                    <textarea placeholder="A bit description about this project..."></textarea>
                    </div>
                    
                    <div class="div2_Popup">
                    <div>
                        <h4>Logo<span style="color:var(--color-red)">*</span></h4>
                        <small style="color: #777E90">(276 x 169)</small>
                    </div>
                    <input type="file">
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