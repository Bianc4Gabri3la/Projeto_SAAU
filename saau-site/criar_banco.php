<?php
$db = new SQLite3('banco_saau.db');
$db->exec("CREATE TABLE IF NOT EXISTS animais (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    idade TEXT NOT NULL,
    descricao TEXT NOT NULL,
    foto TEXT NOT NULL
)");
echo "Banco e tabela criados!";
?>