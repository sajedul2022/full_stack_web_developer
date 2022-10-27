// 4-27. Checking an Object Type in the main.ts File in the src Folder

class Product {
  constructor(
    public name: string,
    public price: number,
    public category?: string
  ) {}
  printDetails() {
    if (this.category != undefined) {
      console.log(
        `Name: ${this.name}, Price: ${this.price}, ` +
          `Category: ${this.category}`
      );
    } else {
      console.log(`Name: ${this.name}, Price: ${this.price}`);
    }
  }
}

class DiscountProduct extends Product {
  constructor(name: string, price: number, private discount: number) {
    super(name, price - discount);
  }
}

let hat = new DiscountProduct('Hat', 100, 10);
let boots = new Product('Boots', 100, 'Snow Gear');

// hat.printDetails();
// boots.printDetails();

console.log(`Hat is a Product? ${hat instanceof Product}`);
console.log(`Hat is a DiscountProduct? ${hat instanceof DiscountProduct}`);
console.log(`Boots is a Product? ${boots instanceof Product}`);
console.log(`Boots is a DiscountProduct? ${boots instanceof DiscountProduct}`);
