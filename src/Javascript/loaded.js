function loaded() {
  let cn = document.getElementsByClassName("category-container");

  for (let x = 0; x < cn.length; x++) {
    console.log(x);
    let inputs = cn[x].getElementsByTagName("input");
    for (let i = 0; i < inputs.length; i++) {
      console.log(i);
      inputs[x].addEventListener("keyup", formChanged);
    }
  }
  ConfigureLinks();
  ConfigureForms();
}
window.addEventListener('load', loaded);