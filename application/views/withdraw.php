<style type="text/css">
  .table > thead > tr > th{
    font-size: 1.2em;
  }
</style>
<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Withdraw</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <!-- filter -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Search</h4>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Broker Name</label>
                        <input type="text" class="form-control" placeholder="Broker Name" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Name/Last Name</label>
                        <input type="text" class="form-control" placeholder="Name" value="Name">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Transaction No.</label>
                        <input type="email" class="form-control" placeholder="Transaction No.">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Bank Name/Bank Account</label>
                        <input type="text" class="form-control" placeholder="Bank Name/Bank Account" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Status</label>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label"> Pending
                                  <input class="form-check-input" type="checkbox" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label"> Approve
                                  <input class="form-check-input" type="checkbox" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label"> Reject
                                  <input class="form-check-input" type="checkbox" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- filter -->
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Withdraw Transaction</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th></th>
                      <th>Transaction No.</th>
                      <th>Broker Name</th>
                      <th>Name</th>
                      <th>Bank Info.</th>
                      <th>Amount (฿/$)</th>
                      <th>Date Create</th>
                      <th>Status</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">2019042211</td>
                        <td>
                          <img src="https://admin-fxprofit.fxprofitsharing.com/fileupload/broker/liteforex.png" title="LiteForex" width="30"> Lite Forex
                        </td>
                        <td class="text-center">Pattarachai Pothong</td>
                        <td>Kasikornthai/<br/>4024568391</td>
                        <td class="text-center"><span class="text-danger">500฿/<br/>50$</span></td>
                        <td class="text-center">22/05/2019 15:30</td>
                        <td class="text-center"><span class="text-success">Approve</span></td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">2019042222</td>
                        <td>
                          <img src="https://admin-fxprofit.fxprofitsharing.com/fileupload/broker/hantec.png" title="Hantec" width="30"> Hantec
                        </td>
                        <td class="text-center">Pattarachai Pothong</td>
                        <td>Kasikornthai/<br/>4024568391</td>
                        <td class="text-center"><span class="text-danger">500฿/<br/>50$</span></span></td>
                        <td class="text-center">22/05/2019 15:30</td>
                        <td class="text-center"><span class="text-danger">Reject</span></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      