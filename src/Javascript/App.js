window.addEventListener("DOMContentLoaded", () => {
  window.addEventListener("load", () => {
    // document.querySelector('#clicked').addEventListener('click', () => {
    //   alert('clicked');
    // })
    const formContainer = document.querySelector("#form-container");
    const open = document.querySelector("#open");
    const times = document.querySelector("#times");
    // open.addEventListener('click', (e) => {
    //   e.preventDefault();
    //   formContainer.style.display === 'none' ? formContainer.style.display = 'flex' : formContainer.style.display = "flex";
    //   formContainer.style.display === 'flex' ? open.style.display = 'none' : open.style.display = 'flex';
    //   open.style.display === 'none' ? times.style.display = 'flex' : times.style.display = 'none';

    // })
    // window.addEventListener("mouseup", (e) => {
    //   if (e.target != formContainer && e.target.parentNode != formContainer) {
    //     // formContainer.style.display = 'none'
    //     // open.style.display = 'flex';
    //   }
    // })

    // const dropDown = document.querySelector('#dropDown')
    // const box = document.querySelector('#box');
    // dropDown.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     box.style.display === "none" ? box.style.display = "flex" : box.style.display = "none";
    // })

    const bar = document.querySelector(".bars");
    const closeNav = document.getElementById("closeNav")
    const logo2 = document.getElementById('logo-2');
    const toggle = document.querySelector(".hide");
    bar.addEventListener('click', () => {
      toggle.style.display === "flex" ? toggle.style.display = "none" : toggle.style.display = "flex";
      if (toggle.style.display === "flex") {
        logo2.style.display = "flex";
        bar.style.display = "none";

      }
      
    })

    closeNav.addEventListener('click', () => {
      toggle.style.display = "none";
      bar.style.display = "flex";
      logo2.style.display = "none";
    })

    // const dark = document.getElementById('dark');
    // const sun = document.getElementById('sun');
    // const night = document.getElementById('night');
    // dark.addEventListener('click', (e) => {
    //   e.preventDefault();
    //   if (dark) {
    //     // document.body.parentNode.style.background = "black";
    //     // dark.style.background = "black";
    //     // sun.style.display = "none";
    //     // night.style.display = "flex";
    //   } 
      
    // })
  })
})