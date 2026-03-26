@extends('layouts.main')

@section('content')

<style>
    .card-ui {
        border-radius: 20px;
        border: none;
        padding: 20px;
    }

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

    .tab-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="col-12 col-lg mt-4 mt-lg-0">

    <h2 class="fw-bold">What do you want to discover today?</h2>
    <form class="mb-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search topics...">
            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
        </div>
    </form>

    <h4 class="fw-bold mb-3">Trending Topics</h4>

    <div class="row g-4">
        <!-- Bacoor History -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card subject-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="icon-circle bg-primary"><i class="bi bi-building"></i></div>
                </div>
                <h4 class="mt-3 fw-bold">Bacoor History</h4>
                <small class="text-muted">Discover the 'City of Strike' and the history of Zapote Bridge.</small>
                <div class="d-flex justify-content-end mt-3">
                    <a href="#" class="fw-bold text-primary">Explore →</a>
                </div>
            </div>
        </div>

        <!-- Space & Stars -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card subject-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="icon-circle bg-warning text-dark"><i class="bi bi-moon-stars"></i></div>
                </div>
                <h4 class="mt-3 fw-bold">Space & Stars</h4>
                <small class="text-muted">How far is the moon? Learn about our amazing solar system.</small>
                <div class="d-flex justify-content-end mt-3">
                    <a href="#" class="fw-bold text-primary">Explore →</a>
                </div>
            </div>
        </div>

        <!-- Ocean Life -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card subject-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="icon-circle bg-info"><i class="bi bi-water"></i></div>
                </div>
                <h4 class="mt-3 fw-bold">Ocean Life</h4>
                <small class="text-muted">Meet the creatures living in the deep blue sea.</small>
                <div class="d-flex justify-content-end mt-3">
                    <a href="#" class="fw-bold text-primary">Explore →</a>
                </div>
            </div>
        </div>

        <!-- Ancient Giants -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card subject-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="icon-circle bg-success"><i class="bi bi-tree"></i></div>
                </div>
                <h4 class="mt-3 fw-bold">Ancient Giants</h4>
                <small class="text-muted">Explore the era of Dinosaurs and how they lived.</small>
                <div class="d-flex justify-content-end mt-3">
                    <a href="#" class="fw-bold text-primary">Explore →</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection