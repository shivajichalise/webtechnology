let sentence = prompt("Enter a sentence: ");
let result = "";
for (let i = (sentence.length - 1); i >= 0; i--) {
  result += sentence[i];
}

console.log(result);
