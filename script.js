const buttons = document.querySelectorAll('.login-btn');

buttons.forEach(button => {
  button.addEventListener('mousedown', (event) => {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');
    ripple.style.left = `${event.offsetX}px`;
    ripple.style.top = `${event.offsetY}px`;
    button.appendChild(ripple);
    setTimeout(() => {
      ripple.remove();
    }, 700);
  });
});


const emailBtn = document.querySelector('#op-email');
const phoneBtn = document.querySelector('#op-phone');

emailBtn.addEventListener('click', () => {
  if (!emailBtn.classList.contains('btn-option')) {
    emailBtn.classList.add('btn-option');
    phoneBtn.classList.remove('btn-option');
    emailBtn.textContent = 'E-mail';
    phoneBtn.textContent = 'Phone';
  }
});

phoneBtn.addEventListener('click', () => {
  if (!phoneBtn.classList.contains('btn-option')) {
    phoneBtn.classList.add('btn-option');
    emailBtn.classList.remove('btn-option');
    phoneBtn.textContent = 'Mobile';
    emailBtn.textContent = 'E-mail';
  }
});

