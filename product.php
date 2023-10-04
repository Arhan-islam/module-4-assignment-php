<?php 
class Product {
    // Properties
    private int $id;
    private string $name;
    private float $price;

    // Constructor
    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to format price
    public function getFormattedPrice(): string {
        // Format the price with two decimal places
        return number_format($this->price, 2, '.', '');
    }

    // Method to show product details
    public function showDetails(): void {
        echo "Product Details: \n";
        echo "- Product ID: " . $this->id . "\n";
        echo "- Product Name: " . $this->name . "\n";
        echo "- Product Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example usage:
$product = new Product(1, "Example Product", 19.99);
$product->showDetails();


?>