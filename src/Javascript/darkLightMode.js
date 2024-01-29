const dark = document.getElementById("dark");
const sun = document.getElementById("sun");
const night = document.getElementById("night");

//Get theme on page load
localStorage.getItem("theme");

//set theme on button pres
localStorage.setItem("theme", newTheme);

//detect users system settings

const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");

//or

const systemSettingLight = window.matchMedia("(prefers-color-scheme: light");

{
  matches: true
  media: "(prefers-color-scheme: darck"
  onchange: null
}

//access to a localstorage value and system settings

function calculateSettings({localStorageTheme, systemSettingDark}) {
  if (localStorageTheme !== null) {
    return localStorageTheme;
  }

  if (systemSettingDark.matches) {
    return "dark";
  }
  return "light";
}

const localStorageTheme = localStorage.getItem("theme");

const systemSettingsDark = window.matchMedia("(prefers-color-scheme: dark)");

let currentThemeSetting = calculateSettings({ localStorageTheme, systemSettingDark });

dark.addEventListener('click', () => {
  const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

  //update the button text

  const newTa = newTheme === "dark" ? sun.style.display = "none" : night.style.display = "flex";

  //update theme attribute on HTML to switch theme in css
  document.querySelector("html").setAttribute("data-theme", newTheme);

  //update in local storage
  localStorage.setItem("theme", newTheme);

  //update the currentThemeSetting in memory
  currentThemeSetting = newTheme;
})
