function showInputs(category) {
  let container = document.getElementById("cat-" + category);
  let containers = document.getElementsByClassName("category-container");

  for (let x = 0; x < containers.length; x++) {
    containers[x].style.display = "none";
    let inputs = containers[x].getElementsByTagName("input");
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].removeAttribute("required");
    }
  }

  document.getElementById("product-category").innerText = "(" + container.dataset.name + ")";

  container.style.display = "flex";
  let inputs = container.getElementsByTagName("input");
  for (let i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute("required", true);
  }
}