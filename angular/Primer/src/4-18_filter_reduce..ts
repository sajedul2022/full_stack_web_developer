
// Processing a Data Array 

let myArray: (number | string | boolean)[] = [100, "Adam", true];
let otherArray = [...myArray, 200, "Bob", false];
let sum: number = otherArray
 .filter(val => typeof(val) == "number")
 .reduce((total: number, val) => total + (val as number), 0)
console.log(`Sum: ${sum}`);