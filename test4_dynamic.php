<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Content Examples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2rem;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        section {
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        section h2 {
            margin-top: 0;
            font-size: 1.5rem;
            color: #444;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"], button {
            padding: 8px;
            font-size: 1rem;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #4cae4c;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        table th {
            background: #f9f9f9;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            padding: 5px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
            border-radius: 4px;
            background: #f9f9f9;
        }
        .gallery img {
            width: 150px;
            height: 150px;
            margin: 5px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Dynamic Content Examples</h1>
</header>
<main>
    <!-- Multiplication Table -->
    <section>
        <h2>Dynamic Multiplication Table</h2>
        <form method="post">
            <label for="tableSize">Enter Table Size:</label>
            <input type="number" id="tableSize" name="tableSize" min="1" placeholder="Enter a number">
            <button type="submit">Generate Table</button>
        </form>
        <?php
        if (!empty($_POST['tableSize'])) {
            $size = intval($_POST['tableSize']);
            echo "<table>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </section>

    <!-- Dynamic Form -->
    <section>
        <h2>Dynamic Form Generator</h2>
        <form method="post">
            <label for="formFields">Number of Fields:</label>
            <input type="number" id="formFields" name="formFields" min="1" placeholder="Enter a number">
            <button type="submit">Generate Form</button>
        </form>
        <?php
        if (!empty($_POST['formFields'])) {
            $fields = intval($_POST['formFields']);
            echo "<form method='post' action='#'>";
            for ($i = 1; $i <= $fields; $i++) {
                echo "<label for='field$i'>Field $i:</label>";
                echo "<input type='text' id='field$i' name='field$i'><br>";
            }
            echo "<button type='submit'>Submit</button>";
            echo "</form>";
        }
        ?>
    </section>

    <!-- Dynamic Dropdown -->
    <section>
        <h2>Dynamic Dropdown</h2>
        <form method="post">
            <label for="dropdownOptions">Select Number of Options:</label>
            <input type="number" id="dropdownOptions" name="dropdownOptions" min="1" placeholder="Enter a number">
            <button type="submit">Generate Dropdown</button>
        </form>
        <?php
        if (!empty($_POST['dropdownOptions'])) {
            $options = intval($_POST['dropdownOptions']);
            echo "<form method='post' action='#'>";
            echo "<label for='dropdown'>Choose an option:</label>";
            echo "<select id='dropdown' name='dropdown'>";
            for ($i = 1; $i <= $options; $i++) {
                echo "<option value='Option $i'>Option $i</option>";
            }
            echo "</select>";
            echo "<button type='submit'>Submit</button>";
            echo "</form>";
        }
        ?>
    </section>

    <!-- To-Do List -->
    <section>
        <h2>Dynamic To-Do List</h2>
        <form method="post">
            <label for="todoTasks">Number of Tasks:</label>
            <input type="number" id="todoTasks" name="todoTasks" min="1" placeholder="Enter a number">
            <button type="submit">Generate To-Do List</button>
        </form>
        <?php
        if (!empty($_POST['todoTasks'])) {
            $tasks = intval($_POST['todoTasks']);
            echo "<ul>";
            for ($i = 1; $i <= $tasks; $i++) {
                echo "<li>Task $i</li>";
            }
            echo "</ul>";
        }
        ?>
    </section>

    <!-- Image Gallery -->
    <section>
        <h2>Dynamic Image Gallery</h2>
        <form method="post">
            <label for="imageCount">Number of Images:</label>
            <input type="number" id="imageCount" name="imageCount" min="1" placeholder="Enter a number">
            <button type="submit">Generate Gallery</button>
        </form>
        <?php
        if (!empty($_POST['imageCount'])) {
            $images = intval($_POST['imageCount']);
            echo "<div class='gallery'>";
            for ($i = 1; $i <= $images; $i++) {
                echo "<img src='https://via.placeholder.com/150?text=Image+$i' alt='Image $i'>";
            }
            echo "</div>";
        }
        ?>
    </section>
</main>
</body>
</html>
