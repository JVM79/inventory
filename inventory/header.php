<body class="fix-header fix-sidebar" style="overflow:auto">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" style="height:40px" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" style="height:40px" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" action="location.php" method="GET">
                                <input type="text" class="form-control" name="query" placeholder="Search here" id="squery"> <a class="srh-btn"><i class="ti-close"></i></a> 
								<button type="submit" style="display:none">Done</button>
						</form>
                        </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        
                        <!-- End Messages -->
                        <!-- Profile -->
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/logo.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-microsoft-alt"></i> &nbsp;<?php echo $_SERVER['PHP_AUTH_USER']; ?></a></li>
									<li class="divider">
									<li><a href="#"><small>You are logged by Windows Server Active Directory</small></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Manage</li>
						<li> <a href="index.php" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">All Locations</span></a></li>
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="mapa2.php">1st Floor</a></li>
								<li><a href="mapa3.php">Ground Floor</a></li>
								<li><a href="mapa4.php">Supply Chain</a></li>
								<li><a href="mapa5.php">FIN</a></li>
								<li><a href="mapa6.php">RH</a></li>
								<li><a href="mapa7.php">IT</a></li>
								<li><a href="mapa8.php">GSSC</a></li>
                            </ul>
                        </li>
						<li> <a href="stock.php" aria-expanded="false"><i class="fa fa-server"></i><span class="hide-menu">Stock</span></a></li>
						<li> <a href="loans.php" aria-expanded="false"><i class="fa fa-briefcase"></i><span class="hide-menu">Loans</span></a></li>
                        <li class="nav-devider"></li>
                        <li class="nav-label">Reports</li>
						<li> <a href="changereport.php?tipo=layout&days=30" aria-expanded="false"><i class="fa fa-sitemap"></i><span class="hide-menu">Layout Changes</span></a></li>
						<li> <a href="changereport.php?tipo=stock&days=30" aria-expanded="false"><i class="fa fa-retweet"></i><span class="hide-menu">Stock Changes</span></a></li>
						<li> <a href="loanreport.php?days=30" aria-expanded="false"><i class="fa fa-briefcase"></i><span class="hide-menu">Loans</span></a></li>
						<li> <a href="computerreport.php" aria-expanded="false"><i class="fa fa-laptop"></i><span class="hide-menu">Computers</span></a></li>
						<li> <a href="monitorreport.php" aria-expanded="false"><i class="fa fa-desktop"></i><span class="hide-menu">Monitors</span></a></li>
						<li class="nav-devider"></li>
                        <li> <a href="writeoff.php" aria-expanded="false"><i class="fa fa-trash"></i><span class="hide-menu">Write-Off</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>