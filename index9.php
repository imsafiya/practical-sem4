<?php
session_start();

// Check if the session variable 'visit_count' exists
if (isset($_SESSION['visit_count'])) {
    // Increment the visit count
    $_SESSION['visit_count'] += 1;
} else {
    // Initialize the visit count
    $_SESSION['visit_count'] = 1;
}

$visit_count = $_SESSION['visit_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome!</h1>
    <p>You have visited this page <?php echo $visit_count; ?> times.</p>
</div>

</body>
</html>
