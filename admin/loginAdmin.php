<?php require __DIR__ . "/include/header.php"; ?>

<main style="background: #212529; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="card login-card">

        <div class="card-body p-5">

            <div class="text-center mb-4">

                <i class="bi bi-shield-lock-fill logo"></i>

                <h3 class="mt-3">
                    Painel Administrativo
                </h3>

                <p class="text-muted">
                    Faça login para continuar
                </p>

            </div>

            <form method="POST" action="?page=autenticar">

                <div class="mb-3">

                    <label class="form-label">
                        Login
                    </label>

                    <input type="text" name="usuario" class="form-control" placeholder="Digite seu login" required>

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Senha
                    </label>

                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>

                </div>

                <button class="btn btn-primary w-100">

                    <i class="bi bi-box-arrow-in-right me-2"></i>

                    Entrar

                </button>

            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</main>