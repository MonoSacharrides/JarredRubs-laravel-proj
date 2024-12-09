<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
        }

        /* Header section */
        header {
            background-color: #007BFF;
            color: white;
            padding: 80px 0;
            text-align: center;
            border-bottom: 5px solid #0056b3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            font-weight: 600;
        }

        /* Navigation */
        nav {
            margin-top: 40px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 1.2rem;
            color: #007BFF;
            padding: 12px 25px;
            background-color: #fff;
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul li a:hover {
            color: white;
            background-color: #0056b3;
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Content section */
        .content {
            margin-top: 60px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            nav ul li a {
                font-size: 1.1rem;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Inventory Management System</h1>
    </header>

    <div class="content">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="{{ route('inventories.index') }}">View Inventories</a></li>
                    <li><a href="{{ route('inventories.create') }}">Create Inventory</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>
