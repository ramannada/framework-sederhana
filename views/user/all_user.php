<?php
$this->layout('/templates/template', ['title' => 'Daftar Anggota']);
?>
<table class="table table-striped table-hover">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($user as $key => $val): ?>
        <tr>
            <td><?=$val['username']?></td>
            <td><?=$val['email']?></td>
            <td>
                <img src="../public/img/<?=$val['photo']?>"
                height="50px" widht="50px" alt="foto profil">
            </td>
            <td>
                <a href="./user/edit" class="btn btn-warning">Edit</a>
                <a href="./user/delete" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
