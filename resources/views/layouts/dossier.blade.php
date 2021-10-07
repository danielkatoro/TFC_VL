@extends('layouts._default',['title'=>'Dossiers'])

@section('content')
    <!-- END ONLY DEV -->

    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>

        <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;"
                 data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->

    <!-- ========== HEADER ========== -->
    

    

    
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Dossier</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Aperçu</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Aperçu</h1>
            </div>

            <div class="col-sm-auto">
              <div id="newProjectPopover" data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>Nouveau Dossier <a href='#!' class='text-white ml-auto'><i id='closeNewProjectPopover' class='tio-clear'></i></a></div>" data-content="Remplissez ce formulaire pour un nouveau " data-html="true">
                <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                  <i class="tio-add mr-1"></i> Nouveau Dossier
                </a>
              </div>
            </div>
          </div>
          <!-- End Row -->

          <!-- Nav -->
          <ul class="nav nav-tabs page-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="{{  route('dossier') }}">
                Dossier <span class="badge badge-soft-dark ml-1">24</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projects-timeline.php">
                Timeline
              </a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Body -->
          <div class="card-body">
            <div class="media align-items-md-center">
              <span class="display-3 text-dark mr-3">24</span>

              <div class="media-body">
                <div class="row mx-md-n3">
                  <div class="col-md px-md-4">
                    <span class="d-block">Total Dossier</span>
                    <span class="badge badge-soft-danger badge-pill p-1"><i class="tio-trending-down"></i> -2 late in due</span>
                  </div>

                  <div class="col-md-9 col-lg-10 column-divider-md px-md-4">
                    <!-- Legend Indicators -->
                    <div class="row justify-content-start mb-2">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span>
                        En cours (10)
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator bg-success"></span>
                        Cloturés (8)
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator"></span>
                        A faire (6)
                      </div>
                    </div>
                    <!-- End Legend Indicators -->

                    <!-- Progress -->
                    <div class="progress rounded-pill">
                      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-sm-6">
                <div class="d-flex justify-content-sm-end align-items-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;"><i class="tio-delete-outlined"></i> Delete</a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                  <!-- Unfold -->
                  <div class="hs-unfold mr-2">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;"
                       data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-download-to mr-1"></i> Export
                    </a>

                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                      <span class="dropdown-header">Options</span>
                      <a id="export-copy" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ asset('svg/illustrations/copy.svg') }}" alt="Image Description">
                        Copy
                      </a>
                      <a id="export-print" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ asset('svg/illustrations/print.svg') }}" alt="Image Description">
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a id="export-excel" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ asset('svg/brands/excel.svg') }}" alt="Image Description">
                        Excel
                      </a>
                      <a id="export-csv" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ asset('svg/components/placeholder-csv-format.svg') }}" alt="Image Description">
                        .CSV
                      </a>
                      <a id="export-pdf" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ asset('svg/brands/pdf.svg') }}" alt="Image Description">
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;"
                       data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                      <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
                    </a>

                    <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                      <!-- Card -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-title">Filter users</h5>

                          <!-- Toggle Button -->
                          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="javascript:;"
                             data-hs-unfold-options='{
                              "target": "#usersFilterDropdown",
                              "type": "css-animation",
                              "smartPositionOff": true
                             }'>
                            <i class="tio-clear tio-lg"></i>
                          </a>
                          <!-- End Toggle Button -->
                        </div>

                        <div class="card-body">
                          <form>
                            <div class="form-group">
                              <small class="text-cap mb-2">Role</small>

                              <div class="form-row">
                                <div class="col">
                                  <!-- Checkbox -->
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersFilerCheck1" checked>
                                    <label class="custom-control-label" for="usersFilerCheck1">All</label>
                                  </div>
                                  <!-- End Checkbox -->
                                </div>

                                <div class="col">
                                  <!-- Checkbox -->
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersFilerCheck2">
                                    <label class="custom-control-label" for="usersFilerCheck2">Employee</label>
                                  </div>
                                  <!-- End Checkbox -->
                                </div>
                              </div>
                              <!-- End Row -->
                            </div>

                            <div class="form-row">
                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Due date</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter"
                                        data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Any</option>
                                  <option value="This week">This week</option>
                                  <option value="Next week">Next week</option>
                                  <option value="Next month">Next month</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Status</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter"
                                        data-target-column-index="4"
                                        data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Any status</option>
                                  <option value="Completed" data-option-template='<span class="legend-indicator bg-success"></span>Completed'>Completed</option>
                                  <option value="In progress" data-option-template='<span class="legend-indicator bg-primary"></span>In progress'>In progress</option>
                                  <option value="To do" data-option-template='<span class="legend-indicator"></span>To do'>To do</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <div class="col-12 form-group">
                                <small class="text-cap mb-2">Members</small>

                                <!-- Select -->
                                <select class="js-select2-custom" multiple
                                        data-hs-select2-options='{
                                          "singleMultiple": true,
                                          "placeholder": "Select a member"
                                        }'>
                                  <option label="empty"></option>
                                  <option value="AH" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset("img/160x160/img10.jpg") }}" alt="Image Description" /><span class="text-truncate">Amanda Harvey</span></span>'>Amanda Harvey</option>
                                  <option value="DH" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset("img/160x160/img3.jpg") }}" alt="Image Description" /><span class="text-truncate">David Harrison</span></span>'>David Harrison</option>
                                  <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset("img/160x160/img4.jpg") }}" alt="Image Description" /><span class="text-truncate">Sam Kart</span></span>'>Sam Kart</option>
                                  <option value="FH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset("img/160x160/img5.jpg") }}" alt="Image Description" /><span class="text-truncate">Finch Hoot</span></span>'>Finch Hoot</option>
                                  <option value="CQ" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset("img/160x160/img00.jpg") }}" alt="Image Description" /><span class="text-truncate">Costa Quinn</span></span>'>Costa Quinn</option>
                                </select>
                                <!-- End Select -->
                              </div>
                            </div>
                            <!-- End Row -->

                            <a class="btn btn-block btn-primary" href="javascript:;">Apply</a>
                          </form>
                        </div>
                      </div>
                      <!-- End Card -->
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                   data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 2, 3, 6, 7],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Dossier</th>
                  <th>Clients</th>
                  <th>Avocat en charge</th>
                  <th>Status</th>
                  <th>Adversaire</th>
                  <th><i class="tio-attachment-diagonal"></i></th>
                  <th><i class="tio-chat-outlined"></i></th>
                  <th>Date Création</th>
                </tr>
              </thead>

              @foreach($dossiers as $row)
              <tr>
                <td>{{ $row['nomClient'] }}</td>
                <td>{{ $row['nomDossier'] }}</td>
                <td>{{ $row['description'] }}</td>
                <td>{{ $row['statut'] }}</td>
                <td>{{ $row['termes'] }}</td>
                <td>{{ $row['created_at'] }}</td>
              </tr>
              @endforeach

              <tbody>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                      <label class="custom-control-label" for="usersDataCheck1"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/guideline.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Cloud computing web service</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 2 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      120 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+2</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                        <img class="avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="David Harrison">
                        <img class="avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                        <span class="avatar-initials">A</span>
                      </a>
                      <a class="avatar avatar-soft-info" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sara Iwens">
                        <span class="avatar-initials">S</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                        <img class="avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">35%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 10
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 2
                    </a>
                  </td>
                  <td>05 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">I</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Improve profile UX <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Earned extra bonus"></i></span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 4 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>28</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 17
                    </a>
                  </td>
                  <td>01 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck11">
                      <label class="custom-control-label" for="usersDataCheck11"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/capsule.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Build stronger customer relationships</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 months ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>1</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                        <img class="avatar-img" src="{{ asset('img/160x160/img00.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                        <span class="avatar-initials">A</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 1
                    </a>
                  </td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">U</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Update social banners</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 week ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>21</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                        <img class="avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                        <span class="avatar-initials">B</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Linda Bates">
                        <img class="avatar-img" src="{{ asset('img/160x160/img8.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                        <img class="avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">5%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 3
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 21
                    </a>
                  </td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/mailchimp.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Update subscription method <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Earned extra bonus"></i></span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 2 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>0</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                        <img class="avatar-img" src="{{ asset('img/160x160/img00.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                        <span class="avatar-initials">A</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 9
                    </a>
                  </td>
                  <td>25 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck12">
                      <label class="custom-control-label" for="usersDataCheck12"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">E</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Extend Spotify mobile app features</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 day ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      27 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+2</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                        <img class="avatar-img" src="{{ asset('img/160x160/img00.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-info" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                        <span class="avatar-initials">B</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                        <img class="avatar-img" src="{{ asset('img/160x160/img4.jpg') }}" alt="Image Description">
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">71%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 2
                    </a>
                  </td>
                  <td>-</td>
                  <td>19 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                      <label class="custom-control-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/spec.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Install Front pay</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 23 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>7</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">83%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 1
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 1
                    </a>
                  </td>
                  <td>30 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Binance-chain <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Earned extra bonus"></i></span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 14 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      19 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+1</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                        <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="David Harrison">
                        <img class="avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-info" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Lisa Iston">
                        <span class="avatar-initials">L</span>
                      </a>
                      <a class="avatar avatar-light avatar-circle" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                        <span class="avatar-initials">+5</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/jira.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Develop Slack mobile app</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 18 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      32 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+5</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                        <img class="avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="David Harrison">
                        <img class="avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                        <span class="avatar-initials">A</span>
                      </a>
                      <a class="avatar avatar-light avatar-circle" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                        <span class="avatar-initials">+3</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>-</td>
                  <td>25 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck10">
                      <label class="custom-control-label" for="usersDataCheck10"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">G</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Get a complete store audit</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 2 weeks ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      10 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="task completed today">+1</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                        <img class="avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                        <span class="avatar-initials">B</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                        <span class="avatar-initials">A</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">30%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 3
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 15
                    </a>
                  </td>
                  <td>01 June</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/figma.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Create a new theme <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Earned extra bonus"></i></span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 5 days ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>2</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 33
                    </a>
                  </td>
                  <td>08 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck15">
                      <label class="custom-control-label" for="usersDataCheck15"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/google-webdev.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Create a new database for Webdev</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 2 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>0</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                        <img class="avatar-img" src="{{ asset('img/160x160/img4.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Teresa Eyker">
                        <span class="avatar-initials">T</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                        <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-light avatar-circle" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                        <span class="avatar-initials">+9</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 1
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 7
                    </a>
                  </td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck14">
                      <label class="custom-control-label" for="usersDataCheck14"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">M</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Marketing &amp; Communications</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 2 months ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      44 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+5</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                        <img class="avatar-img" src="{{ asset('img/160x160/img4.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Teresa Eyker">
                        <span class="avatar-initials">T</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                        <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">37%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 2
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 9
                    </a>
                  </td>
                  <td>14 June</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck13">
                      <label class="custom-control-label" for="usersDataCheck13"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/bookingcom.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Set up a datatable for Booking.com</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 13 days ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>0</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 10
                    </a>
                  </td>
                  <td>-</td>
                  <td>05 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck16">
                      <label class="custom-control-label" for="usersDataCheck16"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">C</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Create a new marketing campaign</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 day ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>5</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                        <img class="avatar-img" src="{{ asset('img/160x160/img00.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Zack Ins">
                        <span class="avatar-initials">Z</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">90%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 1
                    </a>
                  </td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/prosperops.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Prosperops</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 hour ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>21</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">7%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 2
                    </a>
                  </td>
                  <td>-</td>
                  <td>26 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck17">
                      <label class="custom-control-label" for="usersDataCheck17"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">I</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Increase productivity with reviews</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 30 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      10 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="tasks completed today">+7</a>
                    </div>
                  </td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">80%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 2
                    </a>
                  </td>
                  <td>06 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck18">
                      <label class="custom-control-label" for="usersDataCheck18"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/spotify.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Redesigning the Spotify main page</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 27 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>48</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                        <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="David Harrison">
                        <img class="avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-info" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Lisa Iston">
                        <span class="avatar-initials">L</span>
                      </a>
                      <a class="avatar avatar-light avatar-circle" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                        <span class="avatar-initials">+5</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 5
                    </a>
                  </td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck19">
                      <label class="custom-control-label" for="usersDataCheck19"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">T</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">The Hub Dossier <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Earned extra bonus"></i></span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 9 hours ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>5</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                        <img class="avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                        <span class="avatar-initials">B</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Linda Bates">
                        <img class="avatar-img" src="{{ asset('img/160x160/img8.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                        <img class="avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-success mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 1
                    </a>
                  </td>
                  <td>-</td>
                  <td>12 June</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck20">
                      <label class="custom-control-label" for="usersDataCheck20"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/digitalocean.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Working on a new Cloud computing</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 5 days ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>8</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                        <img class="avatar-img" src="{{ asset('img/160x160/img00.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                        <span class="avatar-initials">A</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">12%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 4
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 29
                    </a>
                  </td>
                  <td>22 July</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck21">
                      <label class="custom-control-label" for="usersDataCheck21"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Launch social network campaign</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 46 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>1</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-primary"></span>In progress
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">50%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 5
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 11
                    </a>
                  </td>
                  <td>-</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck22">
                      <label class="custom-control-label" for="usersDataCheck22"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/atlassian.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">New software tool</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 7 minutes ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>22</td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                        <img class="avatar-img" src="{{ asset('img/160x160/img4.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Teresa Eyker">
                        <span class="avatar-initials">T</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                        <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-light avatar-circle" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                        <span class="avatar-initials">+9</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 7
                    </a>
                  </td>
                  <td>-</td>
                  <td>05 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck23">
                      <label class="custom-control-label" for="usersDataCheck23"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <img class="avatar" src="{{ asset('svg/brands/frontapp.svg') }}" alt="Image Description">
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Increase email conversion rating</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 1 hour ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      9 <a class="badge badge-soft-dark ml-1" href="javascript:;" data-toggle="tooltip" data-placement="top" title="task completed today">+1</a>
                    </div>
                  </td>
                  <td>
                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-xs avatar-circle">
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                        <img class="avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-dark" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                        <span class="avatar-initials">B</span>
                      </a>
                      <a class="avatar" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                        <img class="avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                      </a>
                      <a class="avatar avatar-soft-danger" href="user-profile.php" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                        <span class="avatar-initials">A</span>
                      </a>
                    </div>
                    <!-- End Avatar Group -->
                  </td>
                  <td>
                    <span class="legend-indicator"></span>To do
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="text-body" href="project-files.php">
                      <i class="tio-attachment-diagonal"></i> 2
                    </a>
                  </td>
                  <td>
                    <a class="text-body" href="/chatify">
                      <i class="tio-chat-outlined"></i> 5
                    </a>
                  </td>
                  <td>01 May</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck24">
                      <label class="custom-control-label" for="usersDataCheck24"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="project.php">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">E</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Ethereum Dossier</span>
                        <!-- <span class="d-block font-size-sm text-body">Updated 5 days ago</span> -->
                      </div>
                    </a>
                  </td>
                  <td>4</td>
                  <td>No assignee</td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Completed
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm text-primary mr-2">95%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>-</td>
                  <td>
                    <a class="text-body" href="#">
                      <i class="tio-chat-outlined"></i> 1
                    </a>
                  </td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="10">10</option>
                    <option value="15" selected>15</option>
                    <option value="20">20</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
      @include('layouts/_footer')

      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card sidebar-scrollbar">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow sidebar-scrollbar">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="{{ asset('svg/brands/excel.svg') }}" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="{{ asset('svg/brands/word.svg') }}" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('svg/illustrations/card-1.svg') }}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('svg/illustrations/card-2.svg') }}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('svg/illustrations/card-3.svg') }}" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('img/160x160/img7.jpg') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('img/160x160/img5.jpg') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Dossier status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="{{ asset('svg/illustrations/graphs.svg') }}" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('svg/brands/gitlab-gray.svg') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('svg/brands/fitbit-gray.svg') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('svg/brands/flow-xo-gray.svg') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('svg/brands/layar-gray.svg') }}" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- New Project Modal -->
    <div class="modal fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="newProjectModalTitle" class="modal-title">Nouveau Dossier</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Step Form -->
            <form class="js-step-form"
                  data-hs-step-form-options='{
                    "progressSelector": "#createProjectStepFormProgress",
                    "stepsSelector": "#createProjectStepFormContent",
                    "endSelector": "#createProjectFinishBtn",
                    "isValidate": false
                  }'>
              <!-- Step -->
              <ul id="createProjectStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#createProjectStepDetails"
                    }'>
                    <span class="step-icon step-icon-soft-dark">1</span>
                    <div class="step-content">
                      <span class="step-title">Details</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                       "targetSelector": "#createProjectStepTerms"
                     }'>
                    <span class="step-icon step-icon-soft-dark">2</span>
                    <div class="step-content">
                      <span class="step-title">Termes du contrat</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                       "targetSelector": "#createProjectStepMembers"
                     }'>
                    <span class="step-icon step-icon-soft-dark">3</span>
                    <div class="step-content">
                      <span class="step-title">Membres</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Step -->

              <!-- Content Step Form -->
              <div id="createProjectStepFormContent">
                <div id="createProjectStepDetails" class="active">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Logo dossier</label>

                    <div class="d-flex align-items-center">
                      <!-- Avatar -->
                      <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarNewProjectUploader">
                        <img id="avatarNewProjectImg" class="avatar-img" src="{{ asset('img/160x160/img2.jpg') }}" alt="Image Description">

                        <input type="file" class="js-file-attach avatar-uploader-input" id="avatarNewProjectUploader"
                               data-hs-file-attach-options='{
                                  "textTarget": "#avatarNewProjectImg",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "resetTarget": ".js-file-attach-reset-img",
                                  "resetImg": "./{{ asset('img/160x160/img1.jpg') }}"
                               }'>

                        <span class="avatar-uploader-trigger">
                          <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                        </span>
                      </label>
                      <!-- End Avatar -->

                      <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="clientNewProjectLabel" class="input-label">Client</label>

                    <div class="form-row align-items-center">
                      <div class="col-12 col-md-7 mb-3">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tio-account-square-outlined"></i>
                            </div>
                          </div>
                          <input class="js-tagify-avatars tagify-form-control form-control" id="clientNewProjectLabel" placeholder="Ajouter un client Existant" aria-label="Add creater name"
                                 data-hs-tagify-options='{
                                   "delimiters": null,
                                   "enforceWhitelist": true,
                                   "whitelist": [
                                     {
                                       "value": "Htmlstream",
                                       "src": "./{{ asset("svg/brands/htmlstream.svg") }}"
                                     },{
                                       "value": "Digitalocean",
                                       "src": "./{{ asset("svg/brands/digitalocean.svg") }}"
                                     }, {
                                       "value": "Google",
                                       "src": "./{{ asset("svg/brands/google.svg") }}"
                                     }, {
                                       "value": "Mailchimp",
                                       "src": "./{{ asset("svg/brands/mailchimp.svg") }}"
                                     }, {
                                       "value": "Prosperops",
                                       "src": "./{{ asset("svg/brands/prosperops.svg") }}"
                                     }, {
                                       "value": "Spec",
                                       "src": "./{{ asset("svg/brands/spec.svg") }}"
                                     }, {
                                       "value": "Spotify",
                                       "src": "./{{ asset("svg/brands/spotify.svg") }}"
                                     }, {
                                       "value": "Frontapp",
                                       "src": "./{{ asset("svg/brands/frontapp.svg") }}"
                                     }, {
                                       "value": "Figma",
                                       "src": "./{{ asset("svg/brands/figma.svg") }}"
                                     }, {
                                       "value": "Bookingcom",
                                       "src": "./{{ asset("svg/brands/bookingcom.svg") }}"
                                     }
                                   ],
                                   "dropdown": {
                                     "enabled": 1,
                                     "classname": "tagify__dropdown__menu"
                                   }
                                 }'>
                        </div>
                      </div>

                      <span class="col-auto mb-3">ou</span>

                      <div class="col-md mb-md-3">
                        <a class="btn btn-white" href="javascript:;">
                          <i class="tio-add mr-1"></i>Nouveau client
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="projectNameNewProjectLabel" class="input-label">Nom du Dossier <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="projectName" id="projectNameNewProjectLabel" placeholder="Entrer le nom du projet ici" aria-label="Enter project name here">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Quill -->
                  <div class="form-group">
                    <label class="input-label">Description du Dossier <span class="input-label-secondary">(Optional)</span></label>

                    <!-- Quill -->
                    <div class="quill-custom mb-3 mb-lg-7">
                      <div id="toolbar-container">
                        <ul class="list-inline ql-toolbar-list">
                          <li class="list-inline-item">
                            <button class="ql-bold"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-italic"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-underline"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-strike"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-link"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-image"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-blockquote"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-code"></button>
                          </li>
                          <li class="list-inline-item">
                            <button class="ql-list" value="bullet"></button>
                          </li>
                        </ul>
                      </div>

                      <div class="js-quill" style="min-height: 15rem;"
                           data-hs-quill-options='{
                              "placeholder": "Ecrire votre message...",
                              "toolbarBottom": true,
                              "attach": "#newProjectModal",
                              "modules": {
                                "toolbar": "#toolbar-container"
                              }
                             }'>
                      </div>
                    </div>
                    <!-- End Quill -->
                  </div>
                  <!-- End Quill -->

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="projectDeadlineFlatpickrNewProjectLabel" class="input-label">Date création</label>

                        <div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr flatpickr-custom input-group input-group-merge"
                             data-hs-flatpickr-options='{
                              "appendTo": "#projectDeadlineNewProjectFlatpickr",
                              "dateFormat": "d/m/Y",
                              "wrap": true
                            }'>
                          <div class="input-group-prepend" data-toggle>
                            <div class="input-group-text">
                              <i class="tio-date-range"></i>
                            </div>
                          </div>

                          <input type="text" class="flatpickr-custom-form-control form-control" id="projectDeadlineFlatpickrNewProjectLabel" placeholder="Select dates" data-input value="29/06/2020">
                        </div>
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-sm-6">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="ownerNewProjectLabel" class="input-label">Avocat principal en charge</label>

                        <!-- Form Group -->
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tio-dollar-outlined"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" name="expectedValue" id="expectedValueNewProjectLabel" placeholder="Enter value here" aria-label="Entrer la valeur ici">
                          </div>
                        </div>
                        <!-- End Form Group -->

                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Fichier attachés</label>

                    <!-- Dropzone -->
                    <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                      <div class="dz-message custom-file-boxed-label">
                        <img class="avatar avatar-xl avatar-4by3 mb-3" src="{{ asset('svg/illustrations/browse.svg') }}" alt="Image Description">
                        <h5 class="mb-1">Choose files to upload</h5>
                        <p class="mb-2">or</p>
                        <span class="btn btn-sm btn-primary">Browse files</span>
                      </div>
                    </div>
                    <!-- End Dropzone -->
                  </div>
                  <!-- End Form Group -->

                  <!-- End Row -->

                  <!-- Footer -->
                  <div class="d-flex align-items-center">
                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#createProjectStepTerms"
                              }'>
                        Suivant <i class="tio-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>

                <div id="createProjectStepTerms" style="display: none;">
                  <!-- Form Row -->
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="paymentTermsNewProjectLabel" class="input-label">Termes</label>

                        <!-- Select -->
                        <div class="select2-custom">
                          <select class="js-select2-custom" id="paymentTermsNewProjectLabel"
                                  data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="fixed" selected>Fixe</option>
                            <option value="Per hour">Selon le nombre de Jour</option>
                            <option value="Per day">Barème</option>
                            <option value="Per week">Per week</option>
                            <option value="Per month">Per month</option>
                            <option value="Per quarter">Per quarter</option>
                            <option value="Per year">Per year</option>
                          </select>
                         </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-sm-6">
                      <label for="expectedValueNewProjectLabel" class="input-label">Montatnt</label>

                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tio-dollar-outlined"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" name="expectedValue" id="expectedValueNewProjectLabel" placeholder="Enter value here" aria-label="Entrer la valeur ici">
                        </div>
                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Form Row -->

                  <!-- Form Row -->
                  <div class="row">
                    <div class="col-lg-6">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="milestoneNewProjectLabel" class="input-label">Statut <a class="small ml-1" href="javascript:;">Change probability</a></label>

                        <!-- Select -->
                        <div class="select2-custom">
                          <select class="js-select2-custom" id="milestoneNewProjectLabel"
                                  data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="New">A faire</option>
                            <option value="Qualified">En cours</option>
                            <option value="Meeting">Cloturé</option>
                            
                          </select>
                         </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-lg-6">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="privacyNewProjectLabel" class="input-label mr-2">Privacy</label>

                        <!-- Select -->
                        <div class="select2-custom">
                          <select class="js-select2-custom" id="privacyNewProjectLabel"
                                  data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="privacy1" data-option-template='<span class="media"><i class="tio-group-senior tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Everyone</span><small class="select2-custom-hide">Public to Front Dashboard</small></span></span>'>Everyone</option>
                            <option value="privacy2" disabled data-option-template='<span class="media"><i class="tio-lock-outlined tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Private to project members <span class="badge badge-soft-primary">Upgrade to Premium</span></span><small class="select2-custom-hide">Only visible to project members</small></span></span>'>Private to project members</option>
                            <option value="privacy2" data-option-template='<span class="media"><i class="tio-user-outlined tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Private to me</span><small class="select2-custom-hide">Only visible to you</small></span></span>'>Private to me</option>
                          </select>
                         </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Form Row -->

                  <!-- Checkbox -->
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="budgetNewProjectCheckbox">
                    <label class="custom-control-label" for="budgetNewProjectCheckbox">Budget resets every month</label>
                  </div>
                  <!-- End Checkbox -->

                  <!-- Checkbox -->
                  <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="emailAlertNewProjectCheckbox" checked>
                    <label class="custom-control-label" for="emailAlertNewProjectCheckbox">Send email alerts if project exceeds <span class="font-weight-bold">50.00%</span> of budget</label>
                  </div>
                  <!-- End Checkbox -->

                  <!-- Footer -->
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary mr-2"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#createProjectStepDetails"
                       }'>
                      <i class="tio-chevron-left"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#createProjectStepMembers"
                              }'>
                        Suivant <i class="tio-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>

                <div id="createProjectStepMembers" style="display: none;">
                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="input-group input-group-merge mb-2 mb-sm-0">
                      <div class="input-group-prepend" id="fullNameNewProject">
                        <span class="input-group-text">
                          <i class="tio-search"></i>
                        </span>
                      </div>

                      <input type="text" class="form-control" name="fullNameNewProject" placeholder="Search name or emails" aria-label="Search name or emails" aria-describedby="fullNameNewProject">

                      <div class="input-group-append input-group-append-last-sm-down-none">
                        <!-- Select -->
                        <div id="permissionNewProjectSelect" class="select2-custom select2-custom-right">
                          <select class="js-select2-custom"
                                  data-hs-select2-options='{
                                    "dropdownParent": "#permissionNewProjectSelect",
                                    "minimumResultsForSearch": "Infinity",
                                    "dropdownAutoWidth": true,
                                    "dropdownWidth": "10rem"
                                  }'>
                            <option value="guest" selected>Guest</option>
                            <option value="can edit">Can edit</option>
                            <option value="can comment">Can comment</option>
                            <option value="full access">Full access</option>
                          </select>
                        </div>
                        <!-- End Select -->

                        <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Add member</a>
                      </div>
                    </div>

                    <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Add member</a>
                  </div>
                  <!-- End Form Group -->

                  <ul class="list-unstyled list-unstyled-py-4 mb-5">
                    <!-- List Group Item -->
                    <li>
                      <div class="media">
                        <span class="icon icon-sm icon-soft-dark icon-circle mr-3">
                          <i class="tio-group-senior"></i>
                        </span>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-12 col-sm">
                              <h5 class="text-body mb-0">#digitalmarketing</h5>
                              <span class="d-block font-size-sm">8 members</span>
                            </div>

                            <div class="col-12 col-sm">
                              <!-- Select -->
                              <div id="inviteUserNewProjectSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                                <select class="js-select2-custom"
                                        data-hs-select2-options='{
                                          "dropdownParent": "#inviteUserNewProjectSelect1",
                                          "minimumResultsForSearch": "Infinity",
                                          "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                          "dropdownAutoWidth": true,
                                          "width": true
                                        }'>
                                  <option value="guest">Guest</option>
                                  <option value="can edit" selected>Can edit</option>
                                  <option value="can comment">Can comment</option>
                                  <option value="full access">Full access</option>
                                  <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
                          </div>
                          <!-- End Row -->
                        </div>
                      </div>
                    </li>
                    <!-- End List Group Item -->

                    <!-- List Group Item -->
                    <li>
                      <div class="media">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                          <img class="avatar-img" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                        </div>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-12 col-sm">
                              <h5 class="text-body mb-0">David Harrison</h5>
                              <span class="d-block font-size-sm">david@example.com</span>
                            </div>

                            <div class="col-12 col-sm">
                              <!-- Select -->
                              <div id="inviteUserNewProjectSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                                <select class="js-select2-custom"
                                        data-hs-select2-options='{
                                          "dropdownParent": "#inviteUserNewProjectSelect2",
                                          "minimumResultsForSearch": "Infinity",
                                          "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                          "dropdownAutoWidth": true,
                                          "width": true
                                        }'>
                                  <option value="guest">Guest</option>
                                  <option value="can edit" selected>Can edit</option>
                                  <option value="can comment">Can comment</option>
                                  <option value="full access">Full access</option>
                                  <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
                          </div>
                          <!-- End Row -->
                        </div>
                      </div>
                    </li>
                    <!-- End List Group Item -->

                    <!-- List Group Item -->
                    <li>
                      <div class="media">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                          <img class="avatar-img" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">
                        </div>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-12 col-sm">
                              <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                              <span class="d-block font-size-sm">Markvt@example.com</span>
                            </div>

                            <div class="col-12 col-sm">
                              <!-- Select -->
                              <div id="inviteUserNewProjectSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                                <select class="js-select2-custom"
                                        data-hs-select2-options='{
                                          "dropdownParent": "#inviteUserNewProjectSelect4",
                                          "minimumResultsForSearch": "Infinity",
                                          "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                          "dropdownAutoWidth": true,
                                          "width": true
                                        }'>
                                  <option value="guest">Guest</option>
                                  <option value="can edit" selected>Can edit</option>
                                  <option value="can comment">Can comment</option>
                                  <option value="full access">Full access</option>
                                  <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
                          </div>
                          <!-- End Row -->
                        </div>
                      </div>
                    </li>
                    <!-- End List Group Item -->

                    <!-- List Group Item -->
                    <li>
                      <div class="media">
                        <span class="icon icon-sm icon-soft-dark icon-circle mr-3">
                          <i class="tio-group-senior"></i>
                        </span>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-12 col-sm">
                              <h5 class="text-body mb-0">#conference</h5>
                              <span class="d-block font-size-sm">3 members</span>
                            </div>

                            <div class="col-12 col-sm">
                              <!-- Select -->
                              <div id="inviteUserNewProjectSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                                <select class="js-select2-custom"
                                        data-hs-select2-options='{
                                          "dropdownParent": "#inviteUserNewProjectSelect3",
                                          "minimumResultsForSearch": "Infinity",
                                          "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                          "dropdownAutoWidth": true,
                                          "width": true
                                        }'>
                                  <option value="guest">Guest</option>
                                  <option value="can edit" selected>Can edit</option>
                                  <option value="can comment">Can comment</option>
                                  <option value="full access">Full access</option>
                                  <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
                          </div>
                          <!-- End Row -->
                        </div>
                      </div>
                    </li>
                    <!-- End List Group Item -->
                  </ul>

                  <!-- Toggle Switch -->
                  <label class="row toggle-switch mb-3" for="addTeamPreferencesNewProjectSwitch1">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-flex align-items-center">
                        <i class="tio-notifications-on-outlined text-primary mr-3"></i>
                        <span class="text-dark">Inform all project members</span>
                      </span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="addTeamPreferencesNewProjectSwitch1" checked>
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="addTeamPreferencesNewProjectSwitch2">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-flex align-items-center">
                        <i class="tio-sms-chat-outlined text-primary mr-3"></i>
                        <span class="text-dark">Show team activity</span>
                      </span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="addTeamPreferencesNewProjectSwitch2">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <!-- Footer -->
                  <div class="d-sm-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 mr-2"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#createProjectStepTerms"
                       }'>
                      <i class="tio-chevron-left"></i> Previous step
                    </button>

                    <div class="d-flex justify-content-end ml-auto">
                      <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Annuler</button>
                      <button id="createProjectFinishBtn" type="button" class="btn btn-primary">Créer le dossier</button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Content Step Form -->

              <!-- Message Body -->
              <div id="createProjectStepSuccessMessage" style="display:none;">
                <div class="text-center">
                  <img class="img-fluid mb-3" src="{{ asset('svg/illustrations/create.svg') }}" alt="Image Description" style="max-width: 15rem;">

                  <div class="mb-4">
                    <h2>Successful!</h2>
                    <p>Nouveau Dossier créé avec success</p>
                  </div>

                  <div class="row justify-content-center gy-1 gx-2">
                    <div class="col-auto">
                      <a class="btn btn-white" href="{{  route('dossier') }}">
                        <i class="tio-chevron-left ml-1"></i> Retour sur Dossier
                      </a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                        <i class="tio-city mr-1"></i> Ajouter un nouveau dossier
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Message Body -->
            </form>
            <!-- End Step Form -->
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
    <!-- End New Project Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    
    

    <!-- JS Front -->
    <script src="{{ asset('js/theme.min.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show');

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV

        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // initialization of mega menu
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        // initialization of navbar vertical navigation
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        // initialization of tooltip in navbar vertical menu
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        // initialization of form search
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        // initialization of file attach
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        // initialization of step form
        $('.js-step-form').each(function () {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#createProjectStepFormProgress").hide();
              $("#createProjectStepFormContent").hide();
              $("#createProjectStepSuccessMessage").show();
            }
          }).init();
        });

        // initialization of select2
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // initialization of quilljs editor
        var quill = $.HSCore.components.HSQuill.init('.js-quill');

        // initialization of tagify
        $('.js-tagify').each(function () {
          var tagify = $.HSCore.components.HSTagify.init($(this));
        });

        $('.js-tagify-avatars').each(function () {
          var settings = $(this).attr('data-hs-tagify-options') ? JSON.parse($(this).attr('data-hs-tagify-options')) : {},
            tagifyAvatars = $.HSCore.components.HSTagify.init($(this), {
              templates: {
                tag: function tag(tagData) {
                  try {
                    return "<tag title=\"" + tagData.value + "\" contenteditable=\"false\" spellcheck=\"false\" class=\"tagify__tag " + (tagData["class"] ? tagData["class"] : "") + "\" " + this.getAttributes(tagData) + ">" +
                              "<x title=\"remove tag\" class=\"tagify__tag__removeBtn\"></x>" +
                              "<div class=\"d-flex align-items-center\">" +
                              "" + (tagData.src ? "<img class=\"avatar avatar-xss avatar-circle mr-2\" src=\"" + tagData.src.toLowerCase() + "\">" : "") + "" +
                                "<span>" + tagData.value + "</span>" +
                              "</div>" +
                            "</tag>";
                  } catch (err) {}
                },
                dropdownItem: function dropdownItem(tagData) {
                  try {
                    return "<div " + this.getAttributes(tagData) + " class=\"tagify__dropdown__item " + (tagData["class"] ? tagData["class"] : "") + "\">" +
                             "<img class=\"avatar avatar-xss avatar-circle mr-2\" src=\"" + tagData.src.toLowerCase() + "\">" +
                             "<span>" + tagData.value + "</span>" +
                           "</div>";
                  } catch (err) {}
                }
              }
            }).addTags(settings.whitelist.slice(0, 1));
        });

        // initialization of dropzone file attach module
        $('.dropzone-custom').each(function () {
          var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
        });

        // initialization of datatables
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          dom: 'Bfrtip',
          buttons: [
            {
              extend: 'copy',
              className: 'd-none'
            },
            {
              extend: 'excel',
              className: 'd-none'
            },
            {
              extend: 'csv',
              className: 'd-none'
            },
            {
              extend: 'pdf',
              className: 'd-none'
            },
            {
              extend: 'print',
              className: 'd-none'
            },
          ],
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./{{ asset("svg/illustrations/sorry.svg") }}") }}" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('#export-copy').click(function() {
          datatable.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
          datatable.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
          datatable.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
          datatable.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
          datatable.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('search', function () {
          datatable.search('').draw();
        });

        // initialization of chartjs
        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        // initialization of quick view popover
        $('#newProjectPopover').popover('show');

        $(document).on('click', '#closeNewProjectPopover' , function() {
          $('#newProjectPopover').popover('dispose');
        });

        $('#newProjectModal').on('show.bs.modal', function() {
          $('#newProjectPopover').popover('dispose');
        });

        // initialization of flatpickr
        $('.js-flatpickr').each(function () {
          $.HSCore.components.HSFlatpickr.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ ("vendor/babel-polyfill/polyfill.min.js") }}"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/projects.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 14:56:03 GMT -->
</html>
@endsection