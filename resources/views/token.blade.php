<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            font-size: 24px;
            padding: 10px;
            width: 300px;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        button {
            font-size: 24px;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="POST" action="/token">
            @csrf  
            <label for="term">Search term:</label>
            <br>
            <input type="text" id="term" name="term" value="" />
            <br>
            <button type="submit">Go</button>
        </form>
    </div>

</body>
</html>
