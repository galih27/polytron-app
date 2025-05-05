<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Polytron App - Link Pilihan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
      background-color: #f8f9fa;
    }
    .dropdown {
      display: inline-block;
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background: #ffffff;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      min-width: 250px;
      border-radius: 8px;
      z-index: 1;
    }
    .dropdown-content a {
      color: #000;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .main-link {
      font-size: 18px;
      font-weight: bold;
      padding: 14px 24px;
      background-color: #007BFF;
      color: white;
      border-radius: 8px;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <h1>Selamat Datang di Polytron App</h1>

  <div class="dropdown">
    <a href="#" class="main-link">📎 Klik untuk Pilih Link</a>
    <div class="dropdown-content">
      <a href="https://example.com/link1">Download App Polytron 1</a>
      <a href="https://example.com/link2">Download App Polytron 2</a>
      <a href="https://example.com/link3">Download App Polytron 3</a>
    </div>
  </div>

</body>
</html>
