<!-- content -->
<div class="container" id="links">
    <div class="row">
    <?php foreach ($all_devices as $a) :
    ?>
        <!-- pembungkus -->
        <div class="col-md-6">
            <div class="card-cont" style="margin-top:10px;">
                <div class="left">
                    <div class="dev-title">Device Status</div>
                    <div class="d-flex">
                        <div id="circle-list<?= $a['id'];?>" class="circle-ful"></div>
                        <div class="d-flex">
                            <div class="mt-auto mb-auto">
                                <div class="d-flex">
                                    <div class="text">
                                        <div>
                                            <span><?= $a['nama_sensor'];?></span>
                                            <!-- <span>58 C</span> -->
                                        </div>
                                        <!-- <div>
                                            <span>Temperature</span>
                                        </div>
                                        <div>
                                            <span>Power Consumtion</span>
                                        </div> -->
                                    </div>
                                    <div class="data">
                                        <div>
                                            <span> : <?= $a['val'];?> C</span>
                                        </div>
                                        <!-- <div>
                                            <span>: 31 C</span>
                                        </div>
                                        <div>
                                            <span>: 5 W</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <span class="m-0 tex-grrr ms-auto">Status</span>
                    <span class="m-0 st-online"><?= $a['statuses'];?></span>
                </div>
            </div>
        </div>
    <?php endforeach;?>
        <!-- penutup bungkus -->
    </div>
</div>


<script>
    window.setTimeout(function () {
        window.location.reload();
    }, 10000);

</script>