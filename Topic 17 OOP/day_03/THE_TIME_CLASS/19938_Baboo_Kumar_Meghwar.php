<?php
class Author {
private $name;
private $email;
private $gender;

public function __construct($name, $email, $gender) {
$this->name = $name;
$this->email = $email;
$this->gender = $gender;
}

public function getName() {
return $this->name;
}

public function getEmail() {
return $this->email;
}

public function getGender() {
return $this->gender;
}

public function setEmail($email) {
$this->email = $email;
}

public function printAuthor() {
echo $this->name . " (" . $this->gender . ") at " . $this->email;
}
}

class Book {
private $name;
private $author;
private $price;
private $qtyInStock = 0;

public function __construct($name, $author, $price) {
$this->name = $name;
$this->author = $author;
$this->price = $price;
}

public function getName() {
return $this->name;
}

public function getAuthor() {
return $this->author;
}

public function getPrice() {
return $this->price;
}

public function getQtyInStock() {
return $this->qtyInStock;
}

public function setPrice($price) {
if ($price > 0) {
$this->price = $price;
}
}

public function setQtyInStock($qtyInStock) {
if ($qtyInStock >= 0) {
$this->qtyInStock = $qtyInStock;
}
}

public function printBook() {
echo "'" . $this->name . "' by " . $this->author->getName() . " (" . $this->author->getGender() . ") @ " . $this->author->getEmail();
}

public function getAuthorName() {
return $this->author->getName();
}
}


$author = new Author("Ali Akbar", "aliakbar@gmail.com", "m");
$book = new Book("National Book", $author, 22.00);

echo $author->getName();
echo $book->getPrice();

$author->setEmail("aliakbar@gmail.com");
$book->setPrice(29.99);

$author->printAuthor();
$book->printBook(); 

echo $book->getAuthorName();
?>