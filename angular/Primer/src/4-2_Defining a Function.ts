function writeValue(val: string | null = null) {
    console.log(`Value: ${val ?? "Fallback value"}`)
   }
   writeValue("London");
   writeValue(null);
   writeValue();