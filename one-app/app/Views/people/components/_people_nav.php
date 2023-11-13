<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/_common_head'); ?>
    <title>Document</title>
</head>

<body>
    <header>
        <?= view('components/_common_nav'); ?>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">People</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#peopleNav" aria-controls="peopleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 justify-content-between py-md-0 py-3" id="peopleNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" name="es" type="search" placeholder="Search from Employees" aria-label="Search">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Subscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Settings" href="#"><i class="ti ti-settings"></i><span class="d-md-none">&nbsp;Settings</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="ti ti-settings"></i><span class="d-md-none">&nbsp;Settings</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="ti ti-circle-plus"></i><span class="d-md-none">&nbsp;Add Employee</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="ti ti-message"></i><span class="d-md-none">&nbsp;Messages</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="ti ti-bell"></i><span class="d-md-none">&nbsp;Notifications</span></a>
                        </li>
                        <li class="nav-item dropdown dropdown-right">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="avatar avatar-sm">HK</span><span class="d-md-none">&nbsp;My Profile</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="ti ti-grid-dots"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>