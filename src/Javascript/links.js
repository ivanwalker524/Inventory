function ConfigureLinks() {
  var links = $('a');
  for (var i = 0; i < links[i].length; i++) {
    links[i].onclick = function () {
      loader();
    };
  }
}

function ConfigureForms() {
  var forms = $("form");
  for (var i = 0; i < forms.length; i++) {
    console.log("form", i)
    forms[i].addEventListener("submit", () => {
      loader(true);
    })
  }
}