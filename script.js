function changeView() {
  var regBox = document.getElementById("regBox");
  var logInBox = document.getElementById("logInBox");

  regBox.classList.toggle("d-none");
  logInBox.classList.toggle("d-none");

}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var mobile = document.getElementById("mobile");
  var username = document.getElementById("username");
  var password = document.getElementById("password");


  var fd = new FormData();
  fd.append("f", fname.value);
  fd.append("l", lname.value);
  fd.append("e", email.value);
  fd.append("m", mobile.value);
  fd.append("u", username.value);
  fd.append("p", password.value);


  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      if (response == "Success") {
        document.getElementById("msg1").innerHTML = "Registration Suceessfull";
        document.getElementById("msg1").className = "alert alert-success";
        document.getElementById("msgDiv1").className = "d-block";

        window.location.reload();

      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgDiv1").className = "d-block";


      }
    }
  }

  request.open("POST", "registerProcess.php", true);
  request.send(fd);
}

function signIn() {

  var un = document.getElementById("un");
  var pw = document.getElementById("pw");
  var rm = document.getElementById("rm");

  var fd = new FormData();
  fd.append("u", un.value);
  fd.append("p", pw.value);
  fd.append("r", rm.checked);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        window.location = "home.php";

      } else {
        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msgDiv2").className = "d-block";
      }

    }
  }

  request.open("POST", "logInProcess.php", true);
  request.send(fd);

}


function adminLogIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");

  var fd = new FormData();
  fd.append("u", un.value);
  fd.append("p", pw.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        window.location = "adminDashboard.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  }

  request.open("POST", "adminLogInProcess.php", true);
  request.send(fd);
}

function loadUser() {  // empty request

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      document.getElementById("table").innerHTML = response;

    }
  }

  request.open("POST", "loadUserProcess.php", true);
  request.send();

}

function userUpdateStatus() {
  var userid = document.getElementById("userid");


  var fd = new FormData();
  fd.append("u", userid.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Deactive") {
        document.getElementById("msg").innerHTML = "User Deactivate Successfully";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";

        window.location.reload();

      } else if (response == "Active") {
        document.getElementById("msg").innerHTML = "User Activate Successfully";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";

        window.location.reload();


      } else {  // other response
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";
      }
    }

  }

  request.open("POST", "userUpdateStatusProcess.php", true);
  request.send(fd);
}

function reload() {
  location.reload();
}


function brandRegister() {

  var brand = document.getElementById("pbrand");

  var fd = new FormData();
  fd.append("b", brand.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        document.getElementById("bmsg").innerHTML = "Brand Registration Successfully";
        document.getElementById("bmsg").className = "alert alert-success";
        document.getElementById("bmsgDiv").className = "d-block";
      } else {
        document.getElementById("bmsg").innerHTML = response;
        document.getElementById("bmsgDiv").className = "d-block";
      }

    }
  }

  request.open("POST", "brandRegProcess.php", true);
  request.send(fd);

}

function categoryRegister() {

  var category = document.getElementById("pcategory");

  var fd = new FormData();
  fd.append("c", category.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        document.getElementById("cmsg").innerHTML = "Category Registration Successfully";
        document.getElementById("cmsg").className = "alert alert-success";
        document.getElementById("cmsgDiv").className = "d-block";
      } else {
        document.getElementById("cmsg").innerHTML = response;
        document.getElementById("cmsgDiv").className = "d-block";
      }
    }
  }

  request.open("POST", "categoryRegProcess.php", true);
  request.send(fd);
}

function colorRegister() {

  var color = document.getElementById("pcolor");

  var fd = new FormData();
  fd.append("c", color.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        document.getElementById("pcmsg").innerHTML = "Color Registration Successfully";
        document.getElementById("pcmsg").className = "alert alert-success";
        document.getElementById("pcmsgDiv").className = "d-block";
      } else {
        document.getElementById("pcmsg").innerHTML = response;
        document.getElementById("pcmsgDiv").className = "d-block";
      }
    }
  }

  request.open("POST", "colorRegProcess.php", true);
  request.send(fd);
}

function sizeRegister() {

  var size = document.getElementById("psize");

  var fd = new FormData();
  fd.append("s", size.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      if (response == "Success") {
        document.getElementById("smsg").innerHTML = "Size Registration Successfully";
        document.getElementById("smsg").className = "alert alert-success";
        document.getElementById("smsgDiv").className = "d-block";
      } else {
        document.getElementById("smsg").innerHTML = response;
        document.getElementById("smsgDiv").className = "d-block";
      }
    }
  }

  request.open("POST", "sizeRegProcess.php", true);
  request.send(fd);
}

function regProduct() {

  var pname = document.getElementById("pname");
  var brand = document.getElementById("brand");
  var cat = document.getElementById("cat");
  var color = document.getElementById("color");
  var size = document.getElementById("size");
  var desc = document.getElementById("desc");
  var file = document.getElementById("file");

  //alert(pname.value);

  var fd = new FormData();
  fd.append("pname", pname.value);
  fd.append("brand", brand.value);
  fd.append("cat", cat.value);
  fd.append("color", color.value);
  fd.append("size", size.value);
  fd.append("desc", desc.value);
  fd.append("image", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      //alert(response);

      if (response == "Success") {
        alert("Product Registration Successfully");
        location.reload();
      } else {
        alert(response);
      }

    }
  }

  request.open("POST", "productRegProcess.php", true);
  request.send(fd);
}

function stockUpdate() {

  var pname = document.getElementById("sProduct");
  var qty = document.getElementById("qty");
  var price = document.getElementById("uprice");

  var fd = new FormData();
  fd.append("p", pname.value);
  fd.append("q", qty.value);
  fd.append("up", price.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      alert(response);
      location.reload();

    }
  }

  request.open("POST", "stockUpdateProcess.php", true);
  request.send(fd);
}

function printDiv() {

  var orginalContent = document.body.innerHTML;
  var printArea = document.getElementById("printArea").innerHTML;

  document.body.innerHTML = printArea;
  window.print();
  document.body.innerHTML = orginalContent;

}

function loadProduct(x) {

  var page = x;

  var fd = new FormData();
  fd.append("pg", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;

      document.getElementById("productId").innerHTML = response;

    }
  }

  request.open("POST", "loadProductProcess.php", true);
  request.send(fd);
}

function searchP(x) {

  var page = x;
  var product = document.getElementById("product");

  var fd = new FormData();
  fd.append("p", product.value);
  fd.append("pg", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      alert(response);
    }
  }

  request.open("POST", "productSearchProcess.php", true);
  request.send(fd);

}