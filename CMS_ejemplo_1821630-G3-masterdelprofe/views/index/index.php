
    


</div>
</div>
<div class="container mt-5">
<div class="row">
    <?php foreach(parent::all() as $publi):  ?>
<div class="col-md- align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<img src="<?= $publi->image ?>" class="card-img-top" alt="..." style="max-witch: 100px; min-witch:100px;">
<div class="card-body">

</div>
<h5 class="card-title mb-2"><?= $publi->title ?></h5>
<div class="mt-4">
<p class="card-text"><?= $publi->descripcion ?></p>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>

