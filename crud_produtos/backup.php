<?php
    // Inclui a conexão com o banco de dados
    include 'conexao.php'; // As variáveis $host, $usuario, $senha, e $db já estão definidas

    // Verifique se a conexão está correta
    $conexao = new mysqli($host, $usuario, $senha, $db);
    if ($conexao->connect_error) {
        die('Erro de conexão: ' . $conexao->connect_error);
    }

    // Definindo o nome do arquivo de backup
    $backupFile = 'backup_produtos_' . date('Y-m-d_H-i-s') . '.sql';

    // Headers para download automático do arquivo
    header('Content-Description: File Transfer');
    header('Content-Type: application/sql');
    header('Content-Disposition: attachment; filename="' . basename($backupFile) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    // Abre o output para gravar diretamente no navegador
    $output = fopen('php://output', 'w');

    // Adiciona um cabeçalho para o arquivo SQL
    fwrite($output, "-- Backup do banco de dados: $db\n");
    fwrite($output, "-- Gerado em: " . date('Y-m-d H:i:s') . "\n\n");

    // Consulta para pegar todas as tabelas do banco
    $result = $conexao->query("SHOW TABLES");

    if (!$result) {
        die('Erro ao obter tabelas: ' . $conexao->error);
    }

    while ($row = $result->fetch_row()) {
        $tabela = $row[0];
        
        // Cria estrutura da tabela
        $result2 = $conexao->query("SHOW CREATE TABLE $tabela");
        $row2 = $result2->fetch_row();
        fwrite($output, "\n\n" . $row2[1] . ";\n\n");

        // Insere os dados da tabela
        $result3 = $conexao->query("SELECT * FROM $tabela");
        $numCampos = $result3->field_count;

        while ($row3 = $result3->fetch_row()) {
            fwrite($output, "INSERT INTO $tabela VALUES(");
            for ($i = 0; $i < $numCampos; $i++) {
                $row3[$i] = $row3[$i] ? '"' . $conexao->real_escape_string($row3[$i]) . '"' : 'NULL';
                fwrite($output, $row3[$i] . ($i < ($numCampos - 1) ? ',' : ''));
            }
            fwrite($output, ");\n");
        }
    }

    // Fecha o arquivo gerado
    fclose($output);
    exit;
?>

