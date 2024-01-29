function formChanged(e) {
  let input = event.target;
  let cname = input.getAttribute("name");

  let allInputs = document.getElementsByName(cname);
  console.log(allInputs);

  for (let x = 0; x < allInputs.length; x++){
    allInputs[x].value = input.value;
  }
}