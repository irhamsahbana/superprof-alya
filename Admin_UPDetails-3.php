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
       <p><a href="Admin_UPDetails-1.php">Aleph Info</a></p>
       <p><a href="Admin_UPDetails-2.php">Personal Data</a></p>
       <p class="selected">Leave Details</p>
    </div>
    
<!----------------------------------- TAB CONTENT ----------------------------------------------------->    
    <div class="content-tab">              
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Last Year's Leave</h4>
                <input type="number" placeholder="0" disabled>
            </div>
            
            <div class="form_set2">
                <h4>Expiry Date</h4>
                <input type="date" placeholder="DD/MM/YYYY" disabled>
            </div>
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Annual Leave</h4>
                <input type="number" placeholder="0" disabled>
            </div>
            
            <div class="form_set2">
                <h4>Expiry Date</h4>
                <input type="date" placeholder="DD/MM/YYYY" disabled>
            </div>
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Replacement Leave</h4>
                <input type="number" placeholder="0" disabled>
            </div>
            
            <div class="form_set2">
                <h4>Expiry Date</h4>
                <input type="date" placeholder="DD/MM/YYYY" disabled>
            </div>
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Birthday Leave</h4>
                <input type="number" placeholder="0" disabled>
            </div>
            
            <div class="form_set2">
                <h4>Expiry Date</h4>
                <input type="date" placeholder="DD/MM/YYYY" disabled>
            </div>
        </div>
        
        <div class="form_set2">
            <h4>Total Leave</h4>
            <input type="number" placeholder="0" disabled>
        </div>
        
        <br>
        <hr>
        <br>
        
        <div class="leave_history">
            <h3>Leave History</h3>

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