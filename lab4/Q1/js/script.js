let num = prompt("Enter a number to check if it is even or not: ");

if (isNaN(num)) {
  console.log("INVALID INPUT");
} else if (num % 2 == 0) {
  console.log("EVEN NUMBER!");
} else if (num % 0 != 0) {
  console.log("ODD NUMBER");
}
