<?php

class Pedido
{

    public function listar($usuario = null){}

    public function buscar($id){}

    public function finalizar($dados){}

    public function contar()
    {
        global $conn;

        $sql = "SELECT COUNT(*) as total FROM pedidos";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        return $row['total'] ?? 0;
    }

    public function listarUltimos($limite = 5)
    {
        global $conn;

        $sql = "SELECT p.id, p.cliente_id, p.data, p.status, p.total, u.nome as cliente
                FROM pedidos p
                LEFT JOIN clientes u ON p.cliente_id = u.id
                ORDER BY p.data DESC
                LIMIT ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $limite);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

}
?>