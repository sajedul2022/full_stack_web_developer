// 4-29. Importing Specific Types in the main.ts File in the src Folder
import { Name, WeatherLocation } from "./modules/NameAndWeather";
let name = new Name("Adam", "Freeman");
let loc = new WeatherLocation("raining", "London");
console.log(name.nameMessage);
console.log(loc.weatherMessage);