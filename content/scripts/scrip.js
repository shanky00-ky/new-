let currentIndex = 0;

const items = document.querySelectorAll('.carousel-item');
const indicators = document.querySelectorAll('.indicator');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

function updateCarousel() {
  items.forEach((item, index) => {
    item.classList.remove('active');
    indicators[index].classList.remove('active');
  });

  items[currentIndex].classList.add('active');
  indicators[currentIndex].classList.add('active');
}

indicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    currentIndex = index;
    updateCarousel();
  });
});

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % items.length;
  updateCarousel();
});

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  updateCarousel();
});

setInterval(() => {
  currentIndex = (currentIndex + 1) % items.length;
  updateCarousel();
}, 3000);

updateCarousel();



const counters = document.querySelectorAll('.counter');

const animateCounters = () => {
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-count');
    const current = +counter.innerText;

    if (current < target) {
      const increment = target / 100;
      const interval = setInterval(() => {
        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
        } else {
          clearInterval(interval);
          counter.innerText = target;
        }
      }, 20);
    }
  });
};

const counterSection = document.querySelector('.counter-section');
const sectionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCounters();
      observer.disconnect();
    }
  });
}, { threshold: 0.5 });

sectionObserver.observe(counterSection);

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: true,
    dotsEach: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
});

const checkbox = document.getElementById("checkbox");

checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode", checkbox.checked);
});

const navToggle = document.getElementById('nav-toggle');
const navList = document.getElementById('nav-list');

navToggle.addEventListener('click', () => {
  navList.classList.toggle('active');
});

const users = ["Alice", "Bob", "Charlie"];
const feedback = ["Great site!", "Add more features", "Bug in login page"];

document.getElementById("total-users").innerText = users.length;
document.getElementById("total-feedback").innerText = feedback.length;
document.getElementById("active-sessions").innerText = Math.floor(Math.random() * 10 + 1);



function showLoading() {
  document.getElementById('loading').style.display = 'block';
}


function hideLoading() {
  document.getElementById('loading').style.display = 'none';
}


showLoading();  


setTimeout(function() {
  hideLoading();  
  document.getElementById('content').innerHTML = "<p>Content Loaded!</p>"; 
}, 3000); 
