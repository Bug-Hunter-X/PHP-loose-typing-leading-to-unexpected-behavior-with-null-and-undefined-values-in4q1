function foo(a, b) {
  if (a === null || a === undefined || b === null || b === undefined) {
    return null; // Handle both null and undefined
  }
  return a + b;
}

function bar(x) {
  if (x === null || x === undefined) {
    return null; // Handle both null and undefined
  }
  return foo(x, 2);
}

console.log(bar(null)); // Output: null
console.log(bar(5)); // Output: 7
console.log(bar(undefined)); // Output: null