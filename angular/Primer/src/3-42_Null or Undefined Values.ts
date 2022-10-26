let count: number | undefined | null = 100;
if (count != null && count != undefined) {
 let result1: string = count.toFixed(2);
 console.log(`Result 1: ${result1}`);
 console.log(`Result 1: ${result1} Type: ${typeof(result1)}`);
}