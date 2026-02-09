@include('dash.parts.head')

<title>ELPO-TECH || Add User</title>
</head>

<body>

    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    @include('dash.parts.sidenav')
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    @include('dash.parts.topnav')
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <form method="POST" onsubmit="return validateForm();" action="{{route('add.user')}}">
                @csrf
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">ADD USER</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL('/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ URL('/users') }}">Users</a></li>
                            <li class="breadcrumb-item">Add User</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="page-header-right-items">
                            <div class="d-flex d-md-none">
                                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                    <i class="feather-arrow-left me-2"></i>
                                    <span>Back</span>
                                </a>
                            </div>
                            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">




                            </div>
                        </div>
                        <div class="d-md-none d-flex align-items-center">
                            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                                <i class="feather-align-right fs-20"></i>
                            </a>
                        </div>
                    </div>
                </div>



                <!-- [ page-header ] end -->
                <!-- [ Main Content ] start -->
                <div class="main-content">



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-top-0">
                                <div class="card-header p-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item flex-fill border-top" role="presentation">
                                            <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab" role="tab">User Information</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                        <div class="card-body personal-info">

                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="fullnameInput" class="fw-semibold">User Name: </label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="feather-user"></i></div>
                                                        <input type="text" name="uname" class="form-control" id="uname" placeholder="User Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="fullnameInput" class="fw-semibold">Full Name: </label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="feather-user"></i></div>
                                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="mailInput" class="fw-semibold">Email: </label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="feather-mail"></i></div>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="phoneInput" class="fw-semibold">Phone: </label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="feather-phone"></i></div>
                                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label class="fw-semibold">Department: </label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-control" data-select2-selector="status" name="type" id="type">
                                                        <option value="" selected>-- Select Department --</option>
                                                        <option value="reception">Reception</option>
                                                        <option value="hardware">Hardware</option>
                                                        <option value="software">Software</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <hr class="my-0">
                                        <div class="card-body personal-info">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather-save me-2"></i>
                                                <span>Save User Details</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


            </form>
            <!-- [ Main Content ] end -->
        </div>
        <script>
            function validateForm() {
                let fname = document.getElementById('fname').value.trim();
                let uname = document.getElementById('uname').value.trim();
                let email = document.getElementById('email').value.trim();
                let phone = document.getElementById('phone').value.trim();
                let type = document.getElementById('type').value.trim();


                if (fname === '' || uname === '' || email === '' || phone === '' || type === '') {
                    alert('Please fill all Fields before proceeding.');
                    return false; // stop form submission
                }



                return true; // allow submission
            }
        </script>

        <!-- [ Footer ] start -->
        @include('dash.parts.footer')
        <!-- [ Footer ] end -->