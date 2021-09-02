{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-9 col-xxl-12">
      <div class="row">
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body pb-0 px-4 pt-4">
              <div class="row">
                <div class="col">
                  <h5 class="mb-1">2000</h5>
                  <span class="text-success">Total Sale</span>
                </div>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
          <div class="card bg-success	overflow-hidden">
            <div class="card-body pb-0 px-4 pt-4">
              <div class="row">
                <div class="col">
                  <h5 class="text-white mb-1">$14000</h5>
                  <span class="text-white">Total Eraning</span>
                </div>
              </div>
            </div>
            <div class="chart-wrapper" style="width:100%">
              <span class="peity-line" data-width="100%">6,2,8,4,3,8,4,3,6,5,9,2</span>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
          <div class="card bg-primary overflow-hidden">
            <div class="card-body pb-0 px-4 pt-4">
              <div class="row">
                <div class="col text-white">
                  <h5 class="text-white mb-1">570</h5>
                  <span>VIEWS OF YOUR PROJECT</span>
                </div>
              </div>
            </div>
            <div class="chart-wrapper px-2">
              <canvas id="chart_widget_2" height="100"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body px-4 py-4">
              <h5 class="mb-3">1700 / <small class="text-primary">Sales Status</small></h5>
              <div class="chart-point">
                <div class="check-point-area">
                  <canvas id="ShareProfit2"></canvas>
                </div>
                <ul class="chart-point-list">
                  <li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
                  <li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
                  <li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header border-0 pb-0">
              <h4 class="card-title">Timeline</h4>
            </div>
            <div class="card-body">
              <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1" style="height:250px;">
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge primary"></div>
                    <a class="timeline-panel text-muted" href="#">
                      <span>10 minutes ago</span>
                      <h6 class="mb-0">Youtube, a video-sharing website <strong class="text-primary">$500</strong>.</h6>
                    </a>
                  </li>
                  <li>
                    <div class="timeline-badge info">
                    </div>
                    <a class="timeline-panel text-muted" href="#">
                      <span>20 minutes ago</span>
                      <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                      <p class="mb-0">Quisque a consequat ante Sit...</p>
                    </a>
                  </li>
                  <li>
                    <div class="timeline-badge danger">
                    </div>
                    <a class="timeline-panel text-muted" href="#">
                      <span>30 minutes ago</span>
                      <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                    </a>
                  </li>
                  <li>
                    <div class="timeline-badge success">
                    </div>
                    <a class="timeline-panel text-muted" href="#">
                      <span>15 minutes ago</span>
                      <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header border-0 pb-0">
              <h4 class="card-title">Recent Payments Queue</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive-sm mb-0">
                  <thead>
                    <tr>
                      <th style="width:20px;">
                        <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                          <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                          <label class="custom-control-label" for="checkAll"></label>
                        </div>
                      </th>
                      <th><strong>STATUS.</strong></th>
                      <th><strong>NAME</strong></th>
                      <th><strong>DATE</strong></th>
                      <th><strong>STATUS</strong></th>
                      <th style="width:85px;"><strong>EDIT</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox check-lg mr-3">
                          <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                          <label class="custom-control-label" for="customCheckBox2"></label>
                        </div>
                      </td>
                      <td><b>$542</b></td>
                      <td>Dr. Jackson</td>
                      <td>01 August 2020</td>
                      <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>Successful</td>
                      <td>
                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox check-lg mr-3">
                          <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                          <label class="custom-control-label" for="customCheckBox3"></label>
                        </div>
                      </td>
                      <td><b>$2000</b></td>
                      <td>Dr. Jackson</td>
                      <td>01 August 2020</td>
                      <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>Canceled</td>
                      <td>
                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox check-lg mr-3">
                          <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                          <label class="custom-control-label" for="customCheckBox4"></label>
                        </div>
                      </td>
                      <td><b>$300</b></td>
                      <td>Dr. Jackson</td>
                      <td>01 August 2020</td>
                      <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-warning mr-1"></i>Pending</td>
                      <td>
                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox check-lg mr-3">
                          <input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
                          <label class="custom-control-label" for="customCheckBox5"></label>
                        </div>
                      </td>
                      <td><b>$2000</b></td>
                      <td>Dr. Jackson</td>
                      <td>01 August 2020</td>
                      <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>Canceled</td>
                      <td>
                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
      <div class="card bg-primary text-white">
        <div class="card-header pb-0 border-0">
          <h4 class="card-title text-white">TOP PRODUCTS</h4>
        </div>
        <div class="card-body"> 
          <div class="widget-media">
            <ul class="timeline">
              <li>
                <div class="timeline-panel">
                  <div class="media mr-2">
                    <img alt="image" width="50" src="{{ asset('images/avatar/1.jpg') }}">
                  </div>
                  <div class="media-body">
                    <h5 class="mb-1 text-white">Dr Sultads Send You</h5>
                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                  </div>
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-panel">
                  <div class="media mr-2 media-info">
                    KG
                  </div>
                  <div class="media-body">
                    <h5 class="mb-1 text-white">Resport created</h5>
                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                  </div>
                  <div class="dropdown">
                    <button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-panel">
                  <div class="media mr-2 media-success">
                    <i class="fa fa-home"></i>
                  </div>
                  <div class="media-body">
                    <h5 class="mb-1 text-white">Reminder : Treatment</h5>
                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                  </div>
                  <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <canvas id="lineChart_3Kk"></canvas> 							
      </div>
      
      <!-- <div class="col-lg-12 col-sm-12">
        <div class="card bg-primary">
        <div class="card-header border-0 pb-0">
        <h4 class="card-title">Dual Line Chart</h4>
        </div>
        <div class="card-body">
        
        </div>
        <canvas id="lineChart_3Kk"></canvas>
        </div>
      </div> -->
    </div>
    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
      <div class="card bg-info activity_overview">
        <div class="card-header  border-0 pb-3 ">
          <h4 class="card-title text-white">Activity</h4>
        </div>
        <div class="card-body pt-0">
          <div class="custom-tab-1">
            <ul class="nav nav-tabs mb-2">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#sale">Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#overview">Overview</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active show" id="sale">
                <canvas id="chart_widget_4"></canvas>
              </div>
              <div class="tab-pane fade " id="overview" role="tabpanel">
                <div class="pt-4 text-white">
                  <h4 class="text-white">This is home title</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                  </p>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                  </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
      <div class="card active_users">
        <div class="card-header bg-success border-0 pb-0">
          <h4 class="card-title text-white">Active Users</h4>
        </div>
        <div class="bg-success">
          <canvas id="activeUser" height="200"></canvas>
        </div>
        <div class="card-body pt-0">
          <div class="list-group-flush mt-4">
            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
              <p class="mb-0">Top Active Pages</p>
              <p class="mb-0">Active Users</p>
            </div>
            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
              <p class="mb-0">/bootstrap-themes/</p>
              <p class="mb-0">3</p>
            </div>
            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
              <p class="mb-0">/tags/html5/</p>
              <p class="mb-0">3</p>
            </div>
            <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
              <p class="mb-0">/</p>
              <p class="mb-0">2</p>
            </div>
            <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
              <p class="mb-0">/preview/falcon/dashboard/</p>
              <p class="mb-0">2</p>
            </div>
            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
              <p class="mb-0">/100-best-themes...all-time/</p>
              <p class="mb-0">1</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12 col-lg-12 col-md-12">
      <div id="user-activity" class="card">
        <div class="card-header border-0 pb-0 d-sm-flex d-block">
          <div>
            <h4 class="card-title">History 2013 - 2020</h4>
            <p class="mb-1">Lorem Ipsum is simply dummy text of the printing</p>
          </div>
          <div class="card-action">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                  Day
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#session" role="tab">
                Week
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                  Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                  Year
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="user" role="tabpanel">
              <canvas id="activity" class="chartjs"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection			