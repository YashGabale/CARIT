<!DOCTYPE html>
<html lang="en">
<head>
<li><a href="application_form.html"></a></li>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submission Confirmation</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Application Submission Confirmation</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php
            // Process form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $interests = implode(", ", $_POST['interests']);
            $major = $_POST['major'];

            // Display data in table
            echo "<tr><td>Name:</td><td>$name</td></tr>";
            echo "<tr><td>Email:</td><td>$email</td></tr>";
            echo "<tr><td>Gender:</td><td>$gender</td></tr>";
            echo "<tr><td>Interests:</td><td>$interests</td></tr>";
            echo "<tr><td>Major:</td><td>$major</td></tr>";
        ?>
    </table>
</body>
</html>