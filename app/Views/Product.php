<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Product</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?=$p->Id?></td>
                <td><?=$p->nama_product?></td>
                <td><?=$p->description?></td>
                <td>
                    <a href="<?=base_url('edit-product/' . $p->Id)?>">Edit</a>
                    <a href="<?=base_url('delete-product/' . $p->Id) ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>