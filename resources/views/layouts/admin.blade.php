<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/script.js"></script>
    <link rel="stylesheet" href="/css/admin.css">
    <title>Document</title>
</head>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">FenNbat</span> </a>
                <div class="nav_list"> <a href="/admin/dashboard" class="nav_link active">  <i class='bx bx-grid-alt nav_icon'></i>  <span class="nav_name">Users</span> </a> 
                <a href="/admin/users" class="nav_link"> <i class='bx bx-user nav_icon'>   </i>  <span class="nav_name">Dashboard</span> </a> <a href="/admin/Show-hotels" class="nav_link">  </div>
            </div><form action="{{ route('logout') }}" method="POST">@csrf <a type="submit"><i class='bx bx-log-out nav_icon'></i> <button type="submit">Log out</button></a>  </form> 
        </nav>
        
    </div>
    
    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('content')
    </div>

</body>


</html>