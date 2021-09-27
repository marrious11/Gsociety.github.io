// variables
// keywords? var, let const
var age =20;
console.log(age);
let name = 'Keziah';
console.log(name);
const PI= 3.14;
console.log(PI);
// datatypes
// strings, boolean,numbers null,undefined
const namee ='john'
console.log(namee);
const isCool=true;
console.log(isCool);
const y=undefined;
let z;console.log(z);
// how to test for a data type
console.log(typeof null);
// concantenation
const firstName ='Chinge';
const agex=18;
console.log('My name is '+firstName+' and I am '+age);
// template strings
console.log(`My name is ${name} and I am ${agex}`);


// Displaying Random Content
function getQuote() {
    // Create the arrays
    quotes = new Array(4);
    sources = new Array(4);
    // Initialize the arrays with quotes
quotes[0] = "When I was a boy of 14, my father was so " +
"ignorant...but when I got to be 21, I was astonished " +
"at how much he had learned in 7 years.";
sources[0] = "Mark Twain"
quotes[1] = "Everybody is ignorant. Only on different " +
"subjects.";
sources[1] = "Will Rogers";
quotes[2] = "They say such nice things about people at " +
"their funerals that it makes me sad that I'm going to " +
"miss mine by just a few days.";
sources[2] = "Garrison Keilor";
quotes[3] = "What's another word for thesaurus?";
sources[3] = "Steven Wright";
// Get a random index into the arrays
i = Math.floor(Math.random() * quotes.length); 
// Write out the quote as HTML
document.write("<dl style='background-color: lightpink'>\n");
document.write("<dt>" + "\"<em>" + quotes[i] + "</em>\"\n");
document.write("<dd>" + "- " + sources[i] + "\n");
document.write("<dl>\n");
}