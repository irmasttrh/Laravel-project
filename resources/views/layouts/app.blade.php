<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body { background-color: #f4f6f9; }
        .sidebar {
            height: 100vh;
            background: linear-gradient(135deg, #5b3e79, #8baee7);
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            overflow-y: auto;
        }
        .sidebar a { color: white; text-decoration: none; padding: 10px; display: block; border-radius: 5px; }
        .sidebar a:hover { background: rgba(255, 255, 255, 0.2); }
        .content-container {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar brooo -->
            <nav class="col-md-2 sidebar d-flex flex-column">
                <h4 class="mb-4">Pendataan Pegawai</h4>
                <a href="{{ url('/') }}"><i class="fas fa-home"></i> Dashboard</a>
                <a href="{{ url('/pegawai') }}"><i class="fas fa-users"></i> Data Pegawai</a>
                <a href="#"><i class="fas fa-chart-bar"></i> Statistik</a>
                <a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
            </nav>

            <!-- main content -->
            <main class="col-md-10 content-container">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
