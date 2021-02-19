<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Join</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-300">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
                <!-- Navbar Brand-->
                <!-- * * Tip * * You can use text or an image for your navbar brand.-->
                <!-- * * * * * * When using an image, we recommend the SVG format.-->
                <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
                <a href="{{route('painel')}}"><img src="data:image/png;base64,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" alt="join" style="width: 160px;" class="navbar-brand"></a>
                <!--<a class="navbar-brand" href="index.html">SitelBra</a> -->
                <!-- Sidenav Toggle Button-->
                <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i data-feather="menu"></i></button>
                <!-- Navbar Search Input-->
                <!-- * * Note: * * Visible only on and above the md breakpoint-->
                <form class="form-inline mr-auto d-none d-md-block mr-3">
                    <div class="input-group input-group-joined input-group-solid">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                        <div class="input-group-append">
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </div>
                </form>
                <!-- Navbar Items-->
                <ul class="navbar-nav align-items-center ml-auto">
                    <!-- Documentation Dropdown-->
                    <li class="nav-item dropdown no-caret d-none d-sm-block mr-3">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="font-weight-500">Documentation</div>
                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0 mr-sm-n15 mr-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                                <div>
                                    <div class="small text-gray-500">Documentation</div>
                                    Usage instructions and reference
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                                <div>
                                    <div class="small text-gray-500">Components</div>
                                    Code snippets and reference
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i></div>
                                <div>
                                    <div class="small text-gray-500">Changelog</div>
                                    Updates and changes
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- Navbar Search Dropdown-->
                    <!-- * * Note: * * Visible only below the md breakpoint-->
                    <li class="nav-item dropdown no-caret mr-3 d-md-none">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                        <!-- Dropdown - Search-->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100">
                                <div class="input-group input-group-joined input-group-solid">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i data-feather="search"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Alerts Dropdown-->
                    <li class="nav-item dropdown no-caret d-none d-sm-block mr-3 dropdown-notifications">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <i class="mr-2" data-feather="bell"></i>
                                Alerts Center
                            </h6>
                            <!-- Example Alert 1-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 29, 2020</div>
                                    <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
                                </div>
                            </a>
                            <!-- Example Alert 2-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 22, 2020</div>
                                    <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                                </div>
                            </a>
                            <!-- Example Alert 3-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 8, 2020</div>
                                    <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                                </div>
                            </a>
                            <!-- Example Alert 4-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 2, 2020</div>
                                    <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-footer" href="#">View All Alerts</a>
                        </div>
                    </li>
                    <!-- Messages Dropdown-->
                    <li class="nav-item dropdown no-caret d-none d-sm-block mr-3 dropdown-notifications">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <i class="mr-2" data-feather="mail"></i>
                                Message Center
                            </h6>
                            <!-- Example Message 1  -->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <img class="dropdown-notifications-item-img" src="{{ asset('assets/img/illustrations/profiles/profile-2.png') }}"  alt="profile1"/>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                                </div>
                            </a>
                            <!-- Example Message 2-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <img class="dropdown-notifications-item-img" src="{{ asset('assets/img/illustrations/profiles/profile-3.png') }}" />
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                                </div>
                            </a>
                            <!-- Example Message 3-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <img class="dropdown-notifications-item-img" src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}" />
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                                </div>
                            </a>
                            <!-- Example Message 4-->
                            <a class="dropdown-item dropdown-notifications-item" href="#">
                                <img class="dropdown-notifications-item-img" src="{{ asset('assets/img/illustrations/profiles/profile-5.png') }}" />
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                                </div>
                            </a>
                            <!-- Footer Link-->
                            <a class="dropdown-item dropdown-notifications-footer" href="#">Read All Messages</a>
                        </div>
                    </li>
                    <!-- User Dropdown-->
                    <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}" alt="profile"/></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <h6 class="dropdown-header d-flex align-items-center">
                                <img class="dropdown-user-img" src=" {{ asset('assets/img/illustrations/profiles/profile-1.png') }}" />
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-details-name">Username</div>
                                    <div class="dropdown-user-details-email">Email</div>
                                </div>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                                Account
                            </a>
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                                Logout
                            </a>
                            <form id="logout-form" action="#" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <b-nav class="sidenav shadow-right sidenav-light">
                        <div class="sidenav-menu">
                            <div class="nav accordion" id="accordionSidenav">
                                <!-- Sidenav Menu Heading (Account)-->
                                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                                <div class="sidenav-menu-heading d-sm-none">Account</div>
                                <!-- Sidenav Link (Alerts)-->
                                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                                <a class="nav-link d-sm-none" href="#">
                                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                    Alerts
                                    <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
                                </a>
                                <!-- Sidenav Link (Messages)-->
                                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                                <a class="nav-link d-sm-none" href="#">
                                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                    Messages
                                    <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
                                </a>
                                <!-- Dashboard -->
                                <a class="nav-link" href="{{ route('painel') }}">
                                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                    Principal
                                    <span class="badge badge-primary-soft text-primary ml-auto">Default</span>
                                </a>
                                <!-- Sidenav Menu Heading (Core)-->
                                <div class="sidenav-menu-heading">Categoria</div>
                                <!-- Sidenav Accordion (Flows)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                                    Categoria
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('categoria-cadastro') }}">Criar Categoria</a>
                                        <a class="nav-link" href="{{ route('categoria-listar') }}">Listar Categoria</a>
                                    </nav>
                                </div>
                                <!-- Sidenav Heading (App Views)-->
                                <div class="sidenav-menu-heading">Produtos</div>
                                <!-- Sidenav Accordion (Flows)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows2" aria-expanded="false" aria-controls="collapseFlows">
                                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                    Produtos
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseFlows2" data-parent="#accordionSidenav">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('produto-cadastro') }}">Criar Produto</a>
                                        <a class="nav-link" href="{{route('produto-listar')}}">Listar Produto</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Sidenav Footer-->
                        <div class="sidenav-footer">
                            <div class="sidenav-footer-content">
                                <div class="sidenav-footer-subtitle">Logado:</div>
                                <div class="sidenav-footer-title">Admin</div>
                            </div>
                        </div>
                    </b-nav>
                </div>
                <div id="layoutSidenav_content">
                    @yield('admin')
                </div>
            </div>
        </main>
    </div>
 </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/demo/date-range-picker-demo.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>





