
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script>
        function changeText() {
            var span = document.getElementById("output");//membaca objek
            var textBox = document.getElementById("textbox");//membaca objek

            textBox.style.color = "red";
            //<input type="text style="color:red>
            //span.innerHTML = "Sistem Informasi";
            span.innerHTML = textBox.value;//mengganti isi yang selain form elements
            span.className = "text-primary";//mengganti class CSS
        }
    </script>
    <!--buat senidri-->
    <script src="myfunction.js"></script>

</head>

<body>
    <script>
        function showAlert() {
            alert("Selamat Anda memenangkan undian 1M !");
        }
    </script>
    <button class="btn btn-danger" onclick="showAlert();">Klik disini</button>
    <br>
    <button onclick="changeText();" class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control" />
    <br>
    <div class="form-group">
        <label for="bil1">Bilangan 1</label>
        <input id="bil1" type="number" class="form-control" placeholder="Masukan bilangan 1" />
    </div>
    <div class="form-group">
        <label for="bil2">Bilangan 2</label>
        <input id="bil2" type="number" class="form-control" placeholder="Masukan bilangan 2" />
    </div>
    <div class="btn-group">
        <button onclick="tambah();" class="btn btn-success">Penjumlahan</button>
        <button onclick="kali();" class="btn btn-warning">Perkalian</button>
    </div>
    <h2>Hasil operasi = <div id="hasil"></div>
    </h2>
</body>

</html>
