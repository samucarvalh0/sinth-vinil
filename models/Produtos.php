<?php

class Produto
{

    public function listar()
    {
        global $conn;

        $sql = "SELECT p.*, c.nome AS categoria_nome FROM produtos p
                LEFT JOIN categorias c ON p.id_categorias = c.id
                ORDER BY p.titulo ASC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

    public function buscarPorId($id)
    {
        global $conn;

        $sql = "SELECT p.*, c.nome AS categoria_nome FROM produtos p
                LEFT JOIN categorias c ON p.id_categorias = c.id
                WHERE p.id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function cadastrar($dados)
    {
        global $conn;

        $nome = $dados['titulo'] ?? $dados['nome'] ?? '';
        $categoria_id = (int) ($dados['id_categorias'] ?? $dados['categoria_id'] ?? 0);
        $artista = $dados['artista'] ?? '';
        $ano = (int) ($dados['ano'] ?? date('Y'));
        $preco = (float) ($dados['preco'] ?? 0);
        $estoque = (int) ($dados['estoque'] ?? 0);
        $descricao = $dados['descricao'] ?? '';
        $imagem = $dados['imagem'] ?? '';

        $sql = "INSERT INTO produtos (titulo, id_categorias, artista, ano, preco, estoque, descricao, imagem)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisidiss", $nome, $categoria_id, $artista, $ano, $preco, $estoque, $descricao, $imagem);

        return $stmt->execute();
    }

    public function editar($id, $dados)
    {
        global $conn;

        $nome = $dados['titulo'] ?? $dados['nome'] ?? '';
        $categoria_id = (int) ($dados['id_categorias'] ?? $dados['categoria_id'] ?? 0);
        $artista = $dados['artista'] ?? '';
        $ano = (int) ($dados['ano'] ?? date('Y'));
        $preco = (float) ($dados['preco'] ?? 0);
        $estoque = (int) ($dados['estoque'] ?? 0);
        $descricao = $dados['descricao'] ?? '';
        $imagem = $dados['imagem'] ?? null;

        if (!empty($imagem)) {
            $sql = "UPDATE produtos SET titulo = ?, id_categorias = ?, artista = ?, ano = ?, preco = ?, estoque = ?, descricao = ?, imagem = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sisidissi", $nome, $categoria_id, $artista, $ano, $preco, $estoque, $descricao, $imagem, $id);
        } else {
            $sql = "UPDATE produtos SET titulo = ?, id_categorias = ?, artista = ?, ano = ?, preco = ?, estoque = ?, descricao = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sisidisi", $nome, $categoria_id, $artista, $ano, $preco, $estoque, $descricao, $id);
        }

        return $stmt->execute();
    }

    public function excluir($id)
    {
        global $conn;

        $sql = "DELETE FROM produtos WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    public function contar()
    {
        global $conn;

        $sql = "SELECT COUNT(*) as total FROM produtos";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        return $row['total'] ?? 0;
    }

}