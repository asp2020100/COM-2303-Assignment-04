
const phrases = ["Hello, I'm Yasas Pamudu !"];
let index = 0;
let phraseIndex = 0;
const typingDelay = 100; // Delay between each character typing
const eraseDelay = 3000; // Delay before erasing the text
const phraseDelay = 2000; // Delay before typing the next phrase

const textElement = document.querySelector('.typing .text');

function type() {
  if (index < phrases[phraseIndex].length) {
    textElement.textContent += phrases[phraseIndex].charAt(index);
    index++;
    setTimeout(type, typingDelay);
  } else {
    setTimeout(erase, eraseDelay);
  }
}

function erase() {
  if (index > 0) {
    textElement.textContent = phrases[phraseIndex].substring(0, index - 1);
    index--;
    setTimeout(erase, typingDelay);
  } else {
    phraseIndex++;
    if (phraseIndex >= phrases.length) {
      phraseIndex = 0;
    }
    setTimeout(type, phraseDelay);
  }
}

// Start the typing effect
type();

// Add smooth scrolling to navigation links
document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Get all the portfolio items with the "hover-effect" class
const portfolioItems = document.querySelectorAll('.hover-effect');

// Add event listeners for mouseenter and mouseleave events
portfolioItems.forEach(item => {
  item.addEventListener('mouseenter', () => {
    // Add a class to apply the hover effect
    item.classList.add('hovered');
  });

  item.addEventListener('mouseleave', () => {
    // Remove the class to remove the hover effect
    item.classList.remove('hovered');
  });
});