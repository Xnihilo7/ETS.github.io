

  var defaultPassword = "pswrd";

 
  function verifyPassword() {
    var enteredPassword = document.getElementById("password").value;
    
    if (enteredPassword === defaultPassword) {
      window.location.href = "./includes/timer.php";
    } else {
      alert("Incorrect password. Please try again.");
    }
  }
  var usernameInput = document.getElementById('username');

  usernameInput.addEventListener('input', function() {
    var usernameValue = usernameInput.value;
  
    console.log('Username: ' + usernameValue);
  });

  function scrollToTarget(event) {
    event.preventDefault();
    const targetSection = document.getElementById('target-section');
    targetSection.scrollIntoView({ behavior: 'smooth' });
  }

  function scrollToTarget2(event) {
    event.preventDefault();
    const targetSection = document.getElementById('target-section-2');
    targetSection.scrollIntoView({ behavior: 'smooth' });
  }

  window.addEventListener('scroll', function() {
    var backToTopBtn = document.querySelector('.back-to-top');
    if (window.scrollY > 300) {
      backToTopBtn.style.display = 'block';
    } else {
      backToTopBtn.style.display = 'none';
    }
  });

  document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

