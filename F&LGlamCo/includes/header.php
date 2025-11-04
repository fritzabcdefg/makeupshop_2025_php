<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Shop</title>

  <!-- External Styles & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="/F&LGlamCo/includes/style/style.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- Custom Header Styling -->
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    /* === Navbar Theme === */
    .navbar {
      background-color: #FFF0F5 !important;
      border-bottom: 2px solid #F8BBD0;
    }

    .navbar-brand {
      color: #C71585 !important;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #6A1B9A !important;
      transition: background-color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: #F8BBD0;
      color: #880E4F !important;
      border-radius: 4px;
    }

    .navbar-toggler {
      border-color: #CBF5A0;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(203,245,160, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    /* === Dropdown Menu === */
    .dropdown-menu {
      background-color: #FFF0F5;
      border: 1px solid #F8BBD0;
    }

    .dropdown-item {
      color: #6A1B9A;
    }

    .dropdown-item:hover {
      background-color: #CBF5A0;
      color: #4A4A4A;
    }

    /* === Search Button === */
    .btn-outline-success {
      border-color: #CBF5A0;
      color: #6A1B9A;
    }

    .btn-outline-success:hover {
      background-color: #CBF5A0;
      color: #4A4A4A;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/F&LGlamCo/index.php">My Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/F&LGlamCo/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/F&LGlamCo/link.php">Link</a>
          </li>
          <li class="nav-item dropdown">
            <?php if (isset($_SESSION['user_id'])): ?>
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                  <li><a class="dropdown-item" href="/F&LGlamCo/product/index.php">Items</a></li>
                  <li><a class="dropdown-item" href="/F&LGlamCo/admin/orders.php">Orders</a></li>
                  <li><a class="dropdown-item" href="/F&LGlamCo/admin/users.php">Users</a></li>
                <?php else: ?>
                  <li><a class="dropdown-item" href="/F&LGlamCo/user/profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="/F&LGlamCo/user/myorders.php">My Orders</a></li>
                <?php endif; ?>
              </ul>
            <?php endif; ?>
          </li>
        </ul>

        <form action="/F&LGlamCo/search.php" method="GET" class="d-flex me-3">
          <input class="form-control me-2" type="search" placeholder="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php if (!isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
              <a href="/F&LGlamCo/user/login.php" class="nav-link">Login</a>
            </li>
          <?php else: ?>
            <li class="nav-item d-flex align-items-center">
              <span class="nav-link"><?= isset($_SESSION['email']) ? $_SESSION['email'] : 'Welcome!' ?></span>
            </li>
            <li class="nav-item">
              <a href="/F&LGlamCo/user/logout.php" class="nav-link">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
