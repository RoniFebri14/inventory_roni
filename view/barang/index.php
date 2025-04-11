<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
    <h1>Barang</h1>
    <a class="btn btn-primary" href="view_tambah.php">tambah barang</a>
    <br><br>
    <table class="table table-bordered table-striprd">
        <thead class="table-dark">
        <tr>
            <th>no</th>
            <th>id_barang</th>
            <th>nama_barang</th>
            <th>id_jenis</th>
            <th>harga</th>
            <th>stock</th>
            <th>aksi</th>
        </tr>
        </thead>
       
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM barang");
        $no = 1;
        if(mysqli_num_rows($query)){
            echo "Data barang";
            while($result = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $result['id_barang'] ?></td>
            <td><?php echo $result['nama_barang'] ?></td>
            <td><?php echo $result['id_jenis'] ?></td>
            <td><?php echo $result['harga'] ?></td>
            <td><?php echo $result['stock'] ?></td>
            <td>
                <a href="view_edit.php?id=<?php echo $result['id_barang'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                <a href="hapus.php?id=<?php echo $result['id_barang'] ?>" onclick="return confirm('Yakin ingin menghapus barang ini?')" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i>Hapus</a>
                  </class=>
              
        </tr>
        <?php
            $no++;
            }
        } else {
            echo "Data barang tidak ditemukan";
        }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>