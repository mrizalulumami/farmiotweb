<div id="sidebar" class="sidebar-blex">
    <div class="nav-content">
        <div class="top">
            <div class="logo">
                <a href="<?=base_url('admin');?>"><h1 class="m-0 logo-cont">Farm<span class="iot">IOT</span></h1></a>
            </div>
        </div>
        <div class="middle">
            <ul class="ul-no">
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
        <!-- <div class="bottom">bottom</div> -->
    </div>
</div>
        