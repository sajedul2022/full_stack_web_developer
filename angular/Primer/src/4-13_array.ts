//  Using a Type Annotation 

// let myArray: any[] = [];
// myArray[0] = 100;
// myArray[1] = "Adam";
// myArray[2] = true;

let myArray: (number | string | boolean)[] = [];
myArray[0] = 100;
myArray[1] = "Adam";
myArray[2] = true;