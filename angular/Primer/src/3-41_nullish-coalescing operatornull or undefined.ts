let val1: string | undefined;
let val2: string | undefined = "London";
let val3: number | undefined = 0;
let val4: null | undefined = null;

let coalesced1 = val1 ?? "fallback value";
let coalesced2 = val2 ?? "fallback value";
let coalesced3 = val3 ?? 100;
let coalesced4 = val4 ?? 50;

console.log(`Result 1: ${coalesced1}`);
console.log(`Result 2: ${coalesced2}`);
console.log(`Result 3: ${coalesced3}`)
console.log(`Result 4: ${coalesced4}`)