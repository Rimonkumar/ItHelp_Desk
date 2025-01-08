<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <div class="signup-container">
    <a href="index.php" class="close-btn" title="Close">&times;</a>
        <h2>SIGNUP</h2>
        <form action="process.php" method="POST" onsubmit="return validateRegistration()">
            <div class="form-row">
                <div class="input-field">
                    <input type="text" id="name" name="name" placeholder="Enter your Full name"  required>
                </div>
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Enter your email"required>
                    <!-- Error message section (hidden by default) -->
                   <div id="email-error" style="color: red; display: none;"></div>
                </div>
            </div>

            <div class="form-row">

            <div class="input-field">
                <input type="password" id="password" name="pass" placeholder="Create password" required>
        
            </div>
            <div class="input-field">
                <input type="password" id="cpassword" name="cpass" placeholder="Confirm password" required>
            
            </div>
            </div>

            <div class="form-row">
            <div class="input-field">
                <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
            
            </div>

            <div class="input-field">
                <input type="date" id="birth_date" name="birth_date" placeholder="Date Of Birth" required>
            </div>
            </div>

            <div class="input-field">
                <textarea id="address" name="address" rows="2" placeholder="Address" required></textarea>
            </div>

            <div class="gender-input">
                <label>Gender</label><br>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>

            <div class="custom-dropdown">
                <select name="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="user">User</option>
                    <option value="it_staff">IT Staff</option>
                </select>
            </div>

            <div class="policy-text">
                <input type="checkbox" id="policy" required>
                <label for="policy">
                    I agree to the <a href="#" class="option">Terms & Conditions</a>
                </label>
            </div>
            <button type="submit">Sign Up</button>
        </form>

        <div class="bottom-link">
            Already have an account? 
            <a href="login.php" id="login-link">Login</a>
        </div>
    </div>



    <script src="signup.js"></script>
</body>
</html>


