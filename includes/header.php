<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.php" >

                    <img style="height:80px; width:170px;" src="assets/img/logo1.png" /><p style="color:black; font-weight:bold; margin-top:5px;">Online Library <br /> Management System</p>
                </a>

            </div>
<?php if($_SESSION['login'])
{
?>
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                            <li><a href="issued-books.php">Issued Books</a></li>
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">

      <li><a href="index.php">Dashboard</a></li>
      <li><a href="index.php#ulogin">User Login</a></li>
                            <li><a href="signup.php">User Signup</a></li>

                            <li><a href="adminlogin.php">Admin Login</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <marquee scrollamount="15">
      <h3 style="font-weight:bold;">Library opens seven days a week between 8AM to 8PM.</h3>
    </marquee>

    <?php } ?>
