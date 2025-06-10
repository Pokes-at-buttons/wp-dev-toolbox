<?php
// PDO (Preferred for Most Modern Projects)

try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_name", "db_user", "db_pass");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SELECT with prepared statement
    $stmt = $pdo->prepare("SELECT * FROM users WHERE status = :status");
    $stmt->execute(['status' => 'active']);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        echo $user['name'] . "<br>";
    }

    // INSERT example
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->execute([
        'name' => 'Tim',
        'email' => 'tim@example.com'
    ]);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
