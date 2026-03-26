<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Hall of Fame</title>
    <link rel="shortcut icon" href="/assets/img/bibo-logo-removebg-preview.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background: #f5f7fb;
            font-family: 'Quicksand', Arial, Helvetica, sans-serif;
            color: #333;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                border-radius: 0;
                margin-bottom: 20px;
            }
        }

        .nav-link {
            color: #555;
            border-radius: 12px;
            padding: 12px 15px;
            margin-bottom: 6px;
            transition: all 0.2s;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #eef2ff;
            color: #4f46e5;
            font-weight: 600;
        }

        .main-content {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 20px 15px;
            text-align: center;
            border: 1px solid #f1f3f9;
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .badge-card {
            border-radius: 16px;
            padding: 16px;
            background: white;
            border: 1px solid #f1f3f9;
        }

        .top-learners {
            background: white;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid #f1f3f9;
        }

        .rank-badge {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 700;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-3 p-md-4">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-12 col-lg-auto">
                <div class="d-lg-none d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-bold text-primary">BIBO</h5>
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarContent">
                        <i class="bi bi-list"></i> Menu
                    </button>
                </div>

                <div class="collapse d-lg-block sidebar shadow-sm" id="sidebarContent">
                    <h5 class="mb-4 d-none d-lg-block">
                        <img width="50" height="50" src="/assets/img/bibo-logo.png" class="rounded-circle me-2" alt="logo">
                        <span class="fw-bold">BIBO</span> <br>
                        <small class="text-muted" style="font-size: 0.8rem;">Bacoor Learn</small>
                    </h5>

                    <nav class="nav flex-column">
                        <a class="nav-link" href="#"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                        <a class="nav-link" href="/curriculum"><i class="bi bi-speedometer2 me-2"></i> Curriculum</a>
                        <a class="nav-link" href="/lessons"><i class="bi bi-book me-2"></i> Lessons</a>
                        <a class="nav-link" href="/games"><i class="bi bi-controller me-2"></i> Games</a>
                        <a class="nav-link" href="/quiz"><i class="bi bi-question-circle me-2"></i> Quiz</a>
                        <a class="nav-link" href="/tutor"><i class="bi bi-robot me-2"></i> AI Tutor</a>
                        <a class="nav-link" href="/research"><i class="bi bi-search me-2"></i> Research</a>
                        <a class="nav-link active" href="/achievements"><i class="bi bi-trophy me-2"></i> Achievements</a>
                        <a class="nav-link" href="/settings"><i class="bi bi-gear me-2"></i> Settings</a>
                    </nav>

                    <!-- Current Streak Card (matches image) -->
                    <div class="card mt-4 p-3 text-white" style="background: #4f46e5; border:none; border-radius:20px;">
                        <small class="opacity-75">Current Streak</small>
                        <h3 class="fw-bold mb-0">5 Days <span class="fs-4">🔥</span></h3>
                        <div class="progress mt-3" style="height: 8px; background: rgba(255,255,255,0.3);">
                            <div class="progress-bar bg-warning" style="width:70%"></div>
                        </div>
                    </div>

                    <a href="/api/logout" class="btn btn-light w-100 mt-4 fw-bold shadow-sm">
                        <i class="bi bi-box-arrow-right me-2"></i> Log Out
                    </a>
                </div>
            </div>

            <!-- Main Content - Hall of Fame -->
            <div class="col-12 col-lg-9">
                <div class="main-content">
                    
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <h1 class="fw-bold mb-1">Hall of Fame</h1>
                            <p class="text-muted mb-0">Every lesson is a step toward greatness, Juan!</p>
                        </div>
                        <div class="text-end">
                            <small class="text-muted">TOTAL XP</small>
                            <h2 class="fw-bold text-primary mb-0">10,200</h2>
                            <small class="text-muted">GLOBAL RANK <span class="fw-bold text-dark">#2</span></small>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="stat-card">
                                <h1 class="display-6 fw-bold text-warning">🔥</h1>
                                <p class="mb-1 text-muted small">CURRENT STREAK</p>
                                <h4 class="fw-bold">5 Days</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card">
                                <h1 class="display-6 fw-bold text-success">✅</h1>
                                <p class="mb-1 text-muted small">LESSONS FINISHED</p>
                                <h4 class="fw-bold">24</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card">
                                <h1 class="display-6 fw-bold" style="color: #6366f1;">⭐</h1>
                                <p class="mb-1 text-muted small">PERFECT QUIZZES</p>
                                <h4 class="fw-bold">12</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card">
                                <h1 class="display-6 fw-bold" style="color: #8b5cf6;">📚</h1>
                                <p class="mb-1 text-muted small">LEARNING HOURS</p>
                                <h4 class="fw-bold">48h</h4>
                            </div>
                        </div>
                    </div>

                    <!-- My Badges -->
                    <h5 class="mb-3 fw-semibold"><i class="bi bi-award text-primary"></i> My Badges</h5>
                    <div class="row g-3 mb-5">
                        <div class="col-md-6">
                            <div class="badge-card d-flex align-items-center">
                                <div class="bg-warning text-white rounded-3 p-3 me-3" style="font-size: 2rem;">
                                    ⚡
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Early Bird</h6>
                                    <p class="text-muted small mb-1">Completed a lesson before 8 AM</p>
                                    <small class="badge bg-success">EARNED OCT 12</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="badge-card d-flex align-items-center">
                                <div class="bg-secondary text-white rounded-3 p-3 me-3" style="font-size: 2rem;">
                                    📖
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Storyteller</h6>
                                    <p class="text-muted small mb-0">Finish the English Reading Path</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top Learners -->
                    <div class="top-learners">
                        <h5 class="mb-3 fw-semibold d-flex align-items-center">
                            <i class="bi bi-trophy-fill text-warning me-2"></i> Top Learners
                        </h5>
                        
                        <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="rank-badge bg-warning text-white me-3">#1</span>
                                <div>
                                    <strong>Maria C.</strong>
                                    <small class="text-muted d-block">MC</small>
                                </div>
                            </div>
                            <div class="text-end">
                                <strong class="text-primary">12,450 XP</strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between py-3 border-bottom bg-light px-3 rounded-3" style="margin: 8px -20px;">
                            <div class="d-flex align-items-center">
                                <span class="rank-badge bg-primary text-white me-3">#2</span>
                                <div>
                                    <strong>Juan D.</strong>
                                    <small class="text-muted d-block">(You)</small>
                                </div>
                            </div>
                            <div class="text-end">
                                <strong class="text-primary">10,200 XP</strong>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-primary px-4 py-2 fw-semibold">VIEW FULL RANKINGS</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Active nav highlight
        const currentLink = window.location.origin + window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === '/achievements') {
                link.classList.add('active');
            }
        });
    </script>

</body>
</html>