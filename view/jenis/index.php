<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">jenis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../barang/index.php">barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <h1>data jenis</h1>
    <a class="btn btn-primary" href="view_tambah.php">tambah jenis</a>
    <br><br>
    <table class="table table-bordered table-striprd">
        <thead class="table-dark">
        <tr>
            <th>no</th>
            <th>id jenis</th>
            <th>nama jenis</th>
        </tr>
        </thead>
       
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM jenis");
        $no = 1;
        if(mysqli_num_rows($query)){
            echo "Data jenis";
            while($result = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $result['id_jenis'] ?></td>
            <td><?php echo $result['nama_jenis'] ?></td>
            <td>
                <a class="btn btn-warning">Edit</a>
            </td>
        </tr>
        <?php
            $no++;
            }
        } else {
            echo "Data jenis tidak ditemukan";
        }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>