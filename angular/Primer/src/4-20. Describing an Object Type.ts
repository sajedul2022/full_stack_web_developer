// Listing 4-20. Describing an Object Type in the main.ts File in the src Folder
let hat = {
 name: "Hat",
 price: 100
};
let boots = {
 name: "Boots",
 price: 100
}
function printDetails(product : { name: string, price: number}) {
 console.log(`Custom Name: ${product.name}, Price: ${product.price}`);
}
printDetails(hat);
printDetails(boots);