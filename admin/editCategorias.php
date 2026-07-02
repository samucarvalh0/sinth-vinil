<?php require __DIR__ . "/include/sidebar.php"; ?>
<?php require __DIR__ . "/include/header.php"; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="mb-4">Editar Categoria</h1>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="?page=atualizarCat">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($categoria['id'] ?? '') ?>">

                            <div class="mb-3">
                                <label class="form-label">Nome da Categoria</label>
                                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($categoria['nome'] ?? '') ?>" required>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Atualizar Categoria
                                </button>
                                <a href="?page=admin-categorias" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-2"></i>Cancelar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>