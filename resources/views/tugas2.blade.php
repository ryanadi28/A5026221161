
<!DOCTYPE html>
<html>
    <head>
        <title>Alert Bootsrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>

<body>
<div class="alert alert-success">
    <strong>Kuota Terbatas</strong> Daftarkan diri anda melalui <a href="#" class="alert-link">Form dibawah ini</a>.
    <div class="jumbotron jumbotron-fluid text-center bg-dark">
        <div class="container text-white">
          <h1>Daftarkan diri kalian</h1>
          <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Submit
              </button>
          </form>
          <br>
          <div class="alert alert-danger">
            <strong>Perhatian !</strong> Masukkan password email baru anda, jangan gunakan password email asli.
          </div>
          <div class="alert alert-warning alert-dismissible  fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Saran</strong> Pastikan password yang dimasukkan berupa kombinasi angka dan huruf besar.
          </div>
        </div>
      </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Pendaftaran Berhasil</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Silahkan masuk ke halaman login
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
              </div>

            </div>
          </div>
        </div>

      </div>


  </div>
</body>
</html>
