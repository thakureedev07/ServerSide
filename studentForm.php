<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Form</title>
<!-- Internal CSS -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .content {
        width: 50%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .form-group select {
        height: 34px;
    }

    .form-group input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 3px;
    }

    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="content">
    <h2>Student Form</h2>
    <form method="POST" action="./studentFormHandler.php" >
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="fullname"  name="fullname" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        <div class="form-group">
            <br><label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno"  required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
