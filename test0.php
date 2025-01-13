<?php
// Initialize messages
$get_message = '';
$post_message = '';
$file_message = '';
$cookie_message = '';
$server_info = '';
$env_info = '';

// Handle $_GET example
if (isset($_GET['name']) && isset($_GET['age'])) {
    $get_message = "Hello, " . htmlspecialchars($_GET['name']) . "! You are " . htmlspecialchars($_GET['age']) . " years old.";
} else {
    $get_message = "Name or age not provided in the URL!";
}

// Handle $_POST example
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $post_message = "Welcome, " . htmlspecialchars($_POST['username']) . "!";
}

// Handle $_FILES example (file upload)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploaded_file'])) {
    $file = $_FILES['uploaded_file'];
    if ($file['error'] == UPLOAD_ERR_OK) {
        $file_message = "File uploaded successfully: " . $file['name'];
    } elseif ($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $file_message = "Error: The uploaded file exceeds the max file size allowed by the server.";
    } elseif ($file['error'] == UPLOAD_ERR_FORM_SIZE) {
        $file_message = "Error: The uploaded file exceeds the MAX_FILE_SIZE directive in the HTML form.";
    } else {
        $file_message = "Error uploading file.";
    }
}

// Handle $_COOKIE example
if (!isset($_COOKIE['user'])) {
    setcookie('user', 'John Doe', time() + 3600); // expires in 1 hour
    $cookie_message = "Cookie has been set!";
} else {
    $cookie_message = "Welcome back, " . $_COOKIE['user'] . "!";
}

// Handle $_SERVER example
$server_info = "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>" .
    "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>" .
    "Current Page: " . $_SERVER['PHP_SELF'] . "<br>" .
    "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// Handle $_ENV example (may not work on all systems)
$env_info = isset($_ENV['PATH']) ? "PATH: " . $_ENV['PATH'] : "Environment variables not available.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobals Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #5c9ead;
            text-align: center;
        }
        section {
            margin-bottom: 30px;
        }
        form input[type="text"], form input[type="file"], form input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            background-color: #e4f7e2;
            border: 1px solid #90e190;
            border-radius: 5px;
        }
        .error {
            background-color: #f7e2e2;
            border: 1px solid #e19090;
        }
        code {
            font-size: 14px;
            background-color: #f0f0f0;
            padding: 3px 5px;
            border-radius: 5px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>PHP Superglobals Demonstration</h1>

    <!-- $_GET Example -->
    <section>
        <h2>$_GET Example</h2>
        <p><?= $get_message; ?></p>
        <p><strong>Test with URL Parameters:</strong> Use the URL format: <code>?name=YourName&age=YourAge</code></p>
    </section>

    <!-- $_POST Example -->
    <section>
        <h2>$_POST Example</h2>
        <p><?= $post_message; ?></p>
        <form method="POST" action="test3.php">
            <label for="username">Enter your name:</label>
            <input type="text" id="username" name="username" placeholder="Enter your name" required>
            <input type="submit" value="Submit">
        </form>
    </section>

    <!-- $_FILES Example -->
    <section>
        <h2>$_FILES Example (File Upload)</h2>
        <p><?= $file_message; ?></p>
        <form method="POST" enctype="multipart/form-data" action="test3.php">
            <label for="uploaded_file">Choose a file to upload:</label>
            <input type="file" id="uploaded_file" name="uploaded_file" required>
            <input type="submit" value="Upload File">
        </form>
    </section>

    <!-- $_COOKIE Example -->
    <section>
        <h2>$_COOKIE Example</h2>
        <p><?= $cookie_message; ?></p>
    </section>

    <!-- $_SERVER Example -->
    <section>
        <h2>$_SERVER Example (Server Information)</h2>
        <div class="message">
            <?= $server_info; ?>
        </div>
    </section>

    <!-- $_ENV Example -->
    <section>
        <h2>$_ENV Example (Environment Variables)</h2>
        <div class="message">
            <?= $env_info; ?>
        </div>
    </section>
</div>

</body>
</html>
