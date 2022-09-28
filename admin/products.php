<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin Panel</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse float-right" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../admin/index.php">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Cars</h2>
                </a></li>
            <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<!--            <li class=" navigation-header"><span>pages</span></li>-->
            <li class=" nav-item"><a href="index.php"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Dashboard</span></a></li>
            <li class=" nav-item"><a href="products.php"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Products</span></a></li>
            <li class=" nav-item"><a href="add-products.php"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">Add Products</span></a></li>
            <li class=" nav-item"><a href="transaction.php"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Transaction</span></a></li>
            <li class=" nav-item"><a href="settings.php"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Settings</span></a></li>
            <!--<li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a></li>-->
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Thumb View</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Data List</a>
                                </li>
                                <li class="breadcrumb-item active">Thumb View
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">-->
<!--                <div class="form-group breadcrum-right">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>-->
<!--                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-thumb-view" class="data-thumb-view-header">
                <div class="action-btns d-none">
                    <div class="btn-dropdown mr-1 mb-1">
                        <div class="btn-group dropdown actions-dropodown">
                            <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dataTable starts -->
                <div class="table-responsive">
                    <table class="table data-thumb-view">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Image</th>
                            <th>NAME</th>
                            <th>CATEGORY</th>
                            <th>POPULARITY</th>
                            <th>ORDER STATUS</th>
                            <th>PRICE</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/apple-watch.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-success">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$69.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/magic-mouse.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats HeadPhones</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:83%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">Delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$69.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/iphone-x.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Altec Lansing - Bluetooth Speaker</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:57%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/ipad-pro.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Aluratek - Bluetooth Audio Receiver</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:65%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$29.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/jbl-speaker.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Aluratek - Bluetooth Audio Transmitter</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/beats-headphones.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Basis - Peak Fitness and Sleep Tracker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:47%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/homepod.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Antec - Nano Diamond Thermal Compound</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:55%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$29.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/macbook-pro.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Antec - SmartBean Bluetooth Adapter</td>
                            <td class="product-category">Computer</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:63%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$39.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/beats-headphones.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats by Dr. Dre - 3' USB-to-Micro USB Cable</td>
                            <td class="product-category">Computer</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/jbl-speaker.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats by Dr. Dre - Bike Mount for Pill Speakers</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$49.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/apple-watch.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Bose® - SoundLink® Color Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:90%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$129.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/macbook-pro.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">BRAVEN - Portable Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/homepod.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Craig - Portable Wireless Speaker</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-danger">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:20%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/apple-watch.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Definitive Technology - Wireless Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:75%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$399.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/beats-headphones.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Charge HR Activity Tracker + Heart Rate (Large)</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:60%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$149.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/magic-mouse.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Flex 1" USB Charging Cable</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$14.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/iphone-x.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Activity Tracker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-danger">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:35%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$99.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/ipad-pro.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Charge Wireless Activity Tracker (Large)</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$129.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/apple-watch.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Craig - Tower Speaker</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:68%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$69.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/jbl-speaker.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">BRAVEN - Outdoor Speaker</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/homepod.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Bose® - Bluetooth Speaker Travel Bag</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:89%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$44.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="../app-assets/images/elements/beats-headphones.png" alt="Img placeholder">
                            </td>
                            <td class="product-name">Altec Lansing - Mini H2O Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-success">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                            <td class="product-action">
                                <span class="action-edit"><i class="feather icon-edit"></i></span>
                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- dataTable ends -->

                <!-- add new sidebar starts -->
                <div class="add-new-data-sidebar">
                    <div class="overlay-bg"></div>
                    <div class="add-new-data">
                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                            <div>
                                <h4 class="text-uppercase">Thumb View Data</h4>
                            </div>
                            <div class="hide-data-sidebar">
                                <i class="feather icon-x"></i>
                            </div>
                        </div>
                        <div class="data-items pb-3">
                            <div class="data-fields px-2 mt-3">
                                <div class="row">
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Name</label>
                                        <input type="text" class="form-control" id="data-name">
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category"> Category </label>
                                        <select class="form-control" id="data-category">
                                            <option>Audio</option>
                                            <option>Computers</option>
                                            <option>Fitness</option>
                                            <option>Appliance</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-status">Order Status</label>
                                        <select class="form-control" id="data-status">
                                            <option>Pending</option>
                                            <option>Canceled</option>
                                            <option>Delivered</option>
                                            <option>On Hold</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-price">Price</label>
                                        <input type="text" class="form-control" id="data-price">
                                    </div>
                                    <div class="col-sm-12 data-field-col data-list-upload">
                                        <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                            <div class="dz-message">Upload Image</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                            <div class="add-data-btn">
                                <button class="btn btn-primary">Add Data</button>
                            </div>
                            <div class="cancel-data-btn">
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add new sidebar ends -->
            </section>
            <!-- Data list view end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/ui/data-list-view.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>