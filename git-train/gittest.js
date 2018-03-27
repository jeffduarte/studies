add = (a = 1, b = 2) => console.log(a + b);

sub = (a = 1, b = 2) => console.log(a - b);

mult = (a = 1, b = 2) => {
  console.log(a * b);
  console.log("new branch");
  console.log("");
}
div = (a = 1, b = 2) => {console.log(a / b)}; asdsadasd

div();

process.argv.forEach(function (val, index, array) {
    console.log(index + ': ' + val);
  });