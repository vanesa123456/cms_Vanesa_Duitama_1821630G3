<h1>Lista de usuarios</h1>

<a href="?controller=user&method=create">
    <button class="btn btn-success">Crear</button>
</a>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-info">Editar</button>
                </a>
                <button class="btn btn-outline-success">Borrar</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

