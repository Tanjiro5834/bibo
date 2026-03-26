@extends('layouts.main')
@section('content')

    <style>
    

        /* Cards */
        .card-ui {
            border-radius: 20px;
            border: none;
            padding: 20px;
        }

        /* Progress bar */
        .progress {
            height: 10px;
            border-radius: 10px;
            background-color: #e9ecef;
        }

        .progress-bar {
            border-radius: 10px;
            background: linear-gradient(90deg, #4f46e5, #9333ea);
        }

        /* Subject cards */
        .subject-card {
            border-radius: 24px;
            border: none;
            padding: 24px;
            height: 100%;
            transition: transform 0.2s;
        }

        .subject-card:hover {
            transform: translateY(-5px);
        }

        /* Icon circle */
        .icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 22px;
        }

        /* Play button */
        .play-btn {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: #4f46e5;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* Tabs */
        .tab-btn {
            border-radius: 20px;
            padding: 8px 18px;
            margin-right: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            background: white;
        }

        .tab-btn.active {
            background: #111827;
            color: #fff;
            border-color: #111827;
        }

        /* Utility for horizontal scroll tabs on mobile */
        .tab-container {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
    </head>

    <body>



        <div class="col-12 col-lg mt-4 mt-lg-0">

            <h2 class="fw-bold">Brain Arcade</h2>
            <p class="text-muted">DepEd-aligned learning path for Bacoor's future leaders</p>

            <div class="card card-ui shadow-sm mb-4">
                <div class="row align-items-center">
                    <div class="col-6">
                        <small class="text-muted fw-bold">OVERALL PROGRESS</small>
                        <h2 class="fw-bold mb-0">46%</h2>
                    </div>
                    <div class="col-6 text-end">
                        <div class="fw-600"><span class="badge  bg-primary">48 Lessons Done</span> </div>
                        <div class="text-success small"><i class="bi bi-unlock-fill"></i> <span class="badge bg-success">3
                                Unlocked</span> </div>
                    </div>
                </div>

                <div class="progress mt-3">
                    <div class="progress-bar" style="width:46%"></div>
                </div>
            </div>

            <div class="tab-container mb-4">
                <button class="btn tab-btn active">All Subjects (4)</button>
                <button class="btn tab-btn">In Progress (3)</button>
                <button class="btn tab-btn">Completed (0)</button>
            </div>

            <div class="row g-4">

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card subject-card shadow-sm">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="icon-circle bg-primary"><i class="bi bi-book"></i></div>
                            <h4 class="fw-bold text-primary mb-0">65%</h4>
                        </div>

                        <h4 class="mt-3 fw-bold">English</h4>
                        <small class="text-muted">Foundational English</small>

                        <div class="mt-3">
                            <small class="fw-bold text-secondary"><i class="bi bi-clock me-1"></i> 16/24 • 2h 30m
                                left</small>
                        </div>

                        <ul class="mt-2 text-muted small ps-3">
                            <li>Reading comprehension</li>
                            <li>Vocabulary building</li>
                            <li>Grammar fundamentals</li>
                        </ul>

                        <div class="progress mt-auto">
                            <div class="progress-bar" style="width:65%"></div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <div class="play-btn shadow-sm"><i class="bi bi-play-fill fs-4"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card subject-card shadow-sm">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="icon-circle bg-warning text-dark"><i class="bi bi-translate"></i></div>
                            <h4 class="fw-bold text-warning mb-0">32%</h4>
                        </div>

                        <h4 class="mt-3 fw-bold">Filipino</h4>
                        <small class="text-muted">Wika at Panitikan</small>

                        <div class="mt-3">
                            <small class="fw-bold text-secondary"><i class="bi bi-clock me-1"></i> 7/22 • 4h 15m
                                left</small>
                        </div>

                        <ul class="mt-2 text-muted small ps-3">
                            <li>Pagbasa at pag-unawa</li>
                            <li>Bokabularyo</li>
                            <li>Gramatika</li>
                        </ul>

                        <div class="progress mt-auto">
                            <div class="progress-bar bg-warning" style="width:32%"></div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <div class="play-btn bg-warning shadow-sm"><i class="bi bi-play-fill fs-4 text-dark"></i></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection