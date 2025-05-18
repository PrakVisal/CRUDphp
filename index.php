<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .about-btn {
            background-color: #007BFF;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .about-btn:hover {
            background-color: #0056b3;
        }

        .about-me {
            display: none;
            background-color: #f0f8ff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            max-width: 600px;
            transition: all 0.3s ease;
        }

        table {
            border-collapse: collapse;
            width: 60%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }

        .add-btn {
            margin-bottom: 15px;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h2>Users</h2>

    <a class="add-btn" href="add.php">+ Add New</a>

    <button class="about-btn" onclick="toggleAbout()">About Me</button>
    <div class="about-me" id="aboutSection">
        <h3>About Me</h3>
        <p>Hello! My name is Prak Visal from E7 class. I created this simple PHP CRUD app to manage users using MySQL and PDO. This is a learning project to practice database operations like add, edit, and delete.</p>
    </div>



    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM phpcrud ORDER BY id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
        }
        ?>
    </table>

    <script>
        function toggleAbout() {
            const about = document.getElementById('aboutSection');
            if (about.style.display === "none" || about.style.display === "") {
                about.style.display = "block";
            } else {
                about.style.display = "none";
            }
        }
    </script>

</body>

</html>