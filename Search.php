<?php
include 'partials/header.php';
?>
    
<!----------------------------------- SEARCH BY ------------------------------------------------------>
<div id="content-wrap">
    <div class="search_by">
        <input type="text" placeholder="Search name...">
        
        <div class="filter_by">
            <p>or filter by</p>
            
            <div class="custom-select" style="width:200px;">
              <select>
                <option value="0">Department</option>
                <option value="1">Department</option>
                <option value="2">Department 1</option>
                <option value="3">Department 2</option>
                <option value="4">Department 3</option>
                <option value="5">Department 4</option>
              </select>
            </div>
            
            <div class="custom-select" style="width:200px;">
              <select>
                <option value="0">Projects</option>
                <option value="1">Projects</option>
                <option value="2">Project 1</option>
                <option value="3">Project 2</option>
                <option value="4">Project 3</option>
                <option value="5">Project 4</option>
              </select>
            </div>
            
        </div>
    </div>
    
    
<!----------------------------------- SEARCH RESULT ------------------------------------------------------>
<div class="search_result">
    <p>x results for <b>“search result”</b></p>
    
    <div class="card_searchResult">
        <div class="section_profile">
            <img class="avatar2" src="Images/Avatar.png">
            <div class="section_profile_title">
                <h3>Full Name</h3>
                <h5>Department</h5>
            </div>
            <p style="text-align: center"><i>“The big lesson in life is never be scared of anyone or anything.”</i></p>
        </div>
        
        <div class="section_details">
            <div class="details1">
                <div class="detailsRow">
                    <div class="title-sub">
                        <h4>Phone 📱</h4>
                        <p>Phone Number</p>
                    </div> 
                    <div class="title-sub">
                        <h4>Birthday 🎂</h4>
                        <p>Birthday</p>
                    </div>
                </div>
                
                <div class="detailsRow">
                    <div class="title-sub">
                        <h4>Email ✉️</h4>
                        <p>Emailr</p>
                    </div>
                    <div class="title-sub">   
                        <h4>Domicile 🏠</h4>
                        <p>Domicile</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="title-sub">
                <h4>Hobbies / Interests 👀</h4>
                <p>Hobbies/Interests</p>
            </div>
            
            <hr>
            
            <div class="title-sub">
                <h4>Projects 💻</h4>
                
                <div class="projects_profile">
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>
                    
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>
                    
                    <div class="dashboard-projectItems">
                        <div class="project_logo_small">
                            <img src="Images/Project_logo.svg">
                        </div>
                        <small>(2019 - Present)</small>
                    </div>
                </div>
                
            </div>
        </div>
    
    </div>
</div>
    
</div>
    
<script type="text/javascript" src="main.js"></script>
    
    
<?php
include 'partials/footer.php';
?>