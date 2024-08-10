const themeToggle = document.getElementById('switch');

themeToggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');
});

const avatarBlock = document.querySelector('.avatar-block');
const avatarInput = document.querySelector('#avatar-input');
const chooseAvatarBtn = document.querySelector('#choose-avatar-btn');
const avatarImg = document.querySelector('#avatar');

chooseAvatarBtn.addEventListener('click', () => {
  avatarInput.click();
});

avatarInput.addEventListener('change', (e) => {
  const file = avatarInput.files[0];
  const reader = new FileReader();
  reader.onload = () => {
    const imageDataUrl = reader.result;
    avatarImg.src = imageDataUrl;
  };
  reader.readAsDataURL(file);
});

// const loginInput = document.getElementById("login");
// const passInput = document.getElementById("pass");
// const emailInput = document.getElementById("email");
// const errorMessage = document.getElementById("error-message");

// loginInput.addEventListener("input", () => {
//   if (loginInput.value.length < 4 || loginInput.value.length > 25) {
//           errorMessage.innerText = "Длина логина должна быть не менее 5 и не более 30";
//   } if(emailInput.value.length < 1) {
//       errorMessage.innerText = "Введите почту";
//   } if (passInput.value.length < 4 || passInput.value.length > 25) {
//     errorMessage.innerText = "Длина пароля должна быть не менее 5 и не более 30";
//   } else {
//     errorMessage.innerText = "";
// }
// });


// Load saved clicks from localStorage
// if (localStorage.getItem('balance')) {
//     clicks = parseInt(localStorage.getItem('balance'));
//     document.getElementById('balance').innerText = balance;
// }

const amount = new URLSearchParams(window.location.search).get('amount');
document.getElementById('amount').innerText = amount;
const commission = (amount * 0.02).toFixed(2);
document.getElementById('commission').innerText = commission;
const total = (parseFloat(amount) + parseFloat(commission)).toFixed(2);
document.getElementById('total').innerText = total;
document.getElementById('total-input').value = total;

function copyAddress() {
  const address = document.getElementById('wallet-address').innerText;
  navigator.clipboard.writeText(address);
  alert('Address copied to clipboard!');
}

// Auto-save clicks every 10 seconds
// autoSaveInterval = setInterval(() => {
//     localStorage.setItem('balance', balance);
// }, 100);
