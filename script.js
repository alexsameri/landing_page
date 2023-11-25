function isStrongPassword(password) {
    // Define the requirements for a strong password
    const minLength = 8;   // Minimum length of 8 characters
    const hasUpperCase = /[A-Z]/.test(password);   // At least one uppercase letter
    const hasLowerCase = /[a-z]/.test(password);   // At least one lowercase letter
    const hasNumber = /\d/.test(password);          // At least one digit
    const hasSpecialChar = /[!@#$%^&*]/.test(password); // At least one special character
  
    // Check if the password meets all the requirements
    if (
      password.length >= minLength &&
      hasUpperCase &&
      hasLowerCase &&
      hasNumber &&
      hasSpecialChar
    ) {
      return true;  // Password is strong
    } else {
      return false; // Password is not strong
    }
  }
  
  function checkPasswordStrength() {
    const passwordInput = document.getElementById('passwordInput');
    const passwordStrength = document.getElementById('passwordStrength');
  
    const password = passwordInput.value;
    const isStrong = isStrongPassword(password);
  
    if (isStrong) {
      passwordStrength.textContent = 'Password is strong.';
      passwordStrength.style.color = 'green';
    } else {
      passwordStrength.textContent = 'Password is not strong.';
      passwordStrength.style.color = 'red';
    }
  }
  
  const passwordInput = document.getElementById('passwordInput');
  const confirmPasswordInput = document.getElementById('confirmPasswordInput');

  passwordInput.addEventListener('input', checkPasswordStrength);
  confirmPasswordInput.addEventListener('input', checkPasswordStrength);