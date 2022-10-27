// 4-21. Adding a Property in the main.ts File in the src Folder category: "Snow Gear"

// let hat = {
//  name: "Hat",
//  price: 100
// };
// let boots = {
//     name: "Boots",
//     price: 100,
//     category: "Snow Gear"
//    }
//    function printDetails(product : { name: string, price: number}) {
//     console.log(`Name: ${product.name}, Price: ${product.price}`);
//    }
//    printDetails(hat);
//    printDetails(boots);

// 4-22. Defining an Optional Property (?) in the main.ts File in the src Folder
let hat = {
 name: "Hat",
 price: 100
};
let boots = {
 name: "Boots",
 price: 100,
 category: "Snow Gear",
}
function printDetails(product : { name: string, price: number, category?: string}) {
 if (product.category != undefined) {
 console.log(`Name: ${product.name}, Price: ${product.price}, ` +
 `Category: ${product.category}`);
 } else {
 console.log(`Name: ${product.name}, Price: ${product.price}`);
 }
}
printDetails(hat);
printDetails(boots);