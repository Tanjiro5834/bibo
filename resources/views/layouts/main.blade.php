<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Curriculum</title>
    <link rel="shortcut icon" href="/assets/img/bibo-logo-removebg-preview.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script defer src="/assets/js/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        html, body {
            height: 100%;
            overflow: hidden;
            background: #f5f7fb;
            font-family: 'Quicksand', Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: #333;
            font-weight: 400;
        }

        /* ─── Main layout wrapper ─────────────────────────────── */
        .main-wrapper {
            height: 100vh;
            overflow: hidden;
            padding: 12px 16px;
            display: flex;
            flex-direction: column;
        }

        .main-row {
            display: flex;
            flex-direction: row;
            flex: 1;
            gap: 16px;
            overflow: hidden;
            flex-wrap: nowrap;
            min-height: 0;
        }

        /* ─── Sidebar ─────────────────────────────────────────── */
        .sidebar-col {
            flex-shrink: 0;
            width: 260px;
            min-width: 260px;
        }

        .sidebar {
            width: 100%;
            height: 100%;
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            overflow-y: auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .sidebar .nav-link {
            color: #555;
            border-radius: 12px;
            padding: 10px 15px;
            margin-bottom: 8px;
            transition: 0.2s;
            font-weight: 500;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #eef2ff;
            color: #4f46e5;
            font-weight: 600;
        }

        /* ─── Content area ────────────────────────────────────── */
        .content-col {
            flex: 1;
            min-width: 0;
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* ─── Typography ──────────────────────────────────────── */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
        }

        /* ─── Mobile ──────────────────────────────────────────── */
        @media (max-width: 991.98px) {
            html, body {
                overflow: auto;
            }

            .main-wrapper {
                height: auto;
                overflow: visible;
            }

            .main-row {
                flex-direction: column;
                overflow: visible;
            }

            .sidebar-col {
                width: 100%;
                min-width: unset;
            }

            .sidebar {
                height: auto;
                border-radius: 0;
                margin-bottom: 0;
            }

            .content-col {
                height: auto;
                overflow: visible;
            }
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <div class="main-row">

            {{-- ─── Sidebar ─────────────────────────────────────── --}}
            <div class="sidebar-col">

                {{-- Mobile toggle --}}
                <div class="d-lg-none d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-bold text-primary">BIBO</h5>
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#sidebarContent">
                        <i class="bi bi-list"></i> Menu
                    </button>
                </div>

                <div class="collapse d-lg-block sidebar shadow-sm" id="sidebarContent">
                    <h5 class="mb-4 d-none d-lg-block">
                        <img width="50" height="50" src="/assets/img/bibo-logo.png" class="rounded-circle me-2"
                            alt="logo">
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
                        <a class="nav-link" href="/achievements"><i class="bi bi-trophy me-2"></i> Achievements</a>
                        <a class="nav-link" href="/settings"><i class="bi bi-gear me-2"></i> Settings</a>
                    </nav>

                    <div class="card mt-4 p-3 text-white"
                        style="background:#4f46e5; border:none; border-radius:20px;">
                        <small class="opacity-75">Current Streak</small>
                        <h3 class="fw-bold mb-0">5 Days 🔥</h3>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar bg-warning" style="width:70%"></div>
                        </div>
                    </div>

                    <a href="/api/logout" class="btn btn-light w-100 mt-3 fw-bold shadow-sm">
                        <i class="bi bi-box-arrow-right me-2"></i> Log Out
                    </a>
                </div>
            </div>

            {{-- ─── Main content (yields from child views) ──────── --}}
            <div class="content-col">
                @yield('content')
            </div>

        </div>
    </div>

    <script>
        const currentLink = window.location.origin + window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach((nav) => {
            if (nav.href === currentLink) {
                nav.classList.add('active');
                document.querySelector('title').textContent = nav.textContent.trim();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>