 <!-- nav hp -->
 <div class="nav-hp" style="display:none" id="nav-hp">
        <div class="nav-content-hp">
            <div class="top">
                <div class="logo" style="display:flex;">
                <a href="<?=base_url('admin');?>">
                    <h1 class="m-0 logo-cont ms-auto">Farm<span class="iot">IOT</span></h1>
                </a>
                    <a href="#" class="nav-hide ms-auto" onclick="closing()">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>
            <div class="middle">
                <ul class="ul-no">
                    <!-- <a href="index.html" class="">
                        <li class="li-co te-side"><span><i class="fa-brands fa-hashnode te-ico"></i>Overview</span>
                        </li>
                    </a>
                    <a href="statistic.html">
                        <li class="li-co te-side"><span><i class="fa-solid fa-chart-line te-ico"></i>Statistics</span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="li-co te-side"><span><i class="fa-solid fa-list te-ico"></i>List</span></li>
                    </a>
                    <a href="#">
                        <li class="li-co te-side"><span><i class="fa-solid fa-gears te-ico"></i>Setting</span></li>
                    </a>
                    <a href="user.html">
                        <li class="li-co te-side"><span><i class="fa-solid fa-user te-ico"></i>Users</span></li>
                    </a> -->
                    <a href="<?=base_url('admin');?>">
                        <li  <?= $active == 'admin' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?> ><span><i class="fa-brands fa-hashnode te-ico"></i>Dashboard</span>
                        </li>
                    </a>
                    <a href="<?=base_url('admin/list');?>">
                        <li <?= $active == 'list' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-list te-ico"></i>List Sensor</span></li>
                    </a>
                    <a href="<?=base_url('admin/statistic');?>">
                        <li <?= $active == 'statistic' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-chart-line te-ico"></i>Statistics</span>
                        </li>
                    </a>
                    <a href="<?=base_url('admin/users');?>">
                        <li <?= $active == 'users' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-user te-ico"></i>Users</span></li>
                    </a>
                    <a href="<?=base_url('admin/setting');?>">
                        <li <?= $active == 'setting' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-gears te-ico"></i>Setting</span></li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <!-- end nav hp -->
    <div class="main">
        <div class="sidebar-blex">
            <div class="nav-content">
                <div class="top">
                    <div class="logo">
                    <a href="<?=base_url('admin');?>">
                        <h1 class="m-0 logo-cont">Farm<span class="iot">IOT</span></h1>
                    </a>
                    </div>
                </div>
                <div class="middle">
                    <ul class="ul-no">
                        <!-- <a href="index.html">
                            <li class="li-co te-side"><span><i class="fa-brands fa-hashnode te-ico"></i>Overview</span>
                            </li>
                        </a>
                        <a href="statistic.html">
                            <li class="li-co te-side"><span><i
                                        class="fa-solid fa-chart-line te-ico"></i>Statistics</span>
                            </li>
                        </a>
                        <a href="#">
                            <li class="li-co te-side"><span><i class="fa-solid fa-list te-ico"></i>List</span></li>
                        </a>
                        <a href="#">
                            <li class="li-co te-side"><span><i class="fa-solid fa-gears te-ico"></i>Setting</span></li>
                        </a>
                        <a href="user.html">
                            <li class="li-co te-side"><span><i class="fa-solid fa-user te-ico"></i>Users</span></li>
                        </a> -->
                        <a href="<?=base_url('admin');?>">
                            <li  <?= $active == 'admin' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?> ><span><i class="fa-brands fa-hashnode te-ico"></i>Dashboard</span>
                            </li>
                        </a>
                        <a href="<?=base_url('admin/list');?>">
                            <li <?= $active == 'list' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-list te-ico"></i>List Sensor</span></li>
                        </a>
                        <a href="<?=base_url('admin/statistic');?>">
                            <li <?= $active == 'statistic' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-chart-line te-ico"></i>Statistics</span>
                            </li>
                        </a>
                        <a href="<?=base_url('admin/users');?>">
                            <li <?= $active == 'users' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-user te-ico"></i>Users</span></li>
                        </a>
                        <a href="<?=base_url('admin/setting');?>">
                            <li <?= $active == 'setting' || $active == '' ? 'class="li-co te-side hover-active"' : 'class="li-co te-side"' ?>><span><i class="fa-solid fa-gears te-ico"></i>Setting</span></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>