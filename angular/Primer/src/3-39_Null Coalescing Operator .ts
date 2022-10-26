// Null Coalescing Operator   
let val1: string | undefined = "Dhaka";
let val2: string | undefined ;
let coalesced1 = val1 || "fallback value";
let coalesced2 = val2 || "fallback value";
console.log(`Result 1: ${coalesced1}`);
console.log(`Result 2: ${coalesced2}`);