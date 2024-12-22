<!-- Decorative Divider -->
<div class="form-divider"></div>

<!-- Sign-Up Form Section -->
<div class="form-section">
    <div class="icon-container">
        <i class="bi bi-person-plus-fill"></i> <!-- Bootstrap Icon -->
    </div>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
