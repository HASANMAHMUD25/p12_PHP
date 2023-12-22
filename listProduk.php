<?php
 require_once 'dbkoneksi.php';
 require_once 'ClassProduk.php';

 $objProduk = new Produk($dbh);
 $rsroduk = $objProduk->getAllProduk();
?>
<h3>Daftar Produk</h3>
<table border="1" width="100%">
<thead>
    <tr><th>No</th><th>Nama Produk</th><th>Qty</th>
    <th>Harga</th><th>Action</th></tr>
</thead>
<tbody>
    <?php
     $nomer =1;
     foreach ($rsroduk as $row) {
        echo '<tr><td>'.$nomer.'</td>
        <td>'.$row->nama.'</td>
        <td>'.$row->qty.'</td>
        <td>'.$row->harga.'</td>
        <td align="center">
        <a href="edit.php?id='.$row->id.'">Edit</a>
        <a href="delete.php?id='.$row->id.'">Del</a>
        </td></tr>';
        $nomer++;
     }
    ?>
</tbody>
</table>