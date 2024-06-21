<section class="product">
    <img src="<?= $data->imgUrl ?>" alt="" style="aspect-ratio: 1/1; object-fit:cover">
    <div style="padding-top: 1rem;">
        <h3 style=" padding: 0; margin:0;"><?= $data->name ?></h3>
        <p style="color: #888; font-size:small; padding: 0; margin:0;"><?= $data->description ?></p>
        <small style="padding: 0; margin:0; color:lightgreen;"><?= $data->price ?>€</small>
    </div>
</section>