
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> -->
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
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Deposit</h5>
                <h4 class="card-title text-success">2,000 $</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Withdraw</h5>
                <h4 class="card-title text-danger">1,500$</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Broker Static</h5>
                <h4 class="card-title">Last 7 days</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Broker Static -->
        <div class="row">
        	<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- <h5 class="card-category">Broker Summary</h5> -->
                <h4 class="card-title">Broker Summary</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Broker Name</th>
                      <th>All Transaction</th>
                      <th>Amount Deposit</th>
                      <th>Amount Withdraw</th>
                      <th>Status</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        	<img src="https://admin-fxprofit.fxprofitsharing.com/fileupload/broker/liteforex.png" title="LiteForex" width="30"> Lite Forex
                        </td>
                        <td class="text-center">200</td>
                        <td class="text-center"><span class="text-success">800$</span></td>
                        <td class="text-center"><span class="text-danger">600$</span></td>
                        <td><button class="btn btn-success btn-block">Active</button></td>
                      </tr>
                      <tr>
                        <td>
                        	<img src="https://admin-fxprofit.fxprofitsharing.com/fileupload/broker/hantec.png" title="Hantec" width="30"> Hantec
                        </td>
                        <td class="text-center">150</td>
                        <td class="text-center"><span class="text-success">500$</span></td>
                        <td class="text-center"><span class="text-danger">40$</span></td>
                        <td><button class="btn btn-primary btn-block">Inactive</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Broker Static -->

        <!-- Deposit Summary -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Deposit Summary</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Date</th>
                      <th>Total Record</th>
                      <th>Amount Deposit</th>
                      <th>Charge Fee</th>
                      <th>Totol Amount</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2019-04-21</td>
                        <td class="text-center">14</td>
                        <td class="text-center"><span class="text-success">800$</span></td>
                        <td class="text-center"><span class="text-success">50$</span></td>
                        <td class="text-center"><span class="text-success">850$</span></td>
                      </tr>
                      <tr>
                        <td>2019-04-20</td>
                        <td class="text-center">18</td>
                        <td class="text-center"><span class="text-success">900$</span></td>
                        <td class="text-center"><span class="text-success">10$</span></td>
                        <td class="text-center"><span class="text-success">910$</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Deposit Summary -->

        <!-- Deposit Summary -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Withdraw Summary</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Date</th>
                      <th>Total Record</th>
                      <th>Amount Withdraw</th>
                      <th>Charge Fee</th>
                      <th>Totol Amount</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2019-04-21</td>
                        <td class="text-center">14</td>
                        <td class="text-center"><span class="text-danger">800$</span></td>
                        <td class="text-center"><span class="text-danger">50$</span></td>
                        <td class="text-center"><span class="text-danger">850$</span></td>
                      </tr>
                      <tr>
                        <td>2019-04-20</td>
                        <td class="text-center">18</td>
                        <td class="text-center"><span class="text-danger">900$</span></td>
                        <td class="text-center"><span class="text-danger">10$</span></td>
                        <td class="text-center"><span class="text-danger">910$</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Deposit Summary -->
        
      </div>
      