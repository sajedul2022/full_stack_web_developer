// import { enableProdMode } from '@angular/core';
// import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
// import { AppModule } from './app/app.module';
// import { environment } from './environments/environment';
// if (environment.production) {
//   enableProdMode();
// }
// platformBrowserDynamic().bootstrapModule(AppModule)
//   .catch(err => console.error(err));
//  typeof 
// function myFunction(param:any) {
//   if (typeof(param) == "number") {
//   let result = param + 100;
//   console.log("My result: " + result);
//   } else {
//   throw ("Expected a number: " + param)
//   }
//  }
//  myFunction(1);
//  myFunction("London");
// type of set everywhere
function myFunction(param) {
    if (typeof (param) == "number" || typeof (param) == "string") {
        var result = param + 100;
        console.log("My result: " + result);
    }
    else {
        throw ("Expected a number or a string: " + param);
    }
}
myFunction(1);
myFunction("London");
