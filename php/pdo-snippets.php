<?php
// PDO (Preferred for Most Modern Projects)

try {
    // Create a new PDO (PHP Data Object) instance to connect to the MySQL database.
    // Replace "db_name", "db_user", and "db_pass" with your actual database details.
    $pdo = new PDO("mysql:host=localhost;dbname=db_name", "db_user", "db_pass");

    // Set an attribute on the PDO connection to throw exceptions if something goes wrong.
    // This makes error handling easier and more informative.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ----------------------------
    // SELECT DATA FROM THE DATABASE
    // ----------------------------

    // Prepare a SQL SELECT query with a placeholder for the 'status'.
    // Using placeholders (e.g., :status) helps prevent SQL injection.
    $stmt = $pdo->prepare("SELECT * FROM users WHERE status = :status");

    // Execute the query and pass the value for the placeholder.
    // Here, we’re asking for users with status = 'active'.
    $stmt->execute(['status' => 'active']);

    // Fetch all results as an associative array (column names as keys).
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the array and display each user's name.
    foreach ($users as $user) {
        echo $user['name'] . "<br>"; // Output the user's name followed by a line break
    }

    // ----------------------------
    // INSERT DATA INTO THE DATABASE
    // ----------------------------

    // Prepare an INSERT query with placeholders for name and email.
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

    // Execute the query with actual values for the placeholders.
    $stmt->execute([
        'name' => 'Tim',                  // This will go into the "name" column
        'email' => 'tim@example.com'      // This will go into the "email" column
    ]);
}
// If there’s any problem (like bad DB details or query issues), this will catch the error.
catch (PDOException $e) {
    // Output the error message. In a real app, you’d usually log this instead of showing it to users.
    echo "Connection failed: " . $e->getMessage();
}
