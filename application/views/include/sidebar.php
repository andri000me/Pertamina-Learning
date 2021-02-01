<!-- HEADER DESKTOP -->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="<?php echo base_url()."index.php/Dashboard"; ?>">
                    <img src="<?php echo base_url('assets/images/company/Pertamina-white-1.png');?>" width="150px" height="150px"/>
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <?php if($this->session->userdata('role') == 'Administrator'){ ?>
                        <li>
                            <a href="<?php echo base_url()."index.php/Dashboard"; ?>">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/DashboardChart"; ?>">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="bot-line"></span>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/Workbook"; ?>">
                                <i class="fas fa-clipboard"></i>
                                <span class="bot-line"></span>
                                Workbook
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/Assessment"; ?>">
                                <i class="fas fa-file-text"></i>
                                <span class="bot-line"></span>
                                Assessment
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url()."index.php/ELearning"; ?>">
                                <i class="fas fa-forward"></i>
                                <span class="bot-line"></span>
                                E-Learning
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url()."index.php/AssignEmployee"; ?>">
                                <i class="fas fa-check-square"></i>
                                <span class="bot-line"></span>
                                EPPM
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/Raport"; ?>">
                                <i class="fas fa-trophy"></i>
                                <span class="bot-line"></span>
                                Raport
                            </a>
                        </li>
                    <?php } ?>

                    <?php if($this->session->userdata('role') == 'Employee'){ ?>
                        <li>
                            <a href="<?php echo base_url()."index.php/Dashboard"; ?>">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/User_Workbook"; ?>">
                                <i class="fas fa-clipboard"></i>
                                Workbook
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/User_Raport"; ?>">
                                <i class="fas fa-trophy"></i>
                                Raport
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#"><i class="zmdi zmdi-settings"></i> Setting</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?php echo base_url().'assets/images/users/'. $this->session->userdata("profile"); ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <?php echo $this->session->userdata("fullname"); ?>
                                    </h5>
                                    <span class="email"><?php echo $this->session->userdata("nip"); ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-eye"></i>
                                        Active Role - <?php echo $this->session->userdata("role"); ?>
                                    </a>
                                </div>
                            </div>
                            <?php if($this->session->userdata('role') == 'Administrator'){ ?>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="<?php echo base_url()."index.php/SiteAdministrator"; ?>">
                                        <i class="zmdi zmdi-wrench"></i>
                                        Site Administrator
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="<?php echo base_url()."index.php/Profile"; ?>">
                                        <i class="zmdi zmdi-account"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="<?php echo site_url('login/logout'); ?>">
                                    <i class="zmdi zmdi-power"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->

<!-- HEADER MOBILE-->
<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="<?php echo base_url()."index.php/Dashboard"; ?>">
                    <img src="<?php echo base_url('assets/images/company/Pertamina-white-1.png');?>" width="150px" height="150px"/>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">

                <?php if($this->session->userdata('role') == 'Administrator'){ ?>
                    <li>
                        <a href="<?php echo base_url()."index.php/Dashboard"; ?>">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/DashboardChart"; ?>">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="bot-line"></span>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/Workbook"; ?>">
                            <i class="fas fa-clipboard"></i>
                            <span class="bot-line"></span>
                            Workbook
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/Assessment"; ?>">
                            <i class="fas fa-file-text"></i>
                            <span class="bot-line"></span>
                            Assessment
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url()."index.php/ELearning"; ?>">
                            <i class="fas fa-forward"></i>
                            <span class="bot-line"></span>
                            E-Learning
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url()."index.php/AssignEmployee"; ?>">
                            <i class="fas fa-check-square"></i>
                            <span class="bot-line"></span>
                            EPPM
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/Raport"; ?>">
                            <i class="fas fa-trophy"></i>
                            <span class="bot-line"></span>
                            Raport
                        </a>
                    </li>
                <?php } ?>

                <?php if($this->session->userdata('role') == 'Employee'){ ?>
                    <li>
                        <a href="<?php echo base_url()."index.php/Dashboard"; ?>">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/User_Workbook"; ?>">
                            <i class="fas fa-clipboard"></i>
                            Workbook
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/User_Raport"; ?>">
                            <i class="fas fa-trophy"></i>
                            Raport
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>

<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">
        <div class="account-wrap">
            <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="content">
                    <a class="js-acc-btn" href="#"><i class="zmdi zmdi-settings"></i> Setting</a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="<?php echo base_url().'assets/images/users/'. $this->session->userdata("profile"); ?>" />
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                                <?php echo $this->session->userdata("fullname"); ?>
                            </h5>
                            <span class="email"><?php echo $this->session->userdata("nip"); ?></span>
                        </div>
                    </div>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-eye"></i>
                                Active Role - <?php echo $this->session->userdata("role"); ?>
                            </a>
                        </div>
                    </div>
                    <?php if($this->session->userdata('role') == 'Administrator'){ ?>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="<?php echo base_url()."index.php/SiteAdministrator"; ?>">
                                <i class="zmdi zmdi-wrench"></i>
                                Site Administrator
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="<?php echo base_url()."index.php/Profile"; ?>">
                                <i class="zmdi zmdi-account"></i>
                                Profile
                            </a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                        <a href="<?php echo site_url('login/logout'); ?>">
                            <i class="zmdi zmdi-power"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER MOBILE -->