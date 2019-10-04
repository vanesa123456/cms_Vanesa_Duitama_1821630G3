

<section class="container">
    <h1>Actualizar Publicacion</h1>
    <form action="?controller=publicacion&method=store" method="POST">
        <section class="form-group">
            <label for="name">Titulo</label>
            <input type="text" name="title" id="title" required class="form-control" value="<?= $publi->title?>">
        </section>
        <section class="form-group">
            <label for="email">descripcion</label>
            <input type="email" name="descripcion" id="descripcion" required class="form-control" value="<?= $publi->descripcion ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-danger">
        </section>
    </form>
</section>