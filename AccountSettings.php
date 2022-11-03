<?php
include 'partials/header.php';
?>

<!----------------------------------- CHANGE PASSWORD ----------------------------------------------------->

<div id="content-wrap">
    <div class="account_settings">
    
        <div class="title-sub">
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

    
<?php
include 'partials/footer.php';
?>