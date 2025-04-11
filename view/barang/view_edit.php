<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Barang</title>
</head>
<body>
    <div class="container">
        <h1> Edit Barang</h1>

        <?php
        include '../../config/koneksi.php';
        $id_barang= $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
        $result = mysqli_fetch_array($query);
        ?>

        <form action="proses_edit.php?id=<?php echo $result['id_barang']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Barang</label>
                <input type="int" class="form-control" name="id_barang" value="<?php echo $result['id_barang']; ?>" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="varchar" class="form-control" name="nama_barang" value="<?php echo $result['nama_barang']; ?>" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID Jenis</label>
                <input type="int" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis']; ?>" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="int" class="form-control" name="harga" value="<?php echo $result['harga']; ?>" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="int" class="form-control" name="stok" value="<?php echo $result['stock']; ?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
