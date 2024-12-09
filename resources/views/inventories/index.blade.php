<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory List</title>
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
            max-width: 1000px;
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

        /* Button styles */
        .home-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 5px;
            text-align: center;
            transition: all 0.3s ease;
            margin-top: 20px;
            margin-left: auto;
            float: right;
        }

        .home-btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .create-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745; /* Green color */
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .create-btn:hover {
            background-color: #218838; /* Darker green for hover effect */
            transform: translateY(-3px);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e9ecef;
        }

        .action-btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin: 0 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .view-btn {
            background-color: #28a745;
            color: white;
            text-decoration: none;
        }

        .view-btn:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .edit-btn {
            background-color: #ffc107;
            color: white;
            text-decoration: none;
        }

        .edit-btn:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .delete-btn:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            table th, table td {
                font-size: 0.9rem;
                padding: 8px;
            }

            .action-btn {
                font-size: 0.9rem;
                padding: 5px 10px;
            }

            .home-btn {
                font-size: 1rem;
                padding: 10px 20px;
            }

            .create-btn {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Inventory List</h1>

        <a href="{{ route('inventories.create') }}" class="create-btn">Create New Inventory</a>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <td>{{ $inventory->name }}</td>
                        <td>{{ $inventory->quantity }}</td>
                        <td>${{ number_format($inventory->price, 2) }}</td>
                        <td>
                            <a href="{{ route('inventories.show', $inventory) }}" class="action-btn view-btn">View</a> |
                            <a href="{{ route('inventories.edit', $inventory) }}" class="action-btn edit-btn">Edit</a> |
                            <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
