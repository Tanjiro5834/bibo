<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Bibo E-Learning | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="/assets/js/vue/vue.dev.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="/assets/js/helpers.js"></script>

    <style>
        body {
            background-color: #e0f2fe;
            background-image:
                radial-gradient(at 0% 0%, hsla(199, 100%, 93%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(269, 100%, 92%, 1) 0, transparent 50%);
            font-family: 'Quicksand', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
        }

        .reg-card {
            border-radius: 2.5rem;
            border: 6px solid #ffffff;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .text-bibo {
            color: #3b82f6;
        }

        .btn-register {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
            color: white;
        }

        .form-label {
            font-weight: 700;
            color: #475569;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid #e2e8f0;
            padding: 0.7rem 1rem;
        }

        /* Pure CSS Custom Selectors for Avatars and Gender */
        .selection-group input[type="radio"] {
            display: none;
        }

        .selection-card {
            display: block;
            border: 2px solid #e2e8f0;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.2s ease;
            background: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .selection-card:hover {
            border-color: #93c5fd;
            background-color: #f8fafc;
        }

        /* When the hidden radio button is checked, style the label next to it */
        .selection-group input[type="radio"]:checked+.selection-card {
            border-color: #3b82f6;
            background-color: #eff6ff;
            transform: scale(1.05);
        }

        .selection-group input[type="radio"]:checked+.selection-card::after {
            content: '✓';
            position: absolute;
            top: -10px;
            right: -10px;
            background: #3b82f6;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .avatar-emoji {
            font-size: 2.5rem;
            display: block;
        }

        .floating-emoji {
            animation: float 4s ease-in-out infinite;
            display: inline-block;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .notifyjs-corner {
            top: 20px !important;
        }

        .notifyjs-bootstrap-base {
            border-radius: 50px !important;

            font-family: 'Quicksand', sans-serif !important;
            font-weight: 700 !important;
            border: 2px solid white !important;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
    </style>
</head>

<body>

    <div class="container" id="register-content">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <div class="card reg-card p-3 p-md-4">
                    <div class="card-body">

                        <div class="text-center mb-5">
                            <div class="floating-emoji">
                                <span style="font-size: 3.5rem;">🎨</span>
                            </div>
                            <h2 class="fw-bold text-bibo">Join the Adventure!</h2>
                            <p class="text-muted">Create your profile and start learning.</p>
                        </div>

                        <form action="/register" method="POST" ref="registrationForm" @submit.prevent="submitForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Charlie"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Brown"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Cool Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"
                                            style="border-radius: 15px 0 0 15px;">@</span>
                                        <input type="text" name="username" class="form-control border-start-0"
                                            placeholder="space_cadet" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Birthday 🎂</label>
                                    <input type="date" name="birthdate" class="form-control" required>
                                </div>
                            </div>

                            <hr class="my-4 opacity-50">

                            <div class="mb-4">
                                <label class="form-label d-block text-center mb-3">Choose Your Hero!</label>
                                <div class="row g-3 justify-content-center selection-group">
                                    <div class="col-4 col-md-2">
                                        <input type="radio" name="avatar" id="av1" value="cat" required>
                                        <label for="av1" class="selection-card">
                                            <span class="avatar-emoji">🐱</span>
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <input type="radio" name="avatar" id="av2" value="robot">
                                        <label for="av2" class="selection-card">
                                            <span class="avatar-emoji">🤖</span>
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <input type="radio" name="avatar" id="av3" value="fox">
                                        <label for="av3" class="selection-card">
                                            <span class="avatar-emoji">🦊</span>
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <input type="radio" name="avatar" id="av4" value="unicorn">
                                        <label for="av4" class="selection-card">
                                            <span class="avatar-emoji">🦄</span>
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <input type="radio" name="avatar" id="av5" value="dino">
                                        <label for="av5" class="selection-card">
                                            <span class="avatar-emoji">🦖</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label d-block text-center mb-3">Are you a...</label>
                                <div class="row g-3 justify-content-center selection-group">
                                    <div class="col-4 col-md-3">
                                        <input type="radio" name="gender" id="g1" value="boy">
                                        <label for="g1" class="selection-card">
                                            <div class="fs-2">👦</div>
                                            <div class="small fw-bold">Boy</div>
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <input type="radio" name="gender" id="g2" value="girl">
                                        <label for="g2" class="selection-card">
                                            <div class="fs-2">👧</div>
                                            <div class="small fw-bold">Girl</div>
                                        </label>
                                    </div>
                                    {{-- <div class="col-4 col-md-3">
                                        <input type="radio" name="gender" id="g3" value="star">
                                        <label for="g3" class="selection-card">
                                            <div class="fs-2">🌟</div>
                                            <div class="small fw-bold">Star</div>
                                        </label>
                                    </div> --}}
                                </div>
                            </div>

                            <hr class="my-4 opacity-50">

                            <div class="mb-4">
                                <label class="form-label">Secret Password 🔑</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Don't tell anyone!" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Confirm Password 🔑</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Don't tell anyone!" required>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-register w-100 py-3 shadow">
                                    Ready, Set, Go! ➔
                                </button>

                                <p class="mt-3 text-muted small">
                                    Already part of the club?
                                    <a href="/login" class="text-bibo fw-bold text-decoration-none">Sign In</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="mt-4 text-center text-secondary small">
                    Parental Guidance: Help your child keep their secret password safe! 🛡️
                </div>


            </div>
        </div>
    </div>
    <script>
        const registerApp = new Vue({
            el: '#register-content',
            data() {
                return {
                    message: 'Welcome to the registration page!',
                    isLoading: false,
                };
            },
            methods: {
                async submitForm() {
                    this.isLoading = true;
                    const formData = new FormData(this.$refs.registrationForm);
                    try {
                        const response = await axios.post('/api/register', formData);
                        if (response.status === 200) {
                            $.notify("Registration successful! Welcome to Bibo E-Learning!", {
                                className: 'success',
                                position: 'top center',
                                autoHideDelay: 3000,
                            });
                            window.location.href = '/curriculum'; // Redirect to dashboard or home page
                        } else {
                            showLaravelErrors(response.data.errors);
                        }
                        this.isLoading = false;
                    } catch (error) {
                        this.isLoading = false;
                        showLaravelErrors(error.response.data.errors);
                    }

                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
