<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style type="text/css">
  
  /* CSS used here will be applied after bootstrap.css */
/*
 * Slidebar (add to your bootstrap)
 */

body{
  overflow-x: hidden;
  background-color: #dddddd;

}

.slidebar-form {
  padding: 7px 15px 13px 15px;
}
.slidebar-nav {
  left: 250px;
  list-style: none;
  height: 100%;
  margin: 0;
  margin-left: -250px;  
  overflow-y: auto;
  padding: 0;
  position: fixed; 
  top: 50px;
  width: 0;
  z-index: 1000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
} 
#wrapper.toggled .slidebar-nav {
    width: 250px;
}
.slidebar-nav .navbar-collapse {
  padding: 0;
  max-height: none;
}
.slidebar-nav ul {
  float: none;
  width: 100%;
}
.slidebar-nav ul:not {
  display: block;
}
.slidebar-nav li {
  float: none;
  display: block;
}
.slidebar-nav li a {
  padding-top: 12px;
  padding-bottom: 12px;
}
.slidebar-nav .open .dropdown-menu {
  position: static;
  float: none;
  width: auto;
  margin: 0;
  padding: 5px 0;
  background-color: transparent;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.slidebar-nav .open .dropdown-menu > li > a {
  padding: 5px 15px 5px 25px;
}
.slidebar-nav .navbar-brand {
  width: 100%;
}
.slidebar-nav .open > a > b.caret {
  border-top: none;
  border-bottom: 4px solid;
}
.slidebar-nav .navbar-nav {
  margin: 0;
}

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled {
    padding-left: 250px;
}
#page-wrapper6 {
    width: 100%;
    position: absolute;
    padding: 15px;
  top: 50px;
}
#wrapper.toggled #page-wrapper6 {
    position: absolute;
    margin-right: -250px;
}
@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }
    #wrapper.toggled {
        padding-left: 0;
    }
    #page-wrapper6 {
        padding: 20px;
        position: relative;
    }
    #wrapper.toggled #page-wrapper6 {
        position: relative;
        margin-right: 0;
    }
  .slidebar-nav {
    width: 250px;;
  }
  #wrapper.toggled .slidebar-nav {
    width: 0;
    }
}
  
.slidebar-toggle {
  position: relative;
  float: left;
  padding: 9px 10px;
  margin-top: 8px;
  margin-left: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.slidebar-toggle:focus {
  outline: 0;
}
.slidebar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.slidebar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
.navbar-default .slidebar-toggle {
  border-color: #ddd;
}
.navbar-default .slidebar-toggle:hover,
.navbar-default .slidebar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .slidebar-toggle .icon-bar {
  background-color: #888;
}

/*
 * White navbar style
 */

#navbar-white.navbar-default { /* #efffff - #ffffff */
    font-size: 14px;
    background-color: rgba(255, 255, 255, 1);
    background: -webkit-linear-gradient(top, rgba(239, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
    background: linear-gradient(to bottom, rgba(239, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
    border: 0px;
  border-radius: 0;
}
#navbar-white.navbar-default .navbar-nav>li>a:hover,
#navbar-white.navbar-default .navbar-nav>li>a:focus,
#navbar-white.navbar-default .navbar-nav>li>ul>li>a:hover, 
#navbar-white.navbar-default .navbar-nav>li>ul>li>a:focus, 
#navbar-white.navbar-default .navbar-nav>.active>a,
#navbar-white.navbar-default .navbar-nav>.active>a:hover,
#navbar-white.navbar-default .navbar-nav>.active>a:focus {  
  color: rgba(51, 51, 51, 1);
    background-color: rgba(255, 255, 255, 1);
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
}
#sidebar-white, #column-white, #dashboard-white, #slidebar-white {
  background-color: #efffff;
}
#navbar-white.navbar-default .navbar-toggle,
#navbar-white.navbar-default .slidebar-toggle {
    border-color: #ccffff;
}
#navbar-white.navbar-default .navbar-toggle:hover,
#navbar-white.navbar-default .navbar-toggle:focus,
#navbar-white.navbar-default .slidebar-toggle:hover,
#navbar-white.navbar-default .slidebar-toggle:focus {
    background-color: #ccffff;
}
#navbar-white.navbar-default .navbar-nav>li>a,
#navbar-white.navbar-default .navbar-nav>li>ul>li>a, 
#navbar-white.navbar-default .navbar-brand {
    color: #999999; 
}
#navbar-white.navbar-default .navbar-toggle .icon-bar,
#navbar-white.navbar-default .navbar-toggle:hover .icon-bar,
#navbar-white.navbar-default .navbar-toggle:focus .icon-bar,
#navbar-white.navbar-default .slidebar-toggle .icon-bar,
#navbar-white.navbar-default .slidebar-toggle:hover .icon-bar,
#navbar-white.navbar-default .slidebar-toggle:focus .icon-bar {
    background-color: #cccccc; 
}
</style>

<nav id="navbar-white" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button href="#menu-toggle" class="slidebar-toggle" id="menu-toggle">
        <span class="sr-only">Toggle sidebar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span><a class="navbar-brand" href="/">Slidebar</a></span>
    </div>
    
    <div class="navbar-collapse collapse">
    
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Services <b class="caret"></b></a>
          <ul class="dropdown-menu"> 
            <li><a href="/">Carwashes</a></li>
            <li><a href="/">Lapdances</a></li>
            <li><a href="/">Musicals</a></li>
            <li><a href="/">Tutorials</a></li>           
            <li><a href="/">Catering</a></li>
          </ul>
        </li>
               
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tags"></i> Products <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/">Books</a></li>
            <li><a href="/">Leaflets</a></li>
            <li><a href="/">CDs</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Merchandise</li>
            <li><a href="/">Towels</a></li>
            <li><a href="/">Flags</a></li>
            <li><a href="/">Coffee Mugs</a></li>
          </ul>
        </li>
             
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-plus"></i> Account</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-comment"></i> Notifications</a></li>           
          </ul>
        </li>        
        </ul>
      </div>
    </div>
  </nav>  
    


  <div id="wrapper">    
        <!-- Sidebar -->
  <div id="slidebar-white" class="slidebar-nav">
      <nav id="navbar-white" class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav">
          <li class="hidden-xs"><a class="navbar-brand" href="/">Slidebar</a></li>
          <li class="sidebar-form">
            <form class="input-group" border="0" id="af" name="af" role="search" action="/archive.php">
                <input type="text" class="form-control" id="aa" name="aa" placeholder="Search">
              <span class="input-group-btn">  
                <button type="submit" class="btn btn-md" id="as" name="as" value="Go"><i class="glyphicon glyphicon-search"></i></button>
              </span>
            </form>
          </li>
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Services <b class="caret"></b></a>
          <ul class="dropdown-menu"> 
            <li><a href="/">Carwashes</a></li>
            <li><a href="/">Lapdances</a></li>
            <li><a href="/">Musicals</a></li>
            <li><a href="/">Tutorials</a></li>           
            <li><a href="/">Catering</a></li>
          </ul>
        </li>
               
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tags"></i> Products <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/">Books</a></li>
            <li><a href="/">Leaflets</a></li>
            <li><a href="/">CDs</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Merchandise</li>
            <li><a href="/">Towels</a></li>
            <li><a href="/">Flags</a></li>
            <li><a href="/">Coffee Mugs</a></li>
          </ul>
        </li>
             
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-plus"></i> Account</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
            <li><a href="/"><i class="glyphicon glyphicon-comment"></i> Notifications</a></li>           
          </ul>
        </li>
        </ul>
      </nav><!--/.navbar -->
    </div><!--/.sidebar-nav -->  


    <!-- Page Content -->
    <main id="page-wrapper6">
      <div class="container-fluid">  
        <div class="col-md-6">
        <h3>Scale the page to see the collapsed sidebar on small screens</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus venenatis ante ac vestibulum. Curabitur congue, leo non elementum interdum, sapien erat iaculis felis, ut vulputate turpis mauris molestie lorem. Integer urna libero, pharetra sit amet massa in, blandit tempor eros. Nulla risus arcu, lacinia vel felis quis, varius gravida erat. Duis molestie, dolor et porttitor iaculis, mi dui aliquet justo, at mattis nisi leo vel nunc. In dapibus est aliquet, auctor nisl a, interdum felis. Donec sed ligula in ligula hendrerit congue non tristique risus. Morbi sollicitudin ligula non erat placerat, non vulputate nibh rutrum. Phasellus consectetur nibh sit amet ipsum sagittis, et lobortis ligula sollicitudin. Nunc ac diam non diam lacinia bibendum lacinia in magna. Morbi non ante eget ante aliquam porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vestibulum faucibus turpis sit amet mauris accumsan volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent condimentum arcu ut erat commodo, eu porta mauris hendrerit.</p>
        </div>
        
        <div class="col-md-6">
        <h3>It is important to keep all the text on the main page within the page-wrapper</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus venenatis ante ac vestibulum. Curabitur congue, leo non elementum interdum, sapien erat iaculis felis, ut vulputate turpis mauris molestie lorem. Integer urna libero, pharetra sit amet massa in, blandit tempor eros. Nulla risus arcu, lacinia vel felis quis, varius gravida erat. Duis molestie, dolor et porttitor iaculis, mi dui aliquet justo, at mattis nisi leo vel nunc. In dapibus est aliquet, auctor nisl a, interdum felis. Donec sed ligula in ligula hendrerit congue non tristique risus. Morbi sollicitudin ligula non erat placerat, non vulputate nibh rutrum. Phasellus consectetur nibh sit amet ipsum sagittis, et lobortis ligula sollicitudin. Nunc ac diam non diam lacinia bibendum lacinia in magna. Morbi non ante eget ante aliquam porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vestibulum faucibus turpis sit amet mauris accumsan volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent condimentum arcu ut erat commodo, eu porta mauris hendrerit.</p>
        </div>
      </div> 
    </main>
  </div><!-- /#wrapper -->
<script type="text/javascript">
  
  // add to footer
$("#menu-toggle").click(function(e){e.preventDefault();$("#wrapper").toggleClass("toggled");});
</script>