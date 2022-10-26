//  Function Rest Parameters  unlimited 

function writeValue(val: string | number, ...extraInfo: (string | number)[] ) {
    console.log(`Value: ${val}, Extras: ${extraInfo}`)
   }
   writeValue("London", "Raining", "Cold");
   writeValue("Paris", "Sunny");
   writeValue("New York");
   writeValue(30);
   writeValue("Dhaka", "Raining", "Cold", "London", "Raining", "Cold", 60);
