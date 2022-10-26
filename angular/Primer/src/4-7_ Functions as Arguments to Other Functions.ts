// f: () => string 	Functions as Arguments to Other Functions using Arrow Syntax

function getUKCapital() : string {
    return "London";
}

function writeCity(f: () => string) {
    console.log(`City: ${f()}`)
}

writeCity(getUKCapital);
writeCity(() => "Paris"); // annonoumous function or Closure

