document.write("<h1>This is from JS file</h1>")
//to retrieve a tag and replace text with something else
document.getElementById("chng").innerHTML = "Welcome to Javascript";
//Join two strings with button
function joinBC(){
    var x = "Brooklyn";
    var y = "College";
    document.getElementById("nm").innerHTML = x + " " + y;
}
function addTwo(){
    var x = 5;
    var y = 4;
    document.getElementById("add").innerHTML +=  (x + y);
}
function addTwoInput(){
    var num1 = parseInt(document.getElementById("firstN").value);
    var num2 = parseInt(document.getElementById("secondN").value);
    window.alert(num1 + num2);
}