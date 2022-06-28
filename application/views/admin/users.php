<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-cont" style="margin-top:10px;">
                <div class="left">
                    <div class="dev-title">Device Status</div>
                    <div class="d-flex">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="circle-1" class="circle-ful"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-5 mb-5 mar-sing">
                                    <div class="d-flex" style="font-size:19px;">
                                        <div class="text">
                                            <div>
                                                <span><b>Humidity</b></span>
                                            </div>
                                            <div>
                                                <span><b>Temperature</b></span>
                                            </div>
                                        </div>
                                        <div class="ms-2">
                                            <div>
                                                <span><b>: 58 C</b></span>
                                            </div>
                                            <div>
                                                <span><b>: 31 C</b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- right -->
        <div class="col-md-6">
            <div class="card-cont" style="margin-top:10px;">
                <div class="container">
                    <div class="dev-title">Daily Status</div>
                    <canvas id="myChart2" class="user-chart-line" height="116"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table -->
<div class="container">
    <div class="card bx-shadow" style="margin-top: 10px;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sensor</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Connected</td>
                            <td class="text-center d-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Turn On
                                        / Off</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Not Connected</td>
                            <td class="text-center d-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Turn On
                                        / Off</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>los agnel</td>
                            <td>Connected</td>
                            <td class="text-center d-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Turn On
                                        / Off</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>