<?php

class Item
{
    private int $id;
    private string $name;
    private string $description;
    private int $price;
    private string $image;
    private int $weight;
    private int $stock;
    private int $discount;
    private int $status;


    public function __construct(array $item)
    {
        $this->id = $item['id'];
        $this->name = $item['name'];
        $this->description = $item['description'];
        $this->price = $item['price'];
        $this->image = $item['image'];
        $this->weight = $item['weight'];
        $this->stock = $item['stock'];
        $this->discount = $item['discount'];
        $this->status = $item['status'];
    }

    public function getId(): int{
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    public function getDiscount(): int{
        return $this->discount;
    }

    public function setDiscount(int $discount): void{
        $this->discount = $discount;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }


    public function displayItem()
    {


    }


}


?>