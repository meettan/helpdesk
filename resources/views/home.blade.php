@extends('common.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">Hi, Welcomeback!</h4>
                    <!-- <button class="btn btn-info d-none d-md-block">Import</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card border-0 border-radius-2 bg-success">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                        <div class="icon-rounded-inverse-success icon-rounded-lg">
                            <i class="mdi mdi-arrow-top-right"></i>
                        </div>
                        <div class="text-white">
                            <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Sales</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$508</h3>
                                <small class="mb-0">This month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card border-0 border-radius-2 bg-info">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                        <div class="icon-rounded-inverse-info icon-rounded-lg">
                            <i class="mdi mdi-basket"></i>
                        </div>
                        <div class="text-white">
                            <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Purchases
                            </p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$387</h3>
                                <small class="mb-0">This month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card border-0 border-radius-2 bg-danger">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                        <div class="icon-rounded-inverse-danger icon-rounded-lg">
                            <i class="mdi mdi-chart-donut-variant"></i>
                        </div>
                        <div class="text-white">
                            <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Orders</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$161</h3>
                                <small class="mb-0">This month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card border-0 border-radius-2 bg-warning">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                        <div class="icon-rounded-inverse-warning icon-rounded-lg">
                            <i class="mdi mdi-chart-multiline"></i>
                        </div>
                        <div class="text-white">
                            <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Growth</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$231</h3>
                                <small class="mb-0">This month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Total Sales</p>
                    <p class="text-muted">Audience to which the users belonged while on the current date Audience to
                        which
                        the users belonged while on the current date Audience to which the users belonged while on the
                        current date </p>
                    <div class="d-flex flex-wrap mb-4 mt-4 pb-4">
                        <div class="mr-4 mr-md-5">
                            <p class="mb-0">Revenue</p>
                            <h4>13,956</h4>
                        </div>
                        <div class="mr-4 mr-md-5">
                            <p class="mb-0">Returns</p>
                            <h4>27,219</h4>
                        </div>
                        <div class="mr-4 mr-md-5">
                            <p class="mb-0">Queries</p>
                            <h4>03,386</h4>
                        </div>
                        <div class="mr-4 mr-md-5">
                            <p class="mb-0">Invoices</p>
                            <h4>04,739</h4>
                        </div>
                    </div>
                    <canvas id="total-sales-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Users</p>
                            <div class="d-flex flex-wrap align-items-baseline">
                                <h2 class="mr-3">33,956</h2>
                                <i class="mdi mdi-arrow-up mr-1 text-danger"></i><span>
                                    <p class="mb-0 text-danger font-weight-medium">+2.12%</p>
                                </span>
                            </div>
                            <p class="mb-0 text-muted">Total users world wide</p>
                        </div>
                        <canvas id="users-chart"></canvas>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Projects</p>
                            <div class="d-flex flex-wrap align-items-baseline">
                                <h2 class="mr-3">50.36%</h2>
                                <i class="mdi mdi-arrow-up mr-1 text-success"></i><span>
                                    <p class="mb-0 text-success font-weight-medium">+9.12%</p>
                                </span>
                            </div>
                            <p class="mb-0 text-muted">Total users world wide</p>
                        </div>
                        <canvas id="projects-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Downloads</p>
                            <p class="text-muted mb-2">Watching ice melt. This is fun. Only you could make those words
                                cute.
                            </p>
                            <div class="row mt-4">
                                <div class="col-md-6 stretch-card">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-6">
                                            <div id="offlineProgress"></div>
                                        </div>
                                        <div class="col-6 pl-0">
                                            <p class="mb-0">Offline</p>
                                            <h2>45,324</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card mt-4 mt-md-0">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-6">
                                            <div id="onlineProgress"></div>
                                        </div>
                                        <div class="col-6 pl-0">
                                            <p class="mb-0">Online</p>
                                            <h2>12,236</h2>
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
    <div class="row">
        <div class="col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-md-end flex-wrap">
                        <p class="card-title">Tickets</p>
                        <div class="dropdown mb-3 mb-md-0">
                            <button class="btn btn-sm btn-outline-light dropdown-toggle text-dark" type="button"
                                id="dropdownMenuDate1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                2018
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate1">
                                <a class="dropdown-item" href="#">2015</a>
                                <a class="dropdown-item" href="#">2016</a>
                                <a class="dropdown-item" href="#">2017</a>
                                <a class="dropdown-item" href="#">2018</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table tickets-table mb-2">
                            <thead>
                                <th class="text-muted pl-0">
                                    Name
                                </th>
                                <th></th>
                                <th class="text-muted">
                                    Date
                                </th>
                                <th class="text-muted">
                                    Projects
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">
                                        <div class="icon-rounded-primary icon-rounded-md">
                                            <h4 class="font-weight-medium">AL</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Alta Lucas</p>
                                        <p class="text-muted mb-0">Connecticut</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">31 Aug 2018</p>
                                        <p class="text-muted mb-0">9:30 am</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">6770 Verner Burgs</p>
                                        <p class="text-muted mb-0">View on map</p>
                                    </td>
                                    <td class="pr-0">
                                        <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="icon-rounded-info icon-rounded-md">
                                            <h4 class="font-weight-medium">TS</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Teresa Shaw</p>
                                        <p class="text-muted mb-0">Florida</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">13 May 2018</p>
                                        <p class="text-muted mb-0">10:30 am</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">1300 Gideon Divide Apt. 400</p>
                                        <p class="text-muted mb-0">Start session</p>
                                    </td>
                                    <td class="pr-0">
                                        <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="icon-rounded-danger icon-rounded-md">
                                            <h4 class="font-weight-medium">RU</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Rosa Underwood</p>
                                        <p class="text-muted mb-0">North Dakota</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">02 Jan 2018</p>
                                        <p class="text-muted mb-0">11:00 am</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">9576 Rempel Extension</p>
                                        <p class="text-muted mb-0">End session</p>
                                    </td>
                                    <td class="pr-0">
                                        <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="icon-rounded-warning icon-rounded-md">
                                            <h4 class="font-weight-medium">VR</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Vilson Rowa</p>
                                        <p class="text-muted mb-0">Densar</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">05 Nov 2018</p>
                                        <p class="text-muted mb-0">02:30 am</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">1072 Orion Expansion</p>
                                        <p class="text-muted mb-0">On Way</p>
                                    </td>
                                    <td class="pr-0">
                                        <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="icon-rounded-info icon-rounded-md">
                                            <h4 class="font-weight-medium">TS</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Teresa Shaw</p>
                                        <p class="text-muted mb-0">Florida</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">13 May 2018</p>
                                        <p class="text-muted mb-0">10:30 am</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">1300 Gideon Divide Apt. 400</p>
                                        <p class="text-muted mb-0">Start session</p>
                                    </td>
                                    <td class="pr-0">
                                        <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Updates</p>
                    <ul class="bullet-line-list mt-4">
                        <li>
                            <h6>User confirmation</h6>
                            <p class="mt-2">Tonight's the night. And it's going to happen again and again. It has to
                                happen.
                                I'm thinking two circus clowns dancing. </p>
                            <p class="text-muted mb-4">
                                <i class="mdi mdi-clock-outline"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Continuous evaluation</h6>
                            <p class="mt-2">And it's going to happen again and again. It has to happen. I'm thinking two
                                circus clowns dancing. Tonight's the night. </p>
                            <p class="text-muted mb-4">
                                <i class="mdi mdi-clock-outline"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Promotion</h6>
                            <p class="mt-2">It has to happen. I'm thinking two circus clowns dancing. Tonight's the
                                night.
                            </p>
                            <p class="text-muted">
                                <i class="mdi mdi-clock-outline"></i>
                                7 months ago.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <p class="card-title mb-xl-0">Distribution</p>
                </div>
                <canvas id="distribution-chart"></canvas>
                <div class="card-body">
                    <div id="distribution-legend" class="distribution-chart-legend pt-4 pb-3"></div>
                    <button class="btn btn-outline-light text-dark d-block mx-auto mt-2">View More</button>
                </div>
            </div>
        </div>
        <div class="col-xl-9 grid-margin stretch-card">
            <div class="card">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-xl-7">
                        <div class="card-body h-100 d-flex flex-column">
                            <p class="card-title">Sale report</p>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia id
                                beatae
                                sint dolorum quod ducimus quisquam ut minima atque quaerat.</p>
                            <canvas id="sale-report-chart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-xl-5">
                        <div class="card-body">
                            <p class="card-title">Sales report overview</p>
                            <p class="pb-2 text-muted">Sale information on advertising, exhibitions, market research,
                                online
                                media, customer desires, PR and much more</p>
                            <div class="d-flex flex-wrap justify-content-start mt-3">
                                <div class="mr-3">
                                    <p class="mb-0">Downloads</p>
                                    <h4>13,956</h4>
                                </div>
                                <div class="mr-3">
                                    <p class="mb-0">Purchases</p>
                                    <h4>55,123</h4>
                                </div>
                                <div class="mr-3">
                                    <p class="mb-0">Users</p>
                                    <h4>29829</h4>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="mdi mdi-arrow-expand-up mb-0 text-success mr-2 mt-1"></i>
                                <p class="mb-0 text-dark">15% more than last week</p>
                            </div>
                            <div class="d-flex flex-wrap mb-5">
                                <button class="btn btn-info mt-3 mr-2">Update</button>
                                <button class="btn btn-outline-light mt-3 text-dark">More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Open Invoices</p>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Temporibus,
                                quibusdam eum, totam ut minus dolor eaque alias ratione repellat voluptate, libero
                                beatae nobis
                                facere quod. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque harum
                                maxime
                                quaerat quasi earum totam consectetur eius quisquam deleniti et.</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="border-top-0">
                                    <th class="text-muted">Invoice</th>
                                    <th class="text-muted">Customer</th>
                                    <th class="text-muted">Ship</th>
                                    <th class="text-muted">Best Price</th>
                                    <th class="text-muted">Purchsed Price</th>
                                    <th class="text-muted">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50014</td>
                                    <td>David Grey</td>
                                    <td>Italy</td>
                                    <td class="font-weight-bold">$6300</td>
                                    <td>$2100</td>
                                    <td>
                                        <div class="badge badge-success badge-fw">Progress</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>50015</td>
                                    <td>Stella Johnson</td>
                                    <td>Brazil</td>
                                    <td class="font-weight-bold">$4500</td>
                                    <td>$4300</td>
                                    <td>
                                        <div class="badge badge-warning badge-fw">Open</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>50016</td>
                                    <td>Marina Michel</td>
                                    <td>Japan</td>
                                    <td class="font-weight-bold">$4300</td>
                                    <td>$6440</td>
                                    <td>
                                        <div class="badge badge-danger badge-fw">On hold</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>50017</td>
                                    <td>John Doe</td>
                                    <td>India</td>
                                    <td class="font-weight-bold">$6400</td>
                                    <td>$2200</td>
                                    <td>
                                        <div class="badge badge-success badge-fw">Progress</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>50015</td>
                                    <td>Stella Johnson</td>
                                    <td>Brazil</td>
                                    <td class="font-weight-bold">$4500</td>
                                    <td>$4300</td>
                                    <td>
                                        <div class="badge badge-warning badge-fw">Open</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>50014</td>
                                    <td>David Grey</td>
                                    <td>Italy</td>
                                    <td class="font-weight-bold">$6300</td>
                                    <td>$2100</td>
                                    <td>
                                        <div class="badge badge-success badge-fw">Progress</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

@endsection

@section('script')


@endsection
