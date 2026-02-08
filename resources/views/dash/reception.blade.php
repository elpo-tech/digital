@include('dash.parts.head')

<title>ELPO-TECH || Reception</title>
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
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">RECEPTION</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Reception</li>
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



                            <a href="{{ url('/add_gadget') }}" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add Gadget</span>
                            </a>
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
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="paymentList">
                                        <thead>
                                            <tr>
                                                <th class="wd-30">
                                                    Tag
                                                </th>
                                                <th>Brand</th>
                                                <th>Client</th>
                                                <th>Service Desk</th>
                                                <th>Date</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($info as $item)
                                            <tr class="single-item">
                                                <td>
                                                    {{ str_pad($item->id, 3, '0', STR_PAD_LEFT) }}
                                                </td>
                                                <td>{{$item->brand}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">{{ $item->fname }}</span>
                                                            <small class="fs-12 fw-normal text-muted">{{ $item->phone }}</small>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="fw-bold text-dark">{{$item->pos}}</td>
                                                <td>{{ $item->created_at->format('Y-m-d, h:iA') }}</td>
                                                <td><a href="javascript:void(0);">Ksh. {{ $item->bal }}</a></td>
                                                <td>
                                                    <div class="badge
                                                        @if($item->status == 'Collected')
                                                            bg-soft-success text-success
                                                        @elseif($item->status == 'In Progress')
                                                            bg-soft-danger text-danger
                                                        @else
                                                            bg-soft-warning text-warning
                                                        @endif
                                                    ">
                                                        {{ $item->status }}
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('addgid', $item->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="{{ route('addgid', $item->id) }}">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-mail me-3"></i>
                                                                        <span>Send Receipt</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>

                                                                @if(Auth::user()->type == 'admin')
                                                                <li>
                                                                    <a class="dropdown-item" href="{{ route('delete.gadget', $item->id) }}">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        @include('dash.parts.footer')
        <!-- [ Footer ] end -->