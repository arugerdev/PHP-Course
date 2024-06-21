<?php

require_once 'functions.php';
require_once 'classes.php';

$product0 = new Product(0, 'Camisa de shingeki', 'Camisa de Shingeki No Kyojin, lucha contra los titanes junto a Eren.', 'https://nihonski.es/cdn/shop/products/H6cc8670a256e41d0a8e49764b15e4c17V.jpg?v=1673788464', 17.99);
$product1 = new Product(1, 'Zapatillas Nike', 'Para que andes comodo por tu ciudad 👟', 'https://static.nike.com/a/videos/t_PDP_1280_v1/f_auto,q_auto:eco,so_4.6/6006178f-e87d-4948-8c4c-7ccf824238da/p-6000-zapatillas-p3dQfs.jpg', 49.99);
$product2 = new Product(2, 'Gorra de Beisbol', 'Para que tengas siempre buena suerte en tus manos🧢', 'https://media.gq.com.mx/photos/61f2e7a345749103d307be68/1:1/w_1092,h_1092,c_limit/como-elegir-una-gorra-de-beisbol-para-hombre.jpg', 14.99);
$product3 = new Product(3, 'Pantalones cargo', 'Para que siempre tengas sitio en tus bolsillos además de ir protegido 👖', 'https://ae01.alicdn.com/kf/S2b0d1e5c3d934f419450e220f9001696F/Pantalones-Cargo-de-cintura-con-cord-n-lateral-y-bolsillo-con-solapa-para-hombre.jpg', 34.99);

$products = [$product0, $product1, $product2, $product3]
?>

<?php
$num = 3;
$lecName = "tercera";
render_template('head', ['num' => $num]);
render_template('main', ['lecName' => $lecName]);


render_template('styles');
?>
<pre style="max-width:125ch; padding:1rem; text-wrap:pretty">
Esta Lección consistía en crear clases y utilizar objetos de dichas clases.
<br>
En este caso he creado una clase Products, con la que luego crear objetos y utilizarlos en un array para mostrar una lista de productos de una tienda online:

<h5><strong>La clase:</strong></h5>
class Product
{
    
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public string $imgUrl,
        public float $price
        ) {
            $this->id = $id;
            $this->name = $id;
            $this->name = $name;
            $this->description = $description;
            $this->imgUrl = $imgUrl;
            $this->price = $price;
    }
}
    
<h5><strong>Creacción de objetos y array:</strong></h5>
$product0 = new Product(id, nombre, descripcion, imagen, precio);
$product1 = new Product(id, nombre, descripcion, imagen, precio);
$product2 = new Product(id, nombre, descripcion, imagen, precio);
$product3 = ...
......

$products = [$product0, $product1, $product2, $product3, ...]

</pre>
<section class="products_list">
    <?php
    foreach ($products as $key => $product) {
        render_template('product', ['data' => $product]);
    }
    ?>
</section>