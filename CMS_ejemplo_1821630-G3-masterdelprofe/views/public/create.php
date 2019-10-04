
<form  action="?controller=publicacion&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" placeholder="Elije el nombre que desees" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control"  placeholder="Brinda una breve descripcion de la publicacion" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Imagen</label>
    <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
  </div>
  <button type="submit" class="btn btn-info">Publicar</button>
</form>