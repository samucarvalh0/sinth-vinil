<?php require __DIR__ . "/include/sidebar.php"; ?>
<?php require __DIR__ . "/include/header.php"; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 class="mb-4">Editar Produto</h1>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="?page=atualizarProd" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($produto['id'] ?? '') ?>">

                            <div class="mb-3">
                                <label class="form-label">Nome do Produto</label>
                                <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($produto['titulo'] ?? '') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Categoria</label>
                                <input type="text" name="categoria_nome" list="categorias-list" class="form-control" required placeholder="Digite ou selecione uma categoria" value="<?= htmlspecialchars($produto['categoria_nome'] ?? '') ?>">
                                <datalist id="categorias-list">
                                    <?php if (!empty($categorias)): ?>
                                        <?php foreach ($categorias as $cat): ?>
                                            <option value="<?= htmlspecialchars($cat['nome']) ?>"></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </datalist>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Artista</label>
                                        <input type="text" name="artista" class="form-control" value="<?= htmlspecialchars($produto['artista'] ?? '') ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Ano</label>
                                        <input type="number" name="ano" class="form-control" min="1900" max="2100" value="<?= htmlspecialchars($produto['ano'] ?? date('Y')) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Preço</label>
                                        <input type="number" name="preco" class="form-control" step="0.01" value="<?= htmlspecialchars($produto['preco'] ?? '') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Estoque</label>
                                        <input type="number" name="estoque" class="form-control" value="<?= htmlspecialchars($produto['estoque'] ?? '') ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Descrição</label>
                                <textarea name="descricao" class="form-control" rows="4"><?= htmlspecialchars($produto['descricao'] ?? '') ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Imagem</label>
                                <input type="file" name="imagem" class="form-control" accept="image/*">
                                <small class="text-muted">Deixe em branco para manter a imagem atual</small>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Atualizar Produto
                                </button>
                                <a href="?page=admin-produtos" class="btn btn-secondary">
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