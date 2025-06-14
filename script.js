document.addEventListener('DOMContentLoaded', function() {
    // Testimonial Slider
    const track = document.querySelector('.testimonial-track');
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.testimonial-dot');
    let currentIndex = 0;
    const slideCount = slides.length;

    // Function to update slider position
    function updateSlider() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    // Auto slide functionality
    function autoSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlider();
    }

    // Set up auto slide interval
    let slideInterval = setInterval(autoSlide, 5000);

    // Click handlers for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateSlider();
            // Reset auto slide timer
            clearInterval(slideInterval);
            slideInterval = setInterval(autoSlide, 5000);
        });
    });

    // Form submission handler
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                business: document.getElementById('business').value
            };

            // Here you would typically send the data to a server
            console.log('Form submitted:', formData);
            
            // Show success message
            alert('Thank you for your submission! We will contact you soon.');
            form.reset();
        });
    }

    // Mobile menu toggle
    const mobileMenuButton = document.createElement('button');
    mobileMenuButton.className = 'md:hidden p-2';
    mobileMenuButton.innerHTML = '<i class="fas fa-bars"></i>';
    
    const header = document.querySelector('header');
    const nav = document.querySelector('nav');
    
    if (header && nav) {
        nav.classList.add('mobile-menu');
        header.querySelector('.container').appendChild(mobileMenuButton);
        
        mobileMenuButton.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    }

    // Add fade-in animation to sections
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });
}); 