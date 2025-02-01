<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="Images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="Images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="Images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="Images/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="Images/favicon/site.webmanifest" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Listify</title>
  </head>
  <body>
    <nav
      id="navbar"
      class="navbar navbar-expand-lg navbar-light border-bottom sticky-top"
      style="background-color: #ffffff"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="/add">
          <img
            src="Images/logo.jpg"
            alt="Logo"
            class="d-inline-block align-text-top"
            style="width: 30px; height: 30px"
          />
          <span>Listify</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="/add">Home</a>
            </li>
            <li class="nav-item">
              <button style="border: 1px; border-radius: 50px; background-color: rgb(47, 46, 46);"><a class="nav-link active text-white" href="/signout">Logout</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container mt-5">
    <h2 class="section-title text-center">Create Your Task</h2>
    <form action="/add/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-4 text-center">
      <input   type="text" class="form-control" name="user_task" placeholder="Write your Task here"></input>
      <button  style="border: none;" class="btn2 mt-2" >Add Your Task</button>
    </div>
    </form>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card">
          <img src="Images/pending.jpg" class="card-img-top" alt="Pending Tasks Image">
          <div class="card-body">
            <h3 class="card-title text-center"> Your Pending Tasks</h3>
            <div class="btn-container">
              <a href="/pending"><button class="btn3">View Pending Tasks</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <img src="Images/complete.jpg" class="card-img-top" alt="Completed Tasks Image">
          <div class="card-body">
            <h3 class="card-title text-center"> Your Completed Tasks</h3>
            <div class="btn-container">
              <a href="/complete"><button class="btn4">View Completed Tasks</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center py-3">
    <p class="text-white">&copy; 2024 Listify. Created with 💖 for World.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="javascript/index.js"></script>
</body>
</html>
