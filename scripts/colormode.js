const modeButton = document.getElementById('modeButton');
const modeIcon = document.getElementById('modeIcon');
let isDarkMode = false;


modeButton.addEventListener('click', function() {
  document.body.classList.toggle('dark-mode');
  const nav = document.querySelector('nav');
  const section = document.querySelector('section');
  const box = document.querySelectorAll('.box');

  section.classList.toggle('dark-mode');
  nav.classList.toggle('dark-mode');
  
  box.forEach(box => {
    box.classList.toggle('dark-mode-box');
  });
  isDarkMode = !isDarkMode;
  if (isDarkMode) {
    modeButton.classList.add('dark-mode');
    modeIcon.style.transform = 'translateX(30px)';
    modeIcon.style.color = 'white';
  } else {
    modeButton.classList.remove('dark-mode');
    modeIcon.style.transform = 'translateX(0)';
    modeIcon.style.color = 'black';
  }

});


