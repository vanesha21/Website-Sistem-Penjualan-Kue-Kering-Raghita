    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main_CRUD.css'); ?>">
</head>
<body>
<center><h1>Data Produk</h1></center>
<center><a href="<?= base_url('tambah'); ?>">+ &nbsp; Tambah Produk </a></center>
</br>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach($all_produk as $produk) : ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $produk['nama']; ?></td>
            <td>Rp <?php echo $produk['harga']; ?></td>
            <td style="max-width:280px;"><?= $produk['deskripsi']; ?></td>
            <td><?php echo $produk['stok']; ?></td>
            <td style="text-align: center;"><img src="<?= base_url('assets/'); ?>img/<?php echo $produk['gambar']; ?>" style="width: 120px;" alt="<?= $produk['gambar']; ?>"></td>
            <td>
                <a style="text-shadow: 0px 0px 0px #fff;" href="<?= base_url('edit/index/'); ?><?= $produk['id']; ?>/<?= $produk['gambar']; ?>">Edit</a>  | 
                <a style="text-shadow: 0px 0px 0px #fff;" href="<?= base_url('admin/hapus/'); ?><?= $produk['id']; ?>" 
                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>

    </tbody>
</table>