<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPromind Media - Digital Marketing & IT Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="assets/img/IPM.png" alt="iPromind Media Logo" class="h-12">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">iPromind Media</h1>
                    <p class="text-sm text-gray-600">ISO 9001:2015 Certified</p>
                </div>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
                <a href="#testimonials" class="text-gray-600 hover:text-blue-600">Testimonials</a>
                <a href="#why-us" class="text-gray-600 hover:text-blue-600">Why Us</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-4 py-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Transform Your Digital Presence</h2>
            <p class="text-xl mb-8">We never DREAMED about SUCCESS , <br> We WORKED for it______</p>
            <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get Started</a>
        </div>
    </section>

    <!-- Contact Form -->
    <!-- Contact Form -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Contact Us</h2>
            
            <?php
            // Display errors if they exist
            if (!empty($errors)): ?>
                <div class="max-w-2xl mx-auto mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="max-w-2xl mx-auto mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    Thank you for contacting us! We'll get back to you soon.
                </div>
            <?php endif; ?>
            
            <div class="max-w-2xl mx-auto">
                <form method="POST" action="process-form.php" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2" for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" 
                               value="<?php echo isset($fullName) ? htmlspecialchars($fullName) : ''; ?>" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" 
                               value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="phone">Contact Number</label>
                        <input type="tel" id="phone" name="phone" 
                               value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="business">Business Name</label>
                        <input type="text" id="business" name="business" 
                               value="<?php echo isset($business) ? htmlspecialchars($business) : ''; ?>" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="testimonial-slider relative overflow-hidden">
                <div class="testimonial-track flex transition-transform duration-500">
                    <div class="testimonial-slide min-w-full px-4">
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold">John Smith</h4>
                                    <p class="text-gray-600">CEO, Tech Solutions</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"iPromind Media transformed our online presence completely. Their team's expertise in digital marketing helped us achieve remarkable growth."</p>
                        </div>
                    </div>
                    <div class="testimonial-slide min-w-full px-4">
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold">Sarah Johnson</h4>
                                    <p class="text-gray-600">Marketing Director, Global Corp</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"The web development team at iPromind delivered our project ahead of schedule. Their attention to detail and technical expertise is outstanding."</p>
                        </div>
                    </div>
                    <div class="testimonial-slide min-w-full px-4">
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold">Michael Brown</h4>
                                    <p class="text-gray-600">Founder, StartupX</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"Their IT support team is always available when we need them. The 24/7 support has been crucial for our business operations."</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-blue-600 transition-colors"></button>
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-blue-600 transition-colors"></button>
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-blue-600 transition-colors"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <!-- <section id="brands" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Top Brands Associated With Us</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="p-4">
                    <img src="https://via.placeholder.com/150x80?text=Brand+1" alt="Brand 1" class="w-full h-auto grayscale hover:grayscale-0 transition-all">
                </div>
                <div class="p-4">
                    <img src="https://via.placeholder.com/150x80?text=Brand+2" alt="Brand 2" class="w-full h-auto grayscale hover:grayscale-0 transition-all">
                </div>
                <div class="p-4">
                    <img src="https://via.placeholder.com/150x80?text=Brand+3" alt="Brand 3" class="w-full h-auto grayscale hover:grayscale-0 transition-all">
                </div>
                <div class="p-4">
                    <img src="https://via.placeholder.com/150x80?text=Brand+4" alt="Brand 4" class="w-full h-auto grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        </div>
    </section> -->

    <!-- Why Us Section -->
    <section id="why-us" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose iPromind Media?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Certified Team</h3>
                    <p class="text-gray-600">Our team consists of certified professionals with extensive industry experience.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Customized Solutions</h3>
                    <p class="text-gray-600">We tailor our services to meet your specific business needs and goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">We pride ourselves on delivering projects on time without compromising quality.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Our dedicated support team is available round the clock to assist you.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Proven Results</h3>
                    <p class="text-gray-600">We have a track record of delivering measurable results for our clients.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Expert Team</h3>
                    <p class="text-gray-600">Our team of experts brings diverse skills and experience to every project.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; 2025 iPromind Media. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html> 

<?php
require_once 'config.php';
session_start();

// Get form data from session if exists
if (isset($_SESSION['form_data'])) {
    $fullName = $_SESSION['form_data']['fullName'];
    $email = $_SESSION['form_data']['email'];
    $phone = $_SESSION['form_data']['phone'];
    $business = $_SESSION['form_data']['business'];
    $errors = $_SESSION['form_data']['errors'];
    $success = $_SESSION['form_data']['success'];
    
    // Clear session data
    unset($_SESSION['form_data']);
}

require_once 'includes/header.php';
?>