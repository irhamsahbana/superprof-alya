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
    <!--- SIDE NAV --->
<div class="sidenav">
    <div class="img_sideNav"><img class="logo" src="Images/Logo.svg" class="logo"></div>
    <a href="Admin_UserProfile.php">People of Aleph Profile</a>
    <a href="Admin_RecentNews.php">Recent News</a>
    <a href="Admin_WFOSchedule.php">WFO Schedule</a>
    <a href="Admin_Project.php">Projects</a>
    <a href="Admin_Department.php">Departments</a>
    <a href="Admin_FAQ.php">FAQ</a>
    <hr>
    <a class="selected">Account</a>
    <a href="Index.php">Log Out</a>
</div>
    
<!--- Content --->
<div class="main">
    <!----------------------------------- CHANGE PASSWORD ----------------------------------------------------->
<div class="admin_account">
        <div>
            <h3>Email Account</h3>
            <h5>name@example.com</h5>
        </div>
        
        <div class="change_password">
            <h3>Change Password</h3>
            <div class="form_set2">
                <h4>Current Password</h4>
                <input type="password" placeholder="Current Password">
            </div>
            
            <div class="form_set2">
                <h4>New Password</h4>
                <input type="password" placeholder="New Password">
            </div>
            
            <div class="form_set2">
                <h4>Confirm New Password</h4>
                <input type="password" placeholder="Confirm New Password">
            </div>
            
            <div class="action_button2">
                <button class="btn_SecondarySmall">Cancel</button>
                <button class="btn_PrimarySmall">Save Changes</button>
            </div>
        </div>

</div>
</div>
    
</body>
    
    
</html>