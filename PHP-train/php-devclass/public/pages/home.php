<a class="btn btn-success" href="?page=create_user">create user</a>
<h2> Página Inicial </h2>

<?= get('message'); ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $users = all('users');
        foreach ($users as $user): ?>
            <tr>
                <td> <?= $user->id ?> </td>
                <td> <?= $user->name . " " . $user->surname ?> </td>
                <td> <?= $user->email ?> </td>
                <td> <?= $user->password ?> </td>
                <td>
                    <a class="btn btn-success" href="?page=edit_user&id=<?= $user->id?>">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="?page=delete_user&id=<?= $user->id?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
