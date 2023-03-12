<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
          }
          
          nav {
            height: 64px;
            background-color: #f57c00;
            border-radius: 0 0 10px 10px;
          }
          
          nav .nav-wrapper {
            padding-left: 20px;
            border-radius: 0 0 10px 10px;
          }
          
          nav a {
            color: #fff;
            font-size: 1rem;
          }
          
          .brand-logo {
            font-size: 1.5rem;
            padding: 10px;
          }
          
          .nav-wrapper > ul {
            margin: 0;
          }
          
          .nav-wrapper > ul > li {
            display: inline-block;
            margin-right: 20px;
          }
          
          .nav-wrapper > ul > li:last-child {
            margin-right: 0;
          }
          
          .nav-wrapper > ul > li > a {
            display: inline-block;
            padding: 18px 20px;
            border-radius: 4px;
            background-color: #fff;
            color: #f57c00;
          }
          
          .nav-wrapper > ul > li > a:hover {
            background-color: #fff;
            color: #f57c00;
          }
          
          
          .brand-logo {
            font-size: 1.5rem;
            padding: 10px;
          }
          
          .card {
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            margin: 1rem;
            transition: all 0.3s ease;
          }
          
          .card:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
          }
          
          .card-title {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 1rem;
          }
          
          .card-content p {
            font-size: 1rem;
            color: #555;
            margin: 0;
            line-height: 1.5;
          }
          
          .card-action a {
            color: #26a69a;
            font-weight: 500;
            transition: all 0.3s ease;
          }
          
          .card-action a:hover {
            color: #166b6d;
            text-decoration: underline;
          }
          
          .material-icons {
            font-size: 1.5rem;
            vertical-align: middle;
          }
          
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surgeme Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <div class="nav-wrapper orange">
        <a href="#" class="brand-logo"><img src="logo.png" alt="Surgeme Admin Panel"></a>
        <ul id="nav-mobile" class="right">
        </ul>
      </div>
    </nav>
    <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Users</span>
                <p>View and manage user profiles.</p>
              </div>
              <div class="card-action">
                <a href="#">View<i class="material-icons right">arrow_forward</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Posts</span>
                <p>View and manage user posts.</p>
              </div>
              <div class="card-action">
                <a href="#">View<i class="material-icons right">arrow_forward</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Settings</span>
                <p>Manage website settings.</p>
              </div>
              <div class="card-action">
                <a href="#">View<i class="material-icons right">arrow_forward</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
