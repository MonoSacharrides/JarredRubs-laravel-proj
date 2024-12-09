<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory</title>
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

        .container {
            max-width: 600px;
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
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            color: #333;
        }

        input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #007BFF;
        }

        button {
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 2rem;
            }

            input, button {
                font-size: 1rem;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Inventory</h1>

        <form action="{{ route('inventories.update', $inventory) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value="{{ $inventory->name }}" required><br>

            <label for="quantity">Quantity: </label>
            <input type="number" name="quantity" id="quantity" value="{{ $inventory->quantity }}" required><br>

            <label for="price">Price: </label>
            <input type="number" name="price" id="price" value="{{ $inventory->price }}" required><br>

            <button type="submit">Update</button>
        </form>
    </div>

</body>
</html>
