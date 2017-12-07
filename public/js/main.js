function simpleNot(){
  var input = $("#notInput").val();
  console.log("input = "+input);
  var output = not(input);
  console.log("output = "+output);
  $("#notOutput").val(output);
}

function clearNotOutput(){
  $("#notOutput").val();
}
