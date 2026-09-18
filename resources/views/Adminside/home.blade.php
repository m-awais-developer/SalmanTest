@extends('master.admin')

@section('title', 'Dashboard')

@section('content')

<!-- ================= PAGE HEADING ================= -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="page-title mb-1">
            Dashboard
        </h1>

        <p class="welcome-text mb-0">
            Welcome back! Here's what's happening with SP Carry today.
        </p>
    </div>

    <button class="btn btn-primary px-4 py-2">
        <i class="bi bi-plus-lg me-2"></i>
        New Shipment
    </button>

</div>


<!-- ================= STAT CARDS ================= -->

<div class="row g-4 mb-4">

    <!-- Total Shipments -->
    <div class="col-xl-3 col-md-6">

        <div class="stat-card">

            <div class="d-flex justify-content-between">

                <div>

                    <div class="stat-label">
                        Total Shipments
                    </div>

                    <div class="stat-number">
                        12,480
                    </div>

                    <div class="growth">
                        <i class="bi bi-arrow-up"></i>
                        12.5% this month
                    </div>

                </div>

                <div class="stat-icon icon-purple">
                    <i class="bi bi-box-seam"></i>
                </div>

            </div>

        </div>

    </div>


    <!-- Delivered -->
    <div class="col-xl-3 col-md-6">

        <div class="stat-card">

            <div class="d-flex justify-content-between">

                <div>

                    <div class="stat-label">
                        Delivered
                    </div>

                    <div class="stat-number">
                        9,845
                    </div>

                    <div class="growth">
                        <i class="bi bi-arrow-up"></i>
                        8.2% this month
                    </div>

                </div>

                <div class="stat-icon icon-green">
                    <i class="bi bi-check-circle"></i>
                </div>

            </div>

        </div>

    </div>


    <!-- Pending -->
    <div class="col-xl-3 col-md-6">

        <div class="stat-card">

            <div class="d-flex justify-content-between">

                <div>

                    <div class="stat-label">
                        Pending
                    </div>

                    <div class="stat-number">
                        1,265
                    </div>

                    <div class="growth">
                        <i class="bi bi-arrow-up"></i>
                        4.6% this month
                    </div>

                </div>

                <div class="stat-icon icon-orange">
                    <i class="bi bi-clock-history"></i>
                </div>

            </div>

        </div>

    </div>


    <!-- Revenue -->
    <div class="col-xl-3 col-md-6">

        <div class="stat-card">

            <div class="d-flex justify-content-between">

                <div>

                    <div class="stat-label">
                        Revenue
                    </div>

                    <div class="stat-number">
                        $48.6K
                    </div>

                    <div class="growth">
                        <i class="bi bi-arrow-up"></i>
                        15.4% this month
                    </div>

                </div>

                <div class="stat-icon icon-blue">
                    <i class="bi bi-currency-dollar"></i>
                </div>

            </div>

        </div>

    </div>

</div>


<!-- ================= CHART + ACTIVITY ================= -->

<div class="row g-4 mb-4">


    <!-- Shipment Overview -->
    <div class="col-lg-8">

        <div class="card content-card">

            <div class="card-header">

                <h5 class="mb-1">
                    Shipment Overview
                </h5>

                <small class="text-muted">
                    Monthly shipment statistics
                </small>

            </div>


            <div class="card-body">

                <div class="chart">

                    <div class="bar" style="height: 45%;"></div>

                    <div class="bar" style="height: 60%;"></div>

                    <div class="bar" style="height: 48%;"></div>

                    <div class="bar" style="height: 72%;"></div>

                    <div class="bar" style="height: 65%;"></div>

                    <div class="bar" style="height: 82%;"></div>

                    <div class="bar" style="height: 92%;"></div>

                    <div class="bar" style="height: 75%;"></div>

                    <div class="bar" style="height: 88%;"></div>

                    <div class="bar" style="height: 70%;"></div>

                    <div class="bar" style="height: 95%;"></div>

                    <div class="bar" style="height: 85%;"></div>

                </div>


                <div class="bar-labels">

                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                    <span>Jul</span>
                    <span>Aug</span>
                    <span>Sep</span>
                    <span>Oct</span>
                    <span>Nov</span>
                    <span>Dec</span>

                </div>

            </div>

        </div>

    </div>


    <!-- Recent Activity -->
    <div class="col-lg-4">

        <div class="card content-card h-100">

            <div class="card-header">

                <h5 class="mb-1">
                    Recent Activity
                </h5>

                <small class="text-muted">
                    Latest updates
                </small>

            </div>


            <div class="card-body">


                <!-- Activity 1 -->
                <div class="d-flex mb-4">

                    <div class="stat-icon icon-purple me-3">
                        <i class="bi bi-box"></i>
                    </div>

                    <div>

                        <strong>
                            New shipment
                        </strong>

                        <p class="small text-muted mb-0">
                            Shipment #SP-1045 created
                        </p>

                        <small class="text-muted">
                            10 minutes ago
                        </small>

                    </div>

                </div>


                <!-- Activity 2 -->
                <div class="d-flex mb-4">

                    <div class="stat-icon icon-green me-3">
                        <i class="bi bi-check2"></i>
                    </div>

                    <div>

                        <strong>
                            Package delivered
                        </strong>

                        <p class="small text-muted mb-0">
                            Shipment #SP-1039 delivered
                        </p>

                        <small class="text-muted">
                            35 minutes ago
                        </small>

                    </div>

                </div>


                <!-- Activity 3 -->
                <div class="d-flex mb-4">

                    <div class="stat-icon icon-blue me-3">
                        <i class="bi bi-person-plus"></i>
                    </div>

                    <div>

                        <strong>
                            New customer
                        </strong>

                        <p class="small text-muted mb-0">
                            Ahmed joined SP Carry
                        </p>

                        <small class="text-muted">
                            1 hour ago
                        </small>

                    </div>

                </div>


                <!-- Activity 4 -->
                <div class="d-flex">

                    <div class="stat-icon icon-orange me-3">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div>

                        <strong>
                            Shipment pending
                        </strong>

                        <p class="small text-muted mb-0">
                            Shipment #SP-1032 needs attention
                        </p>

                        <small class="text-muted">
                            2 hours ago
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- ================= RECENT SHIPMENTS ================= -->

<div class="card content-card">


    <!-- Card Header -->
    <div class="card-header d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Recent Shipments
            </h5>

            <small class="text-muted">
                Latest shipment records
            </small>

        </div>


        <button class="btn btn-outline-primary btn-sm">
            View All
        </button>

    </div>


    <!-- Table -->
    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table">

                <thead>

                    <tr>

                        <th class="ps-4">
                            Shipment ID
                        </th>

                        <th>
                            Customer
                        </th>

                        <th>
                            Destination
                        </th>

                        <th>
                            Date
                        </th>

                        <th>
                            Amount
                        </th>

                        <th>
                            Status
                        </th>

                        <th class="pe-4">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <!-- Shipment 1 -->
                    <tr>

                        <td class="ps-4">
                            <strong>
                                #SP-1045
                            </strong>
                        </td>

                        <td>
                            Ali Khan
                        </td>

                        <td>
                            Lahore
                        </td>

                        <td>
                            Sep 16, 2026
                        </td>

                        <td>
                            $125
                        </td>

                        <td>

                            <span class="status status-delivered">
                                Delivered
                            </span>

                        </td>

                        <td class="pe-4">

                            <button class="btn btn-sm">

                                <i class="bi bi-three-dots"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- Shipment 2 -->
                    <tr>

                        <td class="ps-4">
                            <strong>
                                #SP-1044
                            </strong>
                        </td>

                        <td>
                            Hassan Ahmed
                        </td>

                        <td>
                            Islamabad
                        </td>

                        <td>
                            Sep 16, 2026
                        </td>

                        <td>
                            $89
                        </td>

                        <td>

                            <span class="status status-pending">
                                Pending
                            </span>

                        </td>

                        <td class="pe-4">

                            <button class="btn btn-sm">

                                <i class="bi bi-three-dots"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- Shipment 3 -->
                    <tr>

                        <td class="ps-4">
                            <strong>
                                #SP-1043
                            </strong>
                        </td>

                        <td>
                            Sara Malik
                        </td>

                        <td>
                            Karachi
                        </td>

                        <td>
                            Sep 15, 2026
                        </td>

                        <td>
                            $210
                        </td>

                        <td>

                            <span class="status status-delivered">
                                Delivered
                            </span>

                        </td>

                        <td class="pe-4">

                            <button class="btn btn-sm">

                                <i class="bi bi-three-dots"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- Shipment 4 -->
                    <tr>

                        <td class="ps-4">
                            <strong>
                                #SP-1042
                            </strong>
                        </td>

                        <td>
                            Usman Raza
                        </td>

                        <td>
                            Faisalabad
                        </td>

                        <td>
                            Sep 15, 2026
                        </td>

                        <td>
                            $75
                        </td>

                        <td>

                            <span class="status status-cancelled">
                                Cancelled
                            </span>

                        </td>

                        <td class="pe-4">

                            <button class="btn btn-sm">

                                <i class="bi bi-three-dots"></i>

                            </button>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection