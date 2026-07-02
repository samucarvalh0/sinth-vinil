<?php require __DIR__ . "/include/sidebar.php"; ?>
<?php require __DIR__ . "/include/header.php"; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Categorias</h1>
            <a href="?page=cadCat" class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i>Nova Categoria
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($categorias)): ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Nenhuma categoria encontrada</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($categorias as $categoria): ?>
                                    <tr>
                                        <td><?= $categoria['id'] ?></td>
                                        <td><strong><?= $categoria['nome'] ?></strong></td>
                                        <td>
                                            <a href="?page=editCat&id=<?= $categoria['id'] ?>" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="?page=excluirCat&id=<?= $categoria['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>