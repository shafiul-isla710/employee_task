<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Custom styles --}}
    <style>
      body {
        min-height: 100vh;
        overflow-x: hidden;
      }
      .sidebar {
        min-width: 200px;
        max-width: 250px;
        background-color: #343a40;
        color: white;
        min-height: 100vh;
      }
      .sidebar a {
        color: white;
        text-decoration: none;
      }
      .sidebar .nav-link:hover {
        background-color: #495057;
      }
      .content {
        padding: 20px;
        width: 100%;
      }
      .navbar-custom {
        background-color: #6c757d;
      }
    </style>

    @stack('styles')
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar d-flex flex-column p-3">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="">Employee Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('employee.dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('employee.tasks') }}" class="nav-link text-white">Tasks</a>
                </li>
            </ul>
        </nav>

        <!-- Main content -->
        <div class="content flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Employee Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('employee.profile') }}">Profile</a></li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link nav-link">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dynamic Content -->
            @yield('content')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
