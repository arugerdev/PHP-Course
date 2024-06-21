<?php

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
