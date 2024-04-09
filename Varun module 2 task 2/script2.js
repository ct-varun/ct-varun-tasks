function checkNumber(input) {
  if (input == null) {
    console.log("thank you");
    return 0;
  }
  while (
    input.trim() == "" ||
    isNaN(Number(input)) ||
    !Number.isFinite(Number(input))
  ) {
    console.log("input error! Please enter a number");
    input = prompt("input error! Enter value again");
    if (input == null) {
      console.log("thank you");
      return 0;
    }
  }
  return Number(input);
}

function checkString(str) {
  if (str == null) {
    console.log("thank you");
    return 0;
  }
  while (str.trim() == "" || !isNaN(parseInt(str))) {
    str = prompt("invalid enter again");
    if (str == null) {
      console.log("thank you");
      return 0;
    }
  }
  return str;
}

function checkBoolean(bool) {
  while (bool != "true" && bool != "false") {
    if (bool == null) {
      console.log("thank you");
      return 0;
    }
    bool = prompt("Enter true or false only");
  }
  if (bool == "true") {
    bool = true;
  }
  if (bool == "false") {
    bool = false;
  }
  return bool;
}

export {
  checkNumber as checkNumber,
  checkString as checkString,
  checkBoolean as checkBoolean,
};
