@php
    $user = auth()->user();
@endphp
<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown d-none">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                        class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                        English</a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i></a></li>
            <li class="nav-item nav-search d-none">
                <a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-notification me-25 d-none"><a class="nav-link" href="#"
                    data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge rounded-pill bg-danger badge-up">0</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                            <div class="badge rounded-pill badge-light-primary">0 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="#">

                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                            notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{ $user->name }}</span><span
                            class="user-status">{{ $user?->role?->title }}</span>
                        <small>{{ $user?->branch?->code }}-{{ $user?->branch?->name }}</small>
                    </div>
                    <span class="avatar">
                        @if (!empty($model->avatar) && file_exists('storage/thumbs/' . $model->avatar))
                            <img class="round" src="{{ asset('storage/thumbs/' . $model->avatar) }}" height="40"
                                width="40" alt="Avatar" />
                        @else
                            <i data-feather='user' class="round"
                                style="width: 40px !important; height: 40px !important"></i>
                        @endif
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                        data-bs-target="#changePasswordModal"><i class="me-50" data-feather="user"></i> <small>Change
                            Password</small></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('admin.auth.logout') }}"><i class="me-50"
                            data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-5">
                <h1 class="text-center mb-1" id="addNewCardTitle">Change Password</h1>
                <div class="alert alert-success" style="display:none"></div>
                <div class="alert alert-danger" style="display:none"></div>
               
                <!-- form -->
                <form id="changePasswordForm" class="row gy-1 gx-2 mt-75"
                    action="{{ route('admin.change-password') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label class="form-label" for="currentPassword">Current Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <input id="currentPassword" name="current_password"
                                class="form-control add-credit-card-mask" type="password" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="newPassword">New Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <input id="newPassword" name="new_password" class="form-control add-credit-card-mask"
                                type="password" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="confirmPassword">Confirm New Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <input id="confirmPassword" name="confirm_password"
                                class="form-control add-credit-card-mask" type="password" required />
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Header-->
