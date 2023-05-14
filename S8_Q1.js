// Displaying a message using an alert box
alert('Exams are near, have you started preparing for?');

// Accepting two numbers from the user
var num1 = prompt('Enter the first number:');
var num2 = prompt('Enter the second number:');

// Converting the input strings to numbers
num1 = parseFloat(num1);
num2 = parseFloat(num2);

// Checking if the input is valid numbers
if (isNaN(num1) || isNaN(num2)) {
  alert('Invalid input. Please enter valid numbers.');
} else {
  // Displaying the addition of two numbers
  var result = num1 + num2;
  alert('The addition of ' + num1 + ' and ' + num2 + ' is: ' + result);
}
