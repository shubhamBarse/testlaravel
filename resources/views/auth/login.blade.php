<!-- Custom Modal Styling -->
<style>
    /* Small Modal Styling */
</style>

<!-- Login Form Section -->
<div class="form-section">
    <div class="icon-container">
        @auth
            <!-- If the user is authenticated, display their name -->
            <span>{{ auth()->user()->name }}</span>
        @else
            <!-- If the user is not authenticated, display the icon -->
            <i class="bi bi-person-circle"></i> <!-- Bootstrap Icon -->
        @endauth
    </div>
    
    @guest
        <!-- Show login form if the user is not logged in -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    @endguest
</div>


