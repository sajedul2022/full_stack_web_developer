// Contents of an Array for loop

let myArray: (number | string | boolean)[] = [100, "Adam", true];

// for loop
for (let i = 0; i < myArray.length; i++) {
 console.log("Index " + i + ": " + myArray[i]);
}

console.log("---");

// forEach loop
myArray.forEach((value, index) => console.log("Index " + index + ": " + value));