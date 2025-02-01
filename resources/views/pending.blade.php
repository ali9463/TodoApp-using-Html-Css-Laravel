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
    <link rel="stylesheet" href="css/pending.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Listify</title>
    <style>
      /* Additional styling for the SVG icons */
      .icon-delete {
        fill: red;
      }
      .icon-delete:hover{
        fill: red;

      }
      .icon-edit {
        fill: blue;
      }
      .icon-complete {
        border-radius: 11px;
        border: 1.5px solid #25b99a;
      }
      .icon-complete:hover{
        border-radius: 11px;
        border: 1.5px solid #03ff35;
        background-color: #03ff35;
      }
      .table th, .table td {
        text-align: center;
      }
      .container {
    text-align: center;
  }
  .table {
    margin: 0 auto;
  }
    </style>
  </head>
  <body>
    <nav
      id="navbar"
      class="navbar navbar-expand-lg navbar-light border-bottom sticky-top"
      style="background-color: #ffffff"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="/pending">
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
              <button style="border: 1px; border-radius: 50px; background-color: rgb(47, 46, 46);">
                <a class="nav-link active text-white" href="/signout">Logout</a>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h2 class="text-center text-dark">Your All Tasks</h2>

      <table class="table table-bordered" style="background-color: #ffffff;">
        <thead>
          <tr>
            <th>Task</th>
            <th>Delete</th>
            <th>Edit</th>
            <th>Complete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
          <tr>
            <td>
              <!-- Task as readonly input -->
              <input type="text" class="form-control" value="{{ $task->task }}" readonly />
            </td>
            <td>
              <!-- DELETE action with SVG icon -->
              <a href="{{ url('delete/'.$task->id) }}" onclick="return confirm('Do you really want to delete this record?')">
                <svg class="icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="22" height="22">
                  <path d="M16.1,3.6h-1.9V3.3c0-1.3-1-2.3-2.3-2.3h-1.7C8.9,1,7.8,2,7.8,3.3v0.2H5.9c-1.3,0-2.3,1-2.3,2.3v1.3c0,0.5,0.4,0.9,0.9,1v10.5c0,1.3,1,2.3,2.3,2.3h8.5c1.3,0,2.3-1,2.3-2.3V8.2c0.5-0.1,0.9-0.5,0.9-1V5.9C18.4,4.6,17.4,3.6,16.1,3.6z M9.1,3.3c0-0.6,0.5-1.1,1.1-1.1h1.7c0.6,0,1.1,0.5,1.1,1.1v0.2H9.1V3.3z M16.3,18.7c0,0.6-0.5,1.1-1.1,1.1H6.7c-0.6,0-1.1-0.5-1.1-1.1V8.2h10.6V18.7z M17.2,7H4.8V5.9c0-0.6,0.5-1.1,1.1-1.1h10.2c0.6,0,1.1,0.5,1.1,1.1V7z"/>
                </svg>
              </a>
            </td>
            <td>
              <!-- EDIT action with SVG icon -->
              <a href="{{ url('update/'.$task->id) }}" onclick="return confirm('Do you really want to update this record?')">
                <svg class="icon-edit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                  <path d="M13.6568542,2.34314575 C14.4379028,3.12419433 14.4379028,4.39052429 13.6568542,5.17157288 L6.27039414,12.558033 C5.94999708,12.87843 5.54854738,13.105727 5.10896625,13.2156223 L2.81796695,13.7883721 C2.45177672,13.8799197 2.12008033,13.5482233 2.21162789,13.182033 L2.78437771,10.8910338 C2.894273,10.4514526 3.12156995,10.0500029 3.44196701,9.72960586 L10.8284271,2.34314575 C11.6094757,1.56209717 12.8758057,1.56209717 13.6568542,2.34314575 Z M10.1212441,4.46435931 L4.14907379,10.4367126 C3.95683556,10.6289509 3.82045738,10.8698207 3.75452021,11.1335694 L3.38388341,12.6161166 L4.86643062,12.2454798 C5.1301793,12.1795426 5.37104912,12.0431644 5.56328736,11.8509262 L11.5352441,5.87835931 L10.1212441,4.46435931 Z M11.5355339,3.05025253 L10.8282441,3.75735931 L12.2422441,5.17135931 L12.9497475,4.46446609 C13.3402718,4.0739418 13.3402718,3.44077682 12.9497475,3.05025253 C12.5592232,2.65972824 11.9260582,2.65972824 11.5355339,3.05025253 Z"/>
                </svg>
              </a>
            </td>
            <td>
              <!-- COMPLETE action with SVG icon -->
              <a href="{{ route('task.complete', $task->id) }}" onclick="return confirm('Wao! Congratulations You have done this...')">
                <svg class="icon-complete" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 22 22">
                  <path d="M9.7,14.4L9.7,14.4c-0.2,0-0.4-0.1-0.5-0.2l-2.7-2.7c-0.3-0.3-0.3-0.8,0-1.1s0.8-0.3,1.1,0l2.1,2.1l4.8-4.8c0.3-0.3,0.8-0.3,1.1,0s0.3,0.8,0,1.1l-5.3,5.3C10.1,14.3,9.9,14.4,9.7,14.4z"/>
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz4fnFO9gybPy0sWjtE9a2g7gq0gH5z6MB1D0PvvSBolFjp1fu2C2tvT7Jw"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="/javascript/main.js"></script>
  </body>
</html>
