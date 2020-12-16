function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("numb").value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("form").innerHTML = text;
}

function myfunction(){
  document.getElementById("about").innerHTML="sandeep reddy";
  document.getElementById("codeblocks").innerHTML="Hello baby";
  document.getElementById("codeblocks").innerHTML="h r u!";

}
function myFunction(p1, p2) {
  return p1 * p2;
}
function myFunction() {
  var message, x;
  message = document.getElementById("p01");
  message.innerHTML = "";
  x = document.getElementById("errors").value;
  try {
    if(x == "")  throw "is empty";
    if(isNaN(x)) throw "is not a number";
    x = Number(x);
    if(x > 10)   throw "is too high";
    if(x < 5)  throw "is too low";
  }
  catch(err) {
    message.innerHTML = "Input " + err;
  }
  finally {
    document.getElementById("errors").value = "";
  }
}
