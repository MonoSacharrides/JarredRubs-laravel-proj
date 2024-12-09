<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Details</title>
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
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding: 30px;
        }

        /* Container for the content */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #007BFF;
            margin-bottom: 30px;
        }

        p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        p strong {
            color: #007BFF;
        }

        /* Link button style */
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 5px;
            text-align: center;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            a {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inventory Details</h1>

        <p><strong>Name:</strong> {{ $inventory->name }}</p>
        <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
        <p><strong>Price:</strong> ${{ number_format($inventory->price, 2) }}</p>

        <a href="{{ route('inventories.index') }}">Back to Inventory List</a>
    </div>
</body>
</html>
