@include('dash.parts.head')

<title>ELPO-TECH - Dashboard</title>
</head>

<body>
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
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Invoices Awaiting Payment] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-cast"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{$collect->count()}}</span>/<span class="counter">{{$gadget->count()}}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Collected Gadgets</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Collected Gadgets </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">Ksh. {{$collect->count()*350}}</span>
                                            <span class="fs-11 text-muted">({{ number_format(count($collect) > 0 ? (count($collect) / count($gadget)) * 100 : 0, 2) }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ number_format(count($collect) > 0 ? (count($collect) / count($gadget)) * 100 : 0, 2) }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Invoices Awaiting Payment] end -->
                    <!-- [Converted Leads] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-dollar-sign"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{$paid->count()}}</span>/<span class="counter">{{$gadget->count()}}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Paid Gadgets</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Amount </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">Ksh. {{$paid->sum('amnt')}}</span>
                                            <span class="fs-11 text-muted">({{ number_format(count($paid) > 0 ? (count($paid) / count($gadget)) * 100 : 0, 2) }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ number_format(count($paid) > 0 ? (count($paid) / count($gadget)) * 100 : 0, 2) }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Converted Leads] end -->
                    <!-- [Projects In Progress] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-briefcase"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{$service->count()}}</span>/<span class="counter">{{count($gadget)}}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Projects In Progress</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Gadgets In Progress </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">{{$service->count()}}</span>
                                            <span class="fs-11 text-muted">({{ number_format(count($service) > 0 ? (count($service) / count($gadget)) * 100 : 0, 2) }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ number_format(count($service) > 0 ? (count($service) / count($gadget)) * 100 : 0, 2) }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Projects In Progress] end -->
                    <!-- [Conversion Rate] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-activity"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{ number_format($paid->sum('amnt') > 0 ? ($paid->sum('amnt') / ($gadget->count() * 350)) * 100 : 0, 2) }}</span>%</div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line"> Conversion Rate </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">Ksh. {{$paid->sum('amnt')}}</span>
                                            <span class="fs-11 text-muted">({{ number_format(count($paid) > 0 ? (count($paid) / count($gadget)) * 100 : 0, 2) }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ number_format(count($paid) > 0 ? (count($paid) / count($gadget)) * 100 : 0, 2) }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Conversion Rate] end -->
                    <!-- [Payment Records] start -->

                    <!-- [Total Sales] end !-->
                    <!-- [Mini] start -->

                    <!-- [Mini] end !-->
                    <!-- [Leads Overview] start -->

                    <!-- [Leads Overview] end -->
                    <!-- [Latest Leads] start -->
                    <div class="col-xxl-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Latest Gadgets</h5>

                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Client</th>
                                                <th>Amount Paid</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-end">Service Station</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($info as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="/assets/images/avatar/1.png" alt="" class="img-fluid" />
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">{{ $item->fname }}</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">{{ $item->email }}</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">{{ $item->phone }}</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Ksh. {{ $item->amnt }}
                                                </td>
                                                <td>{{ $item->created_at->format('Y-m-d, h:iA') }}</td>
                                                <td>
                                                    <span class="badge 
                                                     @if($item->status == 'Collected')
                                                            bg-soft-success text-success
                                                        @elseif($item->status == 'In Progress')
                                                            bg-soft-danger text-danger
                                                        @else
                                                            bg-soft-warning text-warning
                                                        @endif
                                                    
                                                    ">{{ $item->status }}</span>
                                                </td>
                                                <td class="text-end">
                                                    {{$item->pos}}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- [Latest Leads] end -->
                    <!--! BEGIN: [Upcoming Schedule] !-->

                    <!--! END: [Team Progress] !-->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        @include('dash.parts.footer')
        <!-- [ Footer ] end -->