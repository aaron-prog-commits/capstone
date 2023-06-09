<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Offline Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/753b6a73b2.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h2>Angeles City Science High School - Senior High School</h2>
			<h3>Doña Aurora St., Lourdes Sur East, Angeles City</h3>v
    <div class="form-box">
        <h1 id="title">Sign in</h1>
        <form>
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <input type="name" placeholder="Name">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>

                <div class="input-field" id="confirmpass">
                    <i class="fa-solid fa-lock"></i>
                    <input type="confirm password" placeholder="Confirm password">
                </div>

                <p>Lost password <a href="#">Click Here!</a></p>
            </div>
            <div class="btn-field">
                <button type="button" id="signupBtn">Sign up</button>
                <button type="button" id="signinBtn" class="disable">Sign in</button>
            </div>
        </form>
    </div>
  
</div>

<script>
    
let signinBtn = document.getElementById("signinBtn");
let signupBtn = document.getElementById("signupBtn");
let nameField = document.getElementById("nameField");
let confirmpass = document.getElementById("confirmpass");
let title = document.getElementById("title");

signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    confirmpass.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    signupBtn.classList.add("disable")
    signinBtn.classList.remove("disable")

}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    confirmpass.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable")
    signinBtn.classList.add("disable")

}



</script>

</body>
</html>