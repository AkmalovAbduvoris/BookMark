<?php
try {
    $pdo = new PDO("pgsql:host=postgres_db;port=5432;dbname=bookmark", "user", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        echo "Name: " . htmlspecialchars($user['name']) . "<br>";
    }
} catch (\Throwable $th) {
    echo "Error: " . $th->getMessage();
}
