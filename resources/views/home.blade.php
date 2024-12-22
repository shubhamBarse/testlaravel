<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">techN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="home" class="hero">
        <div>
            <h1>Your trusted partner for<br> 
                innovative solutions.</h1>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="services py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">we offer comprehensive web development services tailored to meet the unique needs of your business. From responsive websites to complex web applications, our expert developers work with cutting-edge technologies to create user-friendly, secure, and scalable solutions. Whether you need an e-commerce platform, a custom CMS, or a dynamic web application, we are dedicated to bringing your vision to life while ensuring optimal performance across all devices</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5 class="card-title">Mobile Applications</h5>
                        <p class="card-text">Unlock the full potential of your business with a custom mobile application developed by our skilled team of app developers. Whether you're looking for iOS, Android, or cross-platform solutions, we specialize in creating intuitive, high-performance mobile apps that engage users and drive business growth. Our focus is on delivering seamless user experiences, innovative features, and secure applications that help you stay competitive in the mobile-first world.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">In today’s fast-paced digital world, standing out requires more than just a great product—it requires a strategic approach to marketing. Our digital marketing services are designed to enhance your online presence, increase traffic, and convert leads into loyal customers. From SEO and social media marketing to paid campaigns and content creation, we use data-driven strategies to deliver measurable results and ensure your business reaches its full potential.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="about-us py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <p class="text-center">We are a leading IT solutions company committed to delivering innovative and effective solutions for businesses of all sizes. <br>Our team of experts is dedicated to providing the best service and helping our clients succeed in their digital transformation journey.</p>
        </div>
    </section>
    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="card text-center bg-light p-4 shadow-lg border-0">
                <img src="{{ asset('images/clients/shoob.jpg') }}"  alt="Client 1" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <blockquote class="blockquote mb-0">
                        <p>"This company exceeded all expectations!"</p>
                        <footer class="blockquote-footer">John Doe</footer>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card text-center bg-light p-4 shadow-lg border-0">
                    <img src="{{ asset('images/clients/wp13161954.jpg') }}" alt="Client 2" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <blockquote class="blockquote mb-0">
                        <p>"Professional, efficient, and reliable."</p>
                        <footer class="blockquote-footer">Jane Smith</footer>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card text-center bg-light p-4 shadow-lg border-0">
                    <img src="{{ asset('images/clients/shoob.jpg') }}" alt="Client 3" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <blockquote class="blockquote mb-0">
                        <p>"Highly recommend for all business needs."</p>
                        <footer class="blockquote-footer">Alice Brown</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Testimonials Section (Modified to Include Address, Service Info, and Contact Form) -->
<section id="testimonials" class="testimonials py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Address Section -->
            <div class="col-md-4">
                <div class="card p-3">
                <p>Our Details</p>
                <p><span class="icon">&#9993;</span><a href="mailto: info@techbsoftwares.com">info@techbees.com</a></p><br>
                <p><span class="icon">&#9742;</span> +91 95033358750</p><br>
                <p><span class="icon">&#x1F4CD;</span> Hadapsar, Pune, Maharashtra</p>
                </div>
            </div>
            <!-- Service Section -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Our Services</h5>
                    <ul>
                        <li>Custom Software Development</li>
                        <li>Web and Mobile Application</li>
                        <li>Cloud Solutions</li>
                    </ul>
                </div>
            </div>
            <!-- Contact Form Section -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Contact Us</h5>
                    <form action="{{ route('contactus.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="Your Phone Number" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="comment" rows="3" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Footer -->
    <footer id="footer" class="footer bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 techN. All Rights Reserved.</p>
            <p>Contact us: <a href="mailto:info@company.com">info@company.com</a> | <a href="tel:+1234567890">+123-456-7890</a></p>
            <p>Follow us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="https://www.linkedin.com/in/shubham-barse/">LinkedIn</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






