<?php
include 'partials/header.php';
?>

<!----------------------------------- TAB ----------------------------------------------------->
<div id="content-wrap">
   <div class="tab">
        <p><a href="Profile-1.php">People of Aleph Profile</a></p>
       <p><a href="Profile-2.php">Confidential Info</a></p>
        <p class="selected">Leave Details</p>
    </div>
    
<!----------------------------------- TAB CONTENT ----------------------------------------------------->    
    
<div class="content-tab-3">
    
    <div class="leave">
        <div class="leave_info">
            <div class="leaveInfo_item">
                <h4>Last Year’s <br> Leave 🔙</h4>
                <h1>0</h1>
                <p>Expired: 12 Aug 2022</p>
            </div>

            <div class="leaveInfo_item">
                <h4>Annual <br> Leave 🗓️</h4>
                <h1>0</h1>
                <p>Expired: 12 Aug 2022</p>
            </div>

            <div class="leaveInfo_item">
                <h4>Replacement <br> Leave 🔁</h4>
                <h1>0</h1>
                <p>Expired: 12 Aug 2022</p>
            </div>

            <div class="leaveInfo_item">
                <h4>Birthday <br> Leave 🎂</h4>
                <h1>0</h1>
                <p>Expired: 12 Aug 2022</p>
            </div>
        </div>

        <div class="leave_total">
                <h4>Total Leave 🗒️</h4>
                <h1>0</h1>
        </div>
    </div>
    
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

    
<?php
include 'partials/footer.php';
?>