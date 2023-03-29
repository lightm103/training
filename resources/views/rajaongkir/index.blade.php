<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form>
        <div class="container pt-5">
        <div class="mb-3">
          <label for="origin" class="form-label">Provinsi Asal</label>
          <input type="text" class="form-control" id="origin" placeholder="Masukkan kota asal">
        </div>
        <div class="mb-3">
            <label for="origin" class="form-label">Kota/Kabupaten Asal</label>
            <input type="text" class="form-control" id="origin" placeholder="Masukkan kota asal">
          </div>
          <div class="mb-3">
            <label for="origin" class="form-label">Provinsi Tujuan</label>
            <input type="text" class="form-control" id="origin" placeholder="Masukkan kota asal">
          </div>
        <div class="mb-3">
          <label for="destination" class="form-label">Kota/Kabupaten Tujuan</label>
          <input type="text" class="form-control" id="destination" placeholder="Masukkan kota tujuan">
        </div>
        <div class="mb-3">
          <label for="weight" class="form-label">Berat (kg)</label>
          <input type="number" class="form-control" id="weight" placeholder="Masukkan berat">
        </div>
        <div class="mb-3">
          <label for="courier" class="form-label">Kurir</label>
          <select class="form-select" id="courier">
            <option selected>Pilih kurir</option>
            <option value="jne">JNE</option>
            <option value="pos">POS Indonesia</option>
            <option value="tiki">TIKI</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Cek Tarif</button>
    </div>
      </form>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>