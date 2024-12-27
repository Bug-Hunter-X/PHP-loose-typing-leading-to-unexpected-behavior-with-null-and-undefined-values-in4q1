function foo(a, b) {
  if (a === null || b === null) {
    return null;
  }
  return a + b;
}

function bar(x) {
  if (x === null) {
    return null;
  }
  return foo(x, 2);
}

console.log(bar(null)); // Output: null
console.log(bar(5)); // Output: 7
console.log(bar(undefined)); //Output:Uncaught TypeError: Cannot read properties of undefined (reading '+')