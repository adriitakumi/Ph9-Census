<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                    PH9 LOGO KEK
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php if(isset($active) && $active == 'dashboard') echo 'active'; ?>">
                        <a href="<?php echo site_url('dashboard/') ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?php if(isset($active) && $active == 'individuals') echo 'active'; ?>">
                        <a href="<?php echo site_url('individuals/') ?>">
                            <i class="material-icons">person</i>
                            <p>Individuals</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('census/table') ?>">
                            <i class="material-icons">location_on</i>
                            <p>Map</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('census/typography') ?>">
                            <i class="material-icons">library_books</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="<?php echo site_url('census/upgrade') ?>">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>