<!-- widget -->
<div class="widget">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wid-cont">
                                <div class="card-cont">
                                    <div class="left">
                                        <div class="wi-title">
                                            <div class="dev-title">Total Device by Status</div>
                                        </div>
                                        <div class="icon-tol">
                                            <h4 class="m-0 mt-5"><i class="fa-solid fa-file tex-grrr"></i>
                                            <?php foreach ($devices_online as $a) :
                                            ?>
                                            <?= $a['total_devices']; ?>
                                            <?php endforeach; ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="m-0 tex-grrr">Status</span>
                                        <span class="m-0 st-online">ONLINE</span>
                                    </div>
                                </div>
                                <div class="card-cont" style="margin-top: 10px;">
                                    <div class="left">
                                        <div class="dev-title">Import Data</div>
                                        <div class="data-import">
                                            <div class="bgn">
                                                <img src="https://www.gstatic.com/devrel-devsite/prod/v2325d8c952b9b608081f2b039989eacb0148117feedf74c3efc58771dfb973db/firebase/images/lockup.svg"
                                                    width="20%" alt="firebase">
                                                <a class="btn-ipm" href="#">Import <i
                                                        class="fa-solid fa-file-import"></i></a>
                                            </div>
                                            <div class="bgn">
                                                <img src="https://webimages.mongodb.com/_com_assets/cms/kuyjf3vea2hg34taa-horizontal_default_slate_blue.svg?auto=format%252Ccompress"
                                                    width="20%" alt="mongodb">
                                                <a class="btn-ipm" href="#">Import <i
                                                        class="fa-solid fa-file-import"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="dropdown-ico">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-fix">
                            <div class="graph">
                                <div class="wid-ch">
                                    <div class="dev-ch">
                                        <div class="dev-title">Total Devices by Type</div>
                                        <section class="pi-mar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="milet">
                                                        <div class="pieID pie">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="milet">
                                                        <ul class="pieID legend">
                                                        <?php foreach ($devices_by_name as $a) :
                                                        ?>
                                                        <li>
                                                            <em><?= $a['nama_device'];?></em>
                                                            <span><?= $a['total'];?></span>
                                                        </li>
                                                        <?php endforeach;?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- chart-bar -->
                <div class="row" style="margin-top:10px;">
                    <div class="col-12">
                        <div class="card bx-shadow">
                            <div class="card-body">
                                <h4 class="m-0">Device</h4>
                                <canvas id="myChart" height="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card bx-shadow" style="margin-top:10px;">
                            <div class="card-body">
                                <div class="container px-2">

                                    <div class="mb-2 d-flex justify-content-between align-items-center">

                                        <div class="position-relative">
                                            <span class="position-absolute search-table"><i
                                                    class="fa fa-search"></i></span>
                                            <input class="form-control w-100" placeholder="Search by order#, name...">
                                        </div>

                                        <div class="px-2">

                                            <span>Filters <i class="fa fa-angle-down"></i></span>
                                            <i class="fa fa-ellipsis-h ms-3"></i>
                                        </div>

                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-borderless">

                                            <thead>
                                                <tr class="bg-light">
                                                    <th scope="col" width="5%"><input class="form-check-input"
                                                            type="checkbox">
                                                    </th>
                                                    <th scope="col" width="5%">No</th>
                                                    <th scope="col" width="20%">Customer</th>
                                                    <th scope="col" width="20%">Date</th>
                                                    <th scope="col" width="20%">Status</th>
                                                    <th scope="col" width="10%">T device</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($devices_by_users as $a) :
                                                ?>

                                                <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td><?= $i++?></td>
                                                    <td><img src="<?= base_url('assets');?>/assets/image/tab-1.png" width="25">
                                                    <?= $a['fullname'];?>
                                                    </td>
                                                    <td><?= $a['terdaftar'];?></td>
                                                    <td><?= $a['status_user'];?></td>
                                                    <td><i class="fa fa-check-circle-o green"></i><span
                                                            class="ms-1"><?= $a['tot_device'];?></span>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                                <!-- <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td>12</td>
                                                    <td><img src="/assets/image/tab-1.png" width="25"> Althan Travis
                                                    </td>
                                                    <td>1 Oct, 21</td>
                                                    <td>Wirecard for figma</td>
                                                    <td><i class="fa fa-check-circle-o green"></i><span
                                                            class="ms-1">Paid</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td>14</td>
                                                    <td><img src="/assets/image/tab-2.png" width="25"> Tomo arvis</td>
                                                    <td>12 Oct, 21</td>
                                                    <td>Altroz furry</td>
                                                    <td><i class="fa fa-dot-circle-o text-danger"></i><span
                                                            class="ms-1">Failed</span></td>
                                                </tr>


                                                <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td>17</td>
                                                    <td><img src="/assets/image/tab-1.png" width="25"> Althan Travis
                                                    </td>
                                                    <td>1 Nov, 21</td>
                                                    </td>
                                                    <td>Apple Macbook air</td>
                                                    <td><i class="fa fa-check-circle-o green"></i><span
                                                            class="ms-1">Paid</span>
                                                </tr>


                                                <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td>90</td>
                                                    <td><img src="/assets/image/tab-2.png" width="25"> Travis head</td>
                                                    <td>19 Oct, 21</td>
                                                    <td>Apple Macbook Pro</td>
                                                    <td><i class="fa fa-check-circle-o green"></i><span
                                                            class="ms-1">Paid</span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row"><input class="form-check-input" type="checkbox">
                                                    </th>
                                                    <td>12</td>
                                                    <td><img src="/assets/image/tab-1.png" width="25"> Althan Travis
                                                    </td>
                                                    <td>1 Oct, 21</td>
                                                    <td>Wirecard for figma</td>
                                                    <td><i class="fa fa-check-circle-o green"></i><span
                                                            class="ms-1">Paid</span>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<script>
    window.setTimeout(function () {
        window.location.reload();
    }, 10000);

</script>