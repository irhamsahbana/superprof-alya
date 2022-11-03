<?php
include 'partials/header.php';
?>

<!----------------------------------- TAB ----------------------------------------------------->
<div id="content-wrap">
   <div class="tab">
        <p class="selected">People of Aleph Profile</p>
        <p><a href="Profile-2.php">Confidential Info</a></p>
        <p><a href="Profile-3.php">Leave Details</a></p>
    </div>
    
<!----------------------------------- TAB CONTENT ----------------------------------------------------->    
    <div class="content-tab">
        <div class="identity">
            <div class="edit_avatar">
                <img class="avatar2" src="Images/Avatar.png">
            </div>
            <div class="name_department">
                <h3>Alya Dhia Zahra</h3>
                <h5>Creative</h5>
                <br>
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
            <h4>Fav Motto</h4>
            <input type="text" placeholder="Your life motto">
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Phone Number</h4>
                <input type="number" placeholder="081234567890">
            </div>
            
            <div class="form_set2">
                <h4>Email</h4>
                <input type="email" placeholder="name@example.com">
            </div>
        </div>
        
        <div class="form_set_row">
            <div class="form_set2">
                <h4>Birthday</h4>
                <input type="date" placeholder="DD/MM/YYYY">
            </div>
            
            <div class="form_set2">
                <h4>Domicile</h4>
                <input type="text" placeholder="Ex: Karet, Jakarta Selatan">
            </div>
        </div>
        
        <div class="form_set2">
            <h4>Hobbies/Interests</h4>
            <input type="text" placeholder="Ex: Cats, K-pop, football, hiking">
        </div>
        
        <div class="form_set2">
            <h4>Projects</h4>
            
            <div class="edit_project_set">
                <div class="edit_project">
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>

                    <img src="Images/Icon-DeleteProject.svg">
                </div>
                
                <div class="edit_project">
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>

                    <img src="Images/Icon-DeleteProject.svg">
                </div>
                
                <div class="edit_project">
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>

                    <img src="Images/Icon-DeleteProject.svg">
                </div>
                
                <div class="add_project"> 
                    <button id="openModal">
                    <i class="uil uil-plus" style="color: #A1ABC5"></i>
                    <p style="padding-top: 16px;">Add Project</p>
                    </button>
                </div>
            </div>
        </div>
        
        <button class="btn_SecondaryDisable">Save Changes</button>
    </div>
    
</div>
     
<!----------------------------------- ADD PROJECT ------------------------------------------------> 

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
  <div class="modal-content">
    
      <div class="modal-content-addProject">
          <div class="modal-head">
              <div class="dashboard-title">
                <h4>Choose Project</h4>
                <small>Add the project you’re involved in</small>
              </div>
          
          <span class="close">&times;</span>
          </div>
          
          <div class="add_project_set">
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
              
              <div class="dashboard-projectItems-border">
                    <div class="project_logo_small">
                        <img src="Images/Project_logo.svg">
                    </div>
                    <small>(2019 - Present)</small>
              </div>
          </div>
          
          <hr>
          
          <div class="action_button">
                <button class="btn_SecondarySmall">Cancel</button>
                <button class="btn_PrimarySmall">Add to Profile</button>
          </div>
        </div>
      
  </div>  
</div>
     
<script type="text/javascript" src="main.js"></script>
    
<?php
include 'partials/footer.php';
?>