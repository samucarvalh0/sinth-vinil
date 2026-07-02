<?php require __DIR__ . "/include/sidebar.php"; ?>
<?php require __DIR__ . "/include/header.php"; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Detalhe do Pedido #<?= $_GET['id'] ?? '' ?></h1>
                    <a href="?page=admin-pedidos" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Voltar
                    </a>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header bg-dark text-white">
                                <h5 class="mb-0">Produtos do Pedido</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Produto</th>
                                                <th>Quantidade</th>
                                                <th>Preço Unitário</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">Nenhum produto encontrado</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h5 class="mb-0">Resumo do Pedido</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Status</label>
                                    <select name="status" class="form-control">
                                        <option>Pendente</option>
                                        <option>Processando</option>
                                        <option>Enviado</option>
                                        <option>Entregue</option>
                                        <option>Cancelado</option>
                                    </select>
                                </div>

                                <hr>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <strong>R$ 0,00</strong>
                                </div>
                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Frete:</span>
                                    <strong>R$ 0,00</strong>
                                </div>
                                <div class="mb-3 d-flex justify-content-between border-top pt-2">
                                    <span class="fw-bold">Total:</span>
                                    <strong class="fw-bold h5">R$ 0,00</strong>
                                </div>

                                <button class="btn btn-primary w-100">
                                    <i class="bi bi-save me-2"></i>Salvar Alterações
                                </button>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header bg-dark text-white">
                                <h5 class="mb-0">Informações de Entrega</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Cliente:</strong> N/A</p>
                                <p><strong>Email:</strong> N/A</p>
                                <p><strong>Telefone:</strong> N/A</p>
                                <p><strong>Endereço:</strong> N/A</p>
                                <p><strong>Data do Pedido:</strong> N/A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>