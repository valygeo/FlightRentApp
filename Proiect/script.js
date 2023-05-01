const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");
const iconClose = document.querySelector(".icon-close");
const form = document.querySelector("form");
const passwordInput = document.querySelector("#password");
const emailInput = document.querySelector("#email");
const registerEmailInput = document.querySelector("#registerEmail");
const confirmPasswordInput = document.querySelector("#confirmPassword");
const registerPasswordInput = document.querySelector("#registerPassword");
const phoneInput = document.querySelector("#phoneNumber");
registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});
loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});
iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
function validateInput(email, password) {
  const passwordRegex = /^.{5,}$/;
  const emailRegex = /^[^\s@]+@(yahoo|gmail)\.com$/;

  if (!passwordRegex.test(password)) {
    return "Parola trebuie să conțină cel puțin 5 caractere.";
  }

  if (!emailRegex.test(email)) {
    return "Adresa de email trebuie să fie de la Yahoo sau Gmail.";
  }

  return "Inputul este valid.";
}
loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const passwordValue = passwordInput.value.trim();
  if (passwordValue.length < 5) {
    alert("Parola trebuie sa contina cel putin 5 caractere.");
    return;
  }
  const emailValue = emailInput.value.trim();
  if (!emailValue.includes("@") || !emailValue.includes(".com", ".ro")) {
    alert(
      "Adresa de e-mail trebuie sa contina caracterul @ sau terminatia .com/.ro ."
    );
    return;
  }
});
registerForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const registerEmailValue = registerEmailInput.value.trim();
  if (
    !registerEmailValue.includes("@") ||
    !registerEmailValue.includes(".com", ".ro")
  ) {
    alert(
      "Adresa de e-mail trebuie sa contina caracterul @ sau terminatia .com/.ro ."
    );
    return;
  }
  const registerPasswordValue = registerPasswordInput.value.trim();
  if (registerPasswordValue.length < 5) {
    alert("Parola trebuie sa contina cel putin 5 caractere.");
    return;
  }
  const phoneValue = phoneInput.value.trim();
  const phoneRegex = /^\d{0,10}$/;
  if (!phoneRegex.test(phoneValue)) {
    alert("Numarul de telefon nu este valid.");
    return;
  }
  if (phoneValue.length < 10) {
    alert("Numarul de telefon trebuie sa aiba 10 cifre!");
    return;
  }
  const confirmPasswordValue = confirmPasswordInput.value.trim();
  if (confirmPasswordValue != registerPasswordValue) {
    alert("Introdu aceeasi parola!");
    return;
  }
});
// function addUser() {
//   // Preia datele din formular
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;

//   // Crează un obiect XMLHttpRequest
//   var xhttp = new XMLHttpRequest();

//   // Specifică acțiunea și URL-ul pentru cerere
//   xhttp.open("POST", "procesare.php", true);

//   // Setează tipul de conținut al cererii
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//   // Trimite cererea și datele formularului
//   xhttp.send("username=" + username + "&password=" + password);

//   // Gestionează răspunsul de la server
//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       // Afișează răspunsul de la server
//       document.getElementById("response").innerHTML = this.responseText;
//     }
//   };
// }
