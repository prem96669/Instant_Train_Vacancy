function name() {
var x = document.forms["pticket"]["fname"].value;
if(x == null | | x == "") {
  alert("please fill all the name");
  return false;
  }
}

function source() {
var y = document.forms["pticket"]["source"].value;
if(y == null | | y == "") {
  alert("please fill the source station");
  return false;
  }
}

function destination() {
var z = document.forms["pticket"]["destination"].value;
if(z == null | | z == "") {
  alert("please fill the destination station");
  return false;
  }
}

function mail() {
    var x = document.forms["pticket"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
