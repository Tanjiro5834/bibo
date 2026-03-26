<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBO - Settings</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --bibo-primary: #4f46e5;
            --bibo-secondary: #9333ea;
            --bibo-bg: #f8fafc;
            --bibo-dark: #111827;
        }

        body {
            background-color: var(--bibo-bg);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: var(--bibo-dark);
        }

        /* Reusing your Theme Classes */
        .card-ui {
            border-radius: 20px;
            border: none;
            padding: 24px;
            background: white;
            transition: all 0.3s ease;
        }

        .subject-card {
            border-radius: 24px;
            border: none;
            padding: 24px;
            height: 100%;
            transition: transform 0.2s;
            background: white;
        }

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

        /* Settings Specific Styles */
        .profile-avatar-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .profile-avatar {
            width: 100%;
            height: 100%;
            border-radius: 30px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .edit-avatar-btn {
            position: absolute;
            bottom: -5px;
            right: -5px;
            width: 32px;
            height: 32px;
            background: var(--bibo-primary);
            border-radius: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid white;
            cursor: pointer;
        }

        .settings-list-item {
            display: flex;
            align-items: center;
            padding: 16px;
            border-radius: 16px;
            margin-bottom: 8px;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            color: inherit;
        }

        .settings-list-item:hover {
            background: #f1f5f9;
        }

        .settings-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            font-size: 1.2rem;
        }

        /* Form Controls Overrides */
        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: var(--bibo-primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        /* Toggle Switches */
        .form-check-input:checked {
            background-color: var(--bibo-primary);
            border-color: var(--bibo-primary);
        }

        .save-btn {
            background: linear-gradient(90deg, var(--bibo-primary), var(--bibo-secondary));
            border: none;
            border-radius: 14px;
            padding: 12px 24px;
            color: white;
            font-weight: 600;
            transition: opacity 0.2s;
        }

        .save-btn:hover {
            opacity: 0.9;
            color: white;
        }

        .danger-zone {
            border: 1px dashed #fee2e2;
            background: #fffafb;
        }

        .nav-back {
            text-decoration: none;
            color: var(--bibo-dark);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            
            <!-- Header -->
            <a href="#" class="nav-back">
                <i class="bi bi-chevron-left me-2"></i> Back to Arcade
            </a>
            
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h2 class="fw-bold mb-1">Account Settings</h2>
                    <p class="text-muted">Manage your BIBO learning profile and preferences</p>
                </div>
                <button class="btn save-btn shadow-sm">Save Changes</button>
            </div>

            <div class="row g-4">
                <!-- Left Column: Profile & Navigation -->
                <div class="col-12 col-md-4">
                    <div class="card card-ui shadow-sm text-center mb-4">
                        <div class="profile-avatar-wrapper mb-3">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="User Avatar" class="profile-avatar">
                            <div class="edit-avatar-btn shadow-sm">
                                <i class="bi bi-camera-fill"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-0">Juan Dela Cruz</h5>
                        <small class="text-muted">Grade 4 • Bacoor Central</small>
                        <div class="mt-3">
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">Gold Tier Learner</span>
                        </div>
                    </div>

                    <div class="card card-ui shadow-sm p-2">
                        <a href="#profile" class="settings-list-item active" style="background: #f1f5f9;">
                            <div class="settings-icon bg-primary text-white">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <span class="fw-600">Profile</span>
                        </a>
                        <a href="#notifications" class="settings-list-item">
                            <div class="settings-icon bg-warning text-dark">
                                <i class="bi bi-bell"></i>
                            </div>
                            <span class="fw-600">Notifications</span>
                        </a>
                        <a href="#privacy" class="settings-list-item">
                            <div class="settings-icon bg-success text-white">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <span class="fw-600">Privacy</span>
                        </a>
                        <a href="#help" class="settings-list-item">
                            <div class="settings-icon bg-info text-white">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <span class="fw-600">Help Center</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Settings Form -->
                <div class="col-12 col-md-8">
                    <!-- Personal Info -->
                    <div class="card card-ui shadow-sm mb-4">
                        <h5 class="fw-bold mb-4"><i class="bi bi-person me-2"></i>Personal Information</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">FULL NAME</label>
                                <input type="text" class="form-control" value="Juan Dela Cruz">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">LEARNER ID (LRN)</label>
                                <input type="text" class="form-control" value="123456789012" disabled>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-muted">EMAIL ADDRESS</label>
                                <input type="email" class="form-control" value="juan.dlc@deped.gov.ph">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">GRADE LEVEL</label>
                                <select class="form-select">
                                    <option>Grade 3</option>
                                    <option selected>Grade 4</option>
                                    <option>Grade 5</option>
                                    <option>Grade 6</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">SCHOOL</label>
                                <input type="text" class="form-control" value="Bacoor Central School">
                            </div>
                        </div>
                    </div>

                    <!-- Preferences -->
                    <div class="card card-ui shadow-sm mb-4">
                        <h5 class="fw-bold mb-4"><i class="bi bi-sliders me-2"></i>App Preferences</h5>
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <h6 class="fw-bold mb-0">Daily Learning Reminder</h6>
                                <p class="text-muted small mb-0">Get a notification to keep your streak alive</p>
                            </div>
                            <div class="form-check form-switch fs-4">
                                <input class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <h6 class="fw-bold mb-0">Sound Effects & SFX</h6>
                                <p class="text-muted small mb-0">Play sounds during games and lessons</p>
                            </div>
                            <div class="form-check form-switch fs-4">
                                <input class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-0">
                            <div>
                                <h6 class="fw-bold mb-0">Offline Mode</h6>
                                <p class="text-muted small mb-0">Pre-download current subject modules</p>
                            </div>
                            <div class="form-check form-switch fs-4">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                    </div>

                    <!-- Danger Zone -->
                    <div class="card card-ui shadow-sm danger-zone">
                        <h5 class="fw-bold text-danger mb-3">Danger Zone</h5>
                        <p class="text-muted small">Once you sign out or delete your account, your learning progress in the Brain Arcade will be archived.</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-danger rounded-pill px-4">Sign Out</button>
                            <button class="btn text-danger-emphasis small">Delete Account</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Stats (Reusing Progress UI) -->
            <div class="mt-5 text-center">
                <p class="text-muted small">BIBO App v2.4.0 • Made with ❤️ for Bacoor City</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>