
var modal = document.querySelector("#myModal");
var btn = document.querySelector("#myBtn");
var span = document.querySelectorAll(".close")[0];

btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var triangeBtn = document.getElementById("find-btn").addEventListener("click", function (event) {
  event.preventDefault();
  let elements = document.getElementsByClassName("side");
  let erMes = document.getElementById("form__error-message");
  let a = parseInt(elements[0].value);
  let b = parseInt(elements[1].value);
  let c = parseInt(elements[2].value);
  

  for (var i = 0; i < elements.length; i++) {
    let fld = elements[i];
    if (!fld.value) {
      fld.classList.add("error");
      erMes.style.display = "Initial";
    }
    else if (!a) {
      elements[0].classList.add("error");
      erMes.style.display = "Initial";
    }
    else if (!b) {
      elements[1].classList.add("error");
      erMes.style.display = "Initial";
    }
    else if (!c) {
      elements[2].classList.add("error");
      erMes.style.display = "Initial";
    }

    if (fld.value) {
      fld.classList.remove("error");
      erMes.style.display = "None";
      let P = ((a + b + c) * (b + c - a) * (a + c - b) * (a + b - c));
      let square = Math.sqrt(P / 4);
      document.getElementById("result").innerText = Math.round(square);
      console.log(square);
    }
    else if (a) {
      elements[0].classList.remove("error");
    }
    else if (b) {
      elements[1].classList.remove("error");
    }
    else if (c) {
      elements[2].classList.remove("error");
    }

  }
});

var checkTips = document.getElementById("tips");
checkTips.addEventListener("click", function (event) {
  var popUp = document.getElementById("form__pop-up");
  if (checkTips.checked) {
    popUp.style.display = "Block";
  }
  else {
    popUp.style.display = "None";
  }
});
