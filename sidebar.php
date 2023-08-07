<style>
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 15px;
  line-height: 50px;
  font-weight: 250;
  background-color: #f2f2f2;
  position: relative;
  top: 0px;
  height: 100%;
  color: #000000;
  text-indent: 10px;
}
.nav-side-menu .brand {
  background-color: #cccccc;
  line-height: 50px;
  font-weight: 250;
  display: block;
  text-align: center;
  font-size: 16px;
}

.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 2px;
  margin: 1px;
  line-height: 35px;
  cursor: pointer;
}

.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #808080;
  background-color: #e6e6e6;
}

.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #000000;
}

.nav-side-menu li:hover {
  border-left: 3px solid #808080;
  background-color: #e6e6e6;
}

</style>

    <?php
        if(isset($_SESSION["logged_in"]))
        {
    ?>
    <div class="nav-side-menu col-md-2">
             <div class="brand"><a href="dashboard.php">Dashboard</a></div>
                    <div class="menu-list">
                        <ul class="menu-content">
                          <?php 
                            if($_SESSION["user_role_id"] == 2)
                            {
                          ?>
                          <li><a href="Users.php">Create Account</a></li>
                          <?php 
                            }
                          ?>
                          
                          <li><a href="addelective.php">Team Elective</a> </li>
                          <li><a href="registerstudent.php">Add Students</a> </li>
                          <?php
                         if($_SESSION['user_dept_id'] == 1)
                         {
                          ?>
                          <li><a href="reports.php">Report</a> </li>
                         <?php
                         }
          				else
                         {
                         
                          ?>
                         <li><a href="reportdept.php">Report</a> </li>
                          
                          <?php
                          }
          				  ?>
                        </ul>
     <?php
        }
    ?>

                    </div>
</div>
