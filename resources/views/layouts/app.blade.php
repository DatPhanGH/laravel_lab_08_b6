<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .pagination {
            margin-top: 20px;
        }

        .pagination a,
        .pagination span {
            padding: 8px 12px;
            border: 1px solid #ddd;
            margin: 0 4px;
            text-decoration: none;
            color: #337ab7;
        }

        .pagination span.current {
            background-color: #337ab7;
            color: white;
            border-color: #337ab7;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>My Application Header</h1>
            <nav>
                <a href="/products">Home</a> |
                <a href="/products">Products</a> |
                <a href="/students">Students</a>
            </nav>
        </header>

        <main>
            @yield('content') {{-- Đây là nơi nội dung của các view con sẽ được chèn vào --}}
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>