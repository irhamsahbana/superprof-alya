<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Profile Details</title>
    <!--- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="./css/style.css">
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
            <a href="Admin_UserProfile.php" style="margin-top: 0px">
                <div class="header_small">
                    <img src="Images/Icon-Back.svg">
                    <h5>Profile Details</h5>
                </div>
            </a>
            
            <div class="action_button">
                <button id="openModal" style="background: var(--color-bg)">
                    <i class="uil uil-pen" style="color:var(--color-3); font-size: 24px"></i>
                </button>
                            
            <div class="vl"></div>
                            
            <button onclick="confirmDialog()" style="background: var(--color-bg)">
                <i class="uil uil-trash" style="color:var(--color-3); font-size: 24px"></i>
            </button>
            </div>
        
        </div>
    </nav>
    
<!----------------------------------- HEADER BACK ----------------------------------------------------->
<div id="content-wrap">
    
<!----------------------------------- TAB ----------------------------------------------------->
    
   <div class="tab">
        <p class="selected">Aleph Info</p>
        <p><a href="Admin_UPDetails-2.php">Personal Data</a></p>
        <p><a href="Admin_UPDetails-3.php">Leave Details</a></p>
    </div>
    
<!----------------------------------- TAB CONTENT ----------------------------------------------------->    
    <div class="content-tab">  
        <div class="identity">
    
            <img class="avatar2" src="Images/Avatar.png">

            <div class="name_department">
            <h3>Alya Dhia Zahra</h3>
            <div>
                <i class="uil uil-upload" style="font-size: 16px; color:var(--color-1);"></i>
                <label for="file-upload" style="padding-left: 8px;font-size: 16px; color:var(--color-1);">
                    Change Profile Picture
                </label>
            </div>
            <input id="file-upload" type="file" style="display:none;">
            </div>
        
        </div>
        
        <div class="form_set2">
            <h4>Employee ID</h4>
            <input type="text" placeholder="Employee ID" disabled>
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Position</h4>
                <select name="position" id="position" disabled>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            
            <div class="form_set2">
                <h4>Department</h4>
                <select name="department" id="department" disabled>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            
            <div class="form_set2">
                <h4>Leader</h4>
                <input type="text" placeholder="Leader Name" disabled>
            </div>
            
            <div class="form_set2">
                <h4>Date of Join</h4>
                <input type="date" placeholder="DD/MM/YYYY" disabled>
            </div>
        </div>
        
        <div class="form_set2">
            <h4>Aleph Email</h4>
            <input type="email" placeholder="name@aleph.com" disabled>
        </div>
    </div>
    
</div>
 
<!----------------------------------- BOTTOM BUTTON ----------------------------------------------------->
    <div class="bottom_button">
        <div class="action_button2">
            <button class="btn_SecondarySmall">Cancel</button>
            <button class="btn_PrimarySmall">Save</button>
        </div>
    </div>
    
</body>
    
    
</html>