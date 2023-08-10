const text = "Hello, I'm Yasas Pamudu !";
let index = 0;

function type() {
  const span = document.querySelector('.typing .text');
  if (index < text.length) {
    span.textContent += text.charAt(index);
    index++;
    setTimeout(type, 100);
  }
}

type();