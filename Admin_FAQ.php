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
    <a href="Admin_Project.php">Projects</a>
    <a href="Admin_Department.php">Departments</a>
    <a href="Admin_FAQ.php" class="selected">FAQ</a>
    <hr>
    <a href="Admin_Account.php">Account</a>
    <a href="Index.php">Log Out</a>
</div>

<!------------------------------------------- CONTENT ------------------------------------------------------->
<div class="main">
<!------------------------------------------- TITLE ------------------------------------------------------->
    <div class="main_title">
        <h3>FAQs</h3>
        <button class="btn_PrimarySmall" id="openModal">Add New</button>
    </div>
    
<!------------------------------------------- TABLE ------------------------------------------------------->
        <table>
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th style="color:white;">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>The office will be closed!</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh sapien elit consequat urna leo, a lobortis diam. </td>
                    <td>24 August 2022</td>
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
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh sapien elit consequat urna leo, a lobortis diam. </td>
                    <td>24 August 2022</td>
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
                    <h4>FAQ Section<span style="color:var(--color-red)">*</span></h4>
                    <select name="FAQSection" id="FAQSection">
                        <option value="1">Lorem Ipsum dolor sit amet</option>
                        <option value="2">Lorem Ipsum dolor sit amet</option>
                        <option value="3">Lorem Ipsum dolor sit amet</option>
                        <option value="4">Lorem Ipsum dolor sit amet</option>
                    </select>
                    </div>

                    <div class="div2_Popup">
                    <h4>Question<span style="color:var(--color-red)">*</span></h4>
                    <input type="text" placeholder="FAQ Question">
                    </div>
        
                    <div class="div2_Popup">
                    <h4>Answer<span style="color:var(--color-red)">*</span></h4>
                    <input type="text" placeholder="FAQ Answer">
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