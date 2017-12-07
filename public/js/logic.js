function convertToBoolean(x){
  if (x == "true") {
    return true;
  }
  if (x == "false"){
    return false;
  }
}

function not(x) {
  y = convertToBoolean(x);
  if (!y) {
    return true;
  } else {
    return false;
  }
}
