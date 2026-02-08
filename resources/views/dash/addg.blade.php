@include('dash.parts.head')

<title>ELPO-TECH || Add Gadget</title>
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
            <form method="POST" action="{{route('gadget.update', $info->id)}}">
                @csrf
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">ADD GADGET</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL('/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ URL('/reception') }}">Reception</a></li>
                            <li class="breadcrumb-item">Add Gadget</li>
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


                                <button type="submit" class="btn btn-primary">
                                    <i class="feather-save me-2"></i>
                                    <span>Save Gadget Details</span>
                                </button>

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

                                    <div class="card-body personal-info">
                                        <h1>TAG: {{str_pad($info->id, 3, '0', STR_PAD_LEFT)}}</h1>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label class="fw-semibold">Service Desk: </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <select class="form-control" name="pos" data-select2-selector="status">
                                                        <option value="{{ $info->pos }}" selected>{{ $info->pos }}</option>
                                                        <option value="Reception">Reception</option>
                                                        <option value="Hardware">Hardware</option>
                                                        <option value="Software">Software</option>
                                                        <option value="Collected">Collected</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-top-0">
                                    <div class="card-header p-0">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab" role="tab">Client Information</a>
                                            </li>
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#passwordTab" role="tab">Device Identification</a>
                                            </li>
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#billingTab" role="tab">Device Condition</a>
                                            </li>
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#subscriptionTab" role="tab">Device Accessories</a>
                                            </li>
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#notificationsTab" role="tab">Service Requested</a>
                                            </li>
                                            <li class="nav-item flex-fill border-top" role="presentation">
                                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#connectionTab" role="tab">Payment</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                            <div class="card-body personal-info">

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="fullnameInput" class="fw-semibold">Full Name: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-user"></i></div>
                                                            <input type="text" name="fname" class="form-control" id="fullnameInput" value="{{$info->fname}}" placeholder="Name">
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
                                                            <input type="text" name="email" class="form-control" id="email" value="{{$info->email}}" placeholder="Email">
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
                                                            <input type="text" name="phone" class="form-control" id="phone" value="{{$info->phone}}" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <hr class="my-0">
                                            <div class="card-body additional-info">
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="mailInput" class="fw-semibold">Hardware Technician: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-user"></i></div>
                                                            <input type="text" name="thw" class="form-control" id="hardwareTechnicianInput" value="{{$info->thw}}" placeholder="Hardware Technician" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="phoneInput" class="fw-semibold">Software Technician: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-user"></i></div>
                                                            <input type="text" name="tsw" class="form-control" id="softwareTechnicianInput" value="{{$info->tsw}}" placeholder="Software Technician" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="passwordTab" role="tabpanel">
                                            <div class="card-body personal-info">

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Brand: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="brand" data-select2-selector="status">
                                                            <option value="{{$info->brand}}" selected>{{$info->brand}}</option>
                                                            <option value="">-- Select Laptop Brand --</option>
                                                            <option value="Acer">Acer</option>
                                                            <option value="Apple">Apple (MacBook)</option>
                                                            <option value="Asus">Asus</option>
                                                            <option value="Dell">Dell</option>
                                                            <option value="HP">HP</option>
                                                            <option value="Lenovo">Lenovo</option>
                                                            <option value="MSI">MSI</option>
                                                            <option value="Microsoft">Microsoft (Surface)</option>
                                                            <option value="Samsung">Samsung</option>
                                                            <option value="Sony">Sony</option>
                                                            <option value="Toshiba">Toshiba</option>
                                                            <option value="Huawei">Huawei</option>
                                                            <option value="Razer">Razer</option>
                                                            <option value="Gigabyte">Gigabyte</option>
                                                            <option value="LG">LG</option>
                                                            <option value="Chuwi">Chuwi</option>
                                                            <option value="Xiaomi">Xiaomi</option>
                                                            <option value="Panasonic">Panasonic</option>
                                                            <option value="Fujitsu">Fujitsu</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="mailInput" class="fw-semibold">Model: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="model" value="{{$info->model}}" class="form-control" id="model" placeholder="Enter Model">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Serial Number/Tag: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="serial" value="{{$info->serial}}" class="form-control" id="serial" placeholder="Enter Serial Number/Tag">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="aboutInput" class="fw-semibold">Color/Description: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <textarea class="form-control" name="color" id="color" cols="30" rows="7" placeholder="Enter Description">{{$info->color}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-0">
                                            <div class="card-body pass-security">
                                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                                    <h5 class="fw-bold mb-0 me-4">
                                                        <span class="d-block mb-2">Device Spefications:</span>
                                                    </h5>

                                                </div>
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Processor: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="pro" value="{{$info->pro}}" class="form-control" id="processor" placeholder="Enter Processor Details">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">RAM Size: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="number" min="0" name="ram" value="{{$info->ram}}" class="form-control" id="ram" placeholder="Enter RAM Size">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Storage Type: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" data-select2-selector="status" name="tsto">
                                                            <option value="" selected>-- Select Storage Type --</option>
                                                            <option value="HDD" {{ $info->tsto == 'HDD' ? 'selected' : '' }}>HDD</option>
                                                            <option value="SSD" {{ $info->tsto == 'SSD' ? 'selected' : '' }}>SSD</option>
                                                            <option value="NVMe" {{ $info->tsto == 'NVMe' ? 'selected' : '' }}>NVMe</option>
                                                            <option value="Other" {{ $info->tsto == 'Other' ? 'selected' : '' }}>Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Storage Size: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="number" min="0" name="sto" value="{{$info->sto}}" class="form-control" id="storage" placeholder="Enter Storage Size">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Operating System: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="os" value="{{$info->os}}" class="form-control" id="os" placeholder="Enter Operating System Details">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="billingTab" role="tabpanel">
                                            <div class="card-body pass-info">


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Screen: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="screen" data-select2-selector="status">
                                                            <option value="{{$info->screen}}" selected>{{$info->screen}}</option>
                                                            <option value="">-- Select Screen Condition --</option>
                                                            <option value="OK">OK</option>
                                                            <option value="Cracked">Cracked</option>
                                                            <option value="Black Spot">Black Spot</option>
                                                            <option value="Lines">Lines</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Keyboard: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="keyb" data-select2-selector="status">
                                                            <option value="{{$info->keyb}}" selected>{{$info->keyb}}</option>
                                                            <option value="">-- Select Keyboard Condition --</option>
                                                            <option value="OK">OK</option>
                                                            <option value="Faulty">Faulty</option>
                                                            <option value="Missing Key">Missing Key</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Touch Pad/Mouse: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="touch" data-select2-selector="status">
                                                            <option value="{{$info->touch}}" selected>{{$info->touch}}</option>
                                                            <option value="">-- Select Touch Pad/mouse Condition --</option>
                                                            <option value="OK">OK</option>
                                                            <option value="Faulty">Faulty</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Ports: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="port" data-select2-selector="status">
                                                            <option value="{{$info->port}}" selected>{{$info->port}}</option>
                                                            <option value="">-- Select Ports Condition --</option>
                                                            <option value="OK">OK</option>
                                                            <option value="Faulty">Faulty</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="aboutInput" class="fw-semibold">Pysical Damage Description: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <textarea class="form-control" name="cdes" id="cdes" cols="30" rows="7" placeholder="Enter Description">{{$info->cdes}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="subscriptionTab" role="tabpanel">
                                            <div class="card-body pass-info">

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Accesories: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <textarea class="form-control" name="access" id="access" cols="30" rows="7" placeholder="Enter Accessories">{{$info->access}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="notificationsTab" role="tabpanel">
                                            <div class="card-body pass-info">


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Hardware Service: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" data-select2-selector="status" name="shw">
                                                            <option value="{{$info->shw}}" selected>{{$info->shw}}</option>
                                                            <option value="">-- Select Hardware Service --</option>
                                                            <option value="Slow Performance">Slow Performance</option>
                                                            <option value="Overheating">Overheating</option>
                                                            <option value="Slow Performance & Overheating">Slow Performance & Overheating</option>
                                                            <option value="Thorough Cleaning & Dusting">Thorough Cleaning & Dusting</option>
                                                            <option value="Cleaning Only">Cleaning Only</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Software Service: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" data-select2-selector="status" name="ssw">
                                                            <option value="{{$info->ssw}}" selected>{{$info->ssw}}</option>
                                                            <option value="">-- Select Software Service --</option>
                                                            <option value="OS & Basic Software ">OS & Basic Software</option>
                                                            <option value="OS Upgrade">OS Upgrade</option>
                                                            <option value="Drivers Update">Drivers Updates</option>
                                                            <option value="Gaming Software">Gaming Software</option>
                                                            <option value="Other Software">Other Software</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label class="fw-semibold">Describe In Detail: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <textarea class="form-control" name="sdes" id="aboutInput" cols="30" rows="7" placeholder="Service Description">{{$info->sdes}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="connectionTab" role="tabpanel">


                                            <div class="card-body personal-info">

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="fullnameInput" class="fw-semibold">Paid: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-dollar-sign"></i></div>
                                                            <input type="number" name="amnt" class="form-control" value="{{$info->amnt}}" placeholder="Paid Amount">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="mailInput" class="fw-semibold">Balance: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-dollar-sign"></i></div>
                                                            <input type="number" name="bal" value="{{$info->bal}}" class="form-control" id="mailInput" placeholder="Balance Amount" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-4">
                                                        <label for="phoneInput" class="fw-semibold">Transaction Code: </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="feather-file"></i></div>
                                                            <input type="text" name="tid" value="{{$info->tid}}" class="form-control" id="phoneInput" placeholder="Transaction ID/Code">
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

            </form>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        @include('dash.parts.footer')
        <!-- [ Footer ] end -->