<?php
// Assume you have a list of users from a database or an array
$users = [
    1 => 'John Doe',
    2 => 'Jane Smith',
    3 => 'Alice Johnson'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Select a User to View Summary</h1>
    <form action="summary.php" method="GET">
        <label for="user_id">Choose a user:</label>
        <select name="user_id" id="user_id">
            <?php foreach ($users as $id => $name): ?>
                <option value="<?= $id ?>"><?= $name ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">View Summary</button>
    </form>
</body>
</html>



<?php
// Dummy data for demonstration purposes
$users_data = [
    1 => ['name' => 'John Doe', 'email' => 'john@example.com', 'age' => 30, 'address' => '123 Main St'],
    2 => ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'age' => 28, 'address' => '456 Oak St'],
    3 => ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'age' => 35, 'address' => '789 Pine St']
];

// Get the user ID from the URL
$user_id = $_GET['user_id'] ?? null;
if ($user_id && isset($users_data[$user_id])) {
    $user = $users_data[$user_id];
} else {
    echo "User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .user-info {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
        }
        .user-info h2 {
            text-align: center;
        }
        .user-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>User Summary</h1>

    <div class="user-info">
        <h2><?= htmlspecialchars($user['name']) ?></h2>
        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($user['age']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($user['address']) ?></p>
    </div>

    <button onclick="window.print()">Print Page</button>
</body>
</html>
