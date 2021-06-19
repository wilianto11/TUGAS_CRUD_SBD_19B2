<?php include('header.php');?>

    <h3>Tabel Suplier</h3>
    <a href="add.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Suplier</th>
                <th>Nama Suplier</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  suplier';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_suplier']?></td>
                <td><?php echo $row['nama_suplier']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><a href="edit.php?id=<?= $row['id_suplier']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_suplier']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Produk</h3>
    <a href="add_produk.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>ID Suplier</th>
                <th>Nama produk</th>
                <th>harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  produk';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['id_suplier']?></td>
                <td><?php echo $row['nama_produk']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['stok']?></td>
                <td><a href="edit_produk.php?id=<?= $row['id_produk']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_produk']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php 
        }
        ?>
    </table>
    <h3>Tabel Pembeli</h3>
    <a href="add_pembeli.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>jenis Kelamin</th>
                <th>No Telp</th>
                <th>Alamat</th>  
                <th>Aksi</th>                  
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  pembeli';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['nama_pembeli']?></td>
                <td><?php echo $row['jk']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><a href="edit_pembeli.php?id=<?= $row['id_pembeli']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_pembeli']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Transaksi</h3>
    <a href="add_transaksi.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Produk</th>
                <th>ID Pembeli</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  transaksi';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['keterangan']?></td>
                <td><a href="edit_transaksi.php?id=<?= $row['id_transaksi']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_transaksi']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Pembayaran</h3>
    <a href="add_pembayaran.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Tanggal bayar</th>
                <th>Total bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  pembayaran';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_bayar']?></td>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['tgl_bayar']?></td>
                <td><?php echo $row['total_bayar']?></td>
                <td><a href="edit_pembayaran.php?id=<?= $row['id_bayar']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_bayar']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <br> <br>
<?php include('footer.php');?>