<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="../../../../assets/css/header.css" />
<script src="../../../../assets/js/header.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
       <div  class="d-flex header_right">
       <div class="searchInputWrapper header_item">
    <input class="searchInput" type="text" placeholder='Search By student Name'>
    <i class="searchInputIcon fa fa-search"></i>
    </input>
  </div>
  <div class="header_item two">
  <i class="fa fa-calendar" aria-hidden="true"></i>
  </div>
  <div class="header_item two">
  <i class="fa fa-whatsapp" aria-hidden="true"></i>
  </div>
        <div class="header_img"> 
            
            <img src="../../../../assets/images/user.png" alt=""> 
        </div>
       </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">School Management</span> 
                </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active d-flex" onclick="toggleSubMenu('dashboardSubMenu')"> 
                      <div>
                      <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Student Information</span> 
                      </div>
                        <i class='bx bx-chevron-down down_arrow'></i>
                    </a> 
                    <ul class="sub_menu" id="dashboardSubMenu">
            <li><a href="student_details">Student Details</a></li>
            <li><a href="student_admission">Student Admission</a></li>
            <li><a href="#">Online Admission</a></li>
            <li><a href="#">Disabled Students</a></li>
            <li><a href="#">Multi Class Students</a></li>
            <li><a href="#">Bulk Delete</a></li>
            <li><a href="#">Student Categories</a></li>
            <li><a href="#">Student House</a></li>
            <li><a href="#">Disable Reason</a></li>
        </ul>
                    
        <a href="#" class="nav_link d-flex" onclick="toggleSubMenu('usersSubMenu')">
        <div>
            <i class='bx bx-user nav_icon'></i>
            <span class="nav_name">Fees Collection</span>
        </div>
        <i class='bx bx-chevron-down down_arrow'></i>
    </a>
    <ul class="sub_menu" id="usersSubMenu">
        <li><a href="#">Collect Fees</a></li>
        <li><a href="#">Offline Bank Payments</a></li>
        <li><a href="#">Search Fees Payments</a></li>
        <li><a href="#">Fees Master</a></li>
        <li><a href="#">Search Due Fees</a></li>
        <li><a href="#">Fees Master</a></li>
        <li><a href="#">Fees Group</a></li>
        <li><a href="#">Fees Type</a></li>
        <li><a href="#">Fees Discount</a></li>
        <li><a href="#">Fees Carry Forward</a></li>
        <li><a href="#">Fees Reminder</a></li>
    </ul>

    <a href="#" class="nav_link d-flex" onclick="toggleSubMenu('messagesSubMenu')">
        <div>
            <i class='bx bx-message-square-detail nav_icon'></i>
            <span class="nav_name">Certificates</span>
        </div>
        <i class='bx bx-chevron-down down_arrow'></i>
    </a>
    <ul class="sub_menu" id="messagesSubMenu">
        <li><a href="#">Student ID Card</a></li>
    </ul>
                    <!-- <a href="#" class="nav_link"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Bookmark</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Files</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Stats</span> 
                    </a>  -->
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">SignOut</span> 
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <!-- <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div> -->

    <!--Container Main end-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>