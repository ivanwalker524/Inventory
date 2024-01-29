const loader = (hidden = true) => {
  let loader = $("#loader")[0];
  if (hidden) {
    loader.removeAttribute("style");
    window.setTimeout(() => {
      loader.className = "flex jic flex-col show";
    }, 50);
  } else {
    loader.removeAttribute("class");
    window.setTimeout(() => {
      loader.style.display = "none";
      loader.className = "flex jic flex-col";
    }, 50);
  }

};