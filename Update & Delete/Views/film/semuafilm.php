<<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div class="container">
    <div class="row">
    <?php foreach ($semuafilm as $film) :?>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="/assets/cover/<?= $film["cover"]?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $film["nama_film"]?></h5>
            <p class="card-text"><?= $film["nama_genre"]?> || <?= $film["duration"]?></p>
            <a href="#" class="btn btn-info">Detail</a>
            <a href="#" class="btn btn-success">Update</a>
            <a href="#" class="btn btn-warning">Delete</a>
            </div>
        </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
     <script>sr="/assets/js/bootstrap.min.js"></script>
</body>  

</html>

<?= $this->endSection() ?>