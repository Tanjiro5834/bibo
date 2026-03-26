<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibo E-Learning | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/assets/js/helpers.js"></script>


    <style>
        body {
            background-color: #e0f2fe;
            background-image:
                radial-gradient(at 0% 0%, hsla(199, 100%, 93%, 1) 0, transparent 50%),
                radial-gradient(at 50% 0%, hsla(225, 100%, 92%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(269, 100%, 92%, 1) 0, transparent 50%);
            font-family: 'Quicksand', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .login-card {
            border-radius: 2rem;
            border: 4px solid #ffffff;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .bg-bibo {
            background: linear-gradient(135deg, #6366f1, #3b82f6);
        }

        .text-bibo {
            color: #3b82f6;
        }

        .btn-bibo {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.8rem;
            font-size: 1.1rem;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .btn-bibo:hover:not(:disabled) {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5);
            color: white;
        }

        .form-control {
            border-radius: 12px;
            padding: 0.6rem 1rem;
        }

        .input-group-text {
            border-radius: 12px 0 0 12px;
            background-color: white;
        }

        .password-toggle {
            border-radius: 0 12px 12px 0;
        }

        /* Reusable Notify styling for kids theme */
        .notifyjs-bootstrap-base {
            border-radius: 50px !important;
            font-family: 'Quicksand', sans-serif !important;
            font-weight: 700 !important;
        }
    </style>
</head>

<body>

    <div id="login-app" class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                <div class="card login-card shadow-lg">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-5">
                            <div class="d-inline-block p-3 rounded-circle bg-bibo mb-3 shadow-sm">
                                <i class="fas fa-graduation-cap text-white fa-2x"></i>
                            </div>
                            <h3 class="fw-bold text-bibo">Bibo E-Learning</h3>
                            <p class="text-muted small">Welcome back, explorer!</p>
                        </div>

                        <form @submit.prevent="attemptLogin">
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary text-uppercase">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text border-end-0">
                                        <i class="far fa-user text-muted"></i>
                                    </span>
                                    <input type="text" v-model="username" class="form-control border-start-0"
                                        placeholder="Enter your username" required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-secondary text-uppercase">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text border-end-0">
                                        <i class="fas fa-lock text-muted"></i>
                                    </span>
                                    <input :type="showPass ? 'text' : 'password'" v-model="password"
                                        class="form-control border-start-0 border-end-0"
                                        placeholder="Enter your password" required>
                                    <button class="btn btn-outline-secondary border-start-0 password-toggle"
                                        type="button" @click="showPass = !showPass">
                                        <i class="fas" :class="showPass ? 'fa-eye-slash' : 'fa-eye'"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="text-end mb-4">
                                <a href="#" class="small text-bibo fw-bold text-decoration-none">Forgot
                                    Password?</a>
                            </div>

                            <button type="submit"
                                class="btn btn-bibo w-100 shadow-sm d-flex align-items-center justify-content-center"
                                :disabled="isLoading">
                                <span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span>
                                <span v-text="isLoading ? 'Checking...' : 'Sign In'"></span>
                            </button>
                        </form>

                    </div>

                    <div class="card-footer bg-transparent border-0 text-center pb-4">
                        <span class="text-muted small">New to Bibo?</span>
                        <a href="/register" class="small text-bibo fw-bold text-decoration-none ms-1">Create an
                            account</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        new Vue({
            el: '#login-app',
            data: {
                username: '',
                password: '',
                isLoading: false,
                showPass: false
            },
            methods: {
                async attemptLogin() {
                    this.isLoading = true;
                    try {
                        const response = await axios.post('/api/login', {
                            username: this.username,
                            password: this.password
                        });

                        $.notify("Welcome back! Loading your adventure...", "success");

                        setTimeout(() => {
                            window.location.href = '/curriculum';
                        }, 2000);

                    } catch (error) {
                        this.isLoading = false;
                        if (error.response && error.response.data.errors) {
                            showLaravelErrors(error.response.data.errors);
                        } else {
                            $.notify(error.response?.data?.message || "Login failed!", "error");
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
