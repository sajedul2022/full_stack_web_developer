
// chaining operator (the ? character)

let count: number | undefined | null = 100;

let result2: string | undefined = count?.toFixed(2);
console.log(`Result 2: ${result2}`);