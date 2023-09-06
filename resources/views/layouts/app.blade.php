<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="DAUuPdTs1irkqoIzWszdba5wB5AAZ643DRmbw8S7cOw" />
    <title>Sistem Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">
    <!-- Google Font Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300&display=swap"
        rel="stylesheet">
    <!-- Google Font End -->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            list-style: none;
            text-decoration: none;
        }

        :root {
            scroll-behavior: smooth;
        }

        .navbar {
            background-color: #000000;
            color: #ffffff;
            justify-content: center;
        }

        .navbar a {
            color: #ffffff;
            font-size: 1.2rem;
            padding: 10px 20px;
            font-weight: 500;
        }

        body {
            padding-top: 70px;
            background-color: #171717;
            color: #fff;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        p {
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            /* padding: 10px 20px; */
            font-size: 10px;
            border-radius: 10px;
            color: #fff;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #016A70;
            transition: .4s;
        }

        .navbar-toggler-icon {
            color: white;
        }
        .table {
            border-radius: 10px;
            background-color:
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Transaksi - Galuh Arya XII RPL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {{ Request::is('transaksi/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('transaksi.create') }}">Transaksi</a>
                    </li>
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('transaksi.index') }}">Laporan</a>
                    </li>
                    <li class="nav-item {{ Request::is('transaksi/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pembeli.create') }}">Tambah Supplier</a>
                    </li>
                    <li class="nav-item {{ Request::is('transaksi/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('barang.create') }}">Tambah Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Masukkan link ke file JavaScript Bootstrap di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
