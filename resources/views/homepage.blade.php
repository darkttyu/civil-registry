<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> Home Page </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		nav{
			top: 0;
			width: 100%;
			height: 65px;
			z-index: 9999;
			display: flex;
			position: sticky;
			align-items: center;
			justify-content: left;
			background-color: white;
			box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
		}

		.image-container img {
			width: 50px;
      height: 45px;
      margin-top: 5px;
      margin-left: 20px;
      position: relative;
      border-radius: 50%;
    }

    .logo-name {
      font-size: 15px;
      margin-left: 30px;
      white-space: nowrap;
      font-family: "Poppins", sans-serif;
    }

    .logo-name a {
      margin-left: -16px;
      font-family: "Poppins", sans-serif;
    }

		nav button {
      display: none;
    }

    nav .menu {
      width: 100%;
      margin-top: -5px;
      margin-left: 30px;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    nav .menu ul li {
      padding: -5px;
      font-size: 17px;
      list-style: none;
      font-weight: bold;
      margin-right: 50px;
      display: inline-block;
      position: relative;
      font-family: "Poppins", sans-serif;

    }

    nav .menu ul:nth-child(2) li {
      top: -8px;
      left: 10px;
      color: #757575;
      position: relative;
    }


    nav .menu ul li a{
      color: black;
      text-decoration: none;
    }

    nav .menu .active,
    .a:hover {
     color: #426DDC;
     font-size: 20px;
    }


    nav .menu ul li a:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

		nav form {
			left: 25%;
			top: 65px;
			width: 60%;
			position: relative;
		}

		nav form input {
			top: -45px;
			width: 92%;
			border: none;
			color: black;
			outline: none;
			transition: 0.5s;
			padding: 10px 0px;
			position: relative;
			transform: scaleX(0);
			transform-origin: right;
			border-bottom: solid 2px;
			font-family: "Poppins", sans-serif;
		}

		nav form input::placeholder {
			font-size: 16px;
			font-family: "Poppins", sans-serif;
		}

    nav .search-container {
      position: relative;
      margin-left: auto;
      margin-right: 20px;
      display: flex;
      align-items: center;
    }

    nav .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      width: 180px;
    }

    nav .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    nav .search-container .fa-search,  button.search-button {
      position: absolute;
      border: none;
      background: none;
      right: 12px;
      color: gray;
      font-size: 16px;
      pointer-events: auto;
    }

    nav .search-container .fa-search:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

    nav .user-icon {
      font-size: 28px;
      color: #333;
      margin-right: 23px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    nav .user-icon:hover {
      color: #426DDC;
    }



    /* Main content below the NAV BAR */
		html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-y: auto;
      overflow-x: hidden;
      width: 100%;
      max-width: 100vw;
    }

    section {
      width: 100%;
      max-width: 100vw;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 50px 0 0 0;
      box-sizing: border-box;
      position: relative;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .details {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      text-align: center;
    }
    .details h5 {
      font-size: 65px;
      margin: 0 0 -20px -10px;
      font-weight: bolder;
      letter-spacing: 15px;
      color: white;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 50px black;
      font-family: "Poppins", sans-serif;

    }

    .details h4 {
      font-size: 40px;
      margin: 0 0 10px 0;
      font-weight: bolder;
      letter-spacing: 4px;
      color: white;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 30px black;
      font-family: "Poppins", sans-serif;
    }
    .details p {
      font-size: 16px;
      font-style: italic;
      font-weight: bold;
      background: #f9f5ed;
      border-radius: 10px;
      padding: 8px 0;
      margin: 0 0 18px 0;
      color: black;
      width: 100%;
      text-align: center;
      font-family: "Poppins", sans-serif;
    }
    .details .learn-button {
      margin: 0 auto;
      display: inline-block;
      padding: 10px 28px;
      background: #FFFFFF;
      color: #000;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      font-family: "Poppins", sans-serif;
      transition: background 0.3s, color 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }
    .details .learn-button:hover {
      background: #344CB7;
      color: #fff;
      box-shadow: 0 4px 16px rgba(66, 109, 220, 0.15);
      text-decoration: none;
    }
    .form {
      width: 400px;
      max-width: 90vw;
      margin: 40px auto 0 auto;
      position: relative;
      border-radius: 10px;
      background-color: white;
      padding: 25px;
      box-sizing: border-box;
      /* keep other form styles as before */
    }

    .form h2 {
      width: 100%;
      font-family: "Poppins", sans-serif;
      text-align: center;
      color: black;
      font-size: 30px;
      border-radius: 10px;
      margin: 0 0 20px 0;
      padding: 7px 0;
    }

    .form input{
      width: 300px;
      height: 35px;
      background: transparent;
      border-bottom: 2px solid black;
      border-top: none;
      border-right: none;
      border-left: none;
      font-size: 13px;
      letter-spacing: 1px;
      margin-top: 20px;
      margin-right: 20px;
      font-family: "Poppins", sans-serif;
    }

    .form input:focus{
      outline: none;
    }

    .btnn-1{
      width: 280px;
      height: 60px;
      background: #426DDC;
      border: none;
      margin-top: 25px;
      margin-left: -3px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      color: black;
      transition: 0.4s ease;
    }

    .btnn-2{
      width: 280px;
      height: 60px;
      background: #426DDC;
      border: none;
      margin-top: 10px;
      margin-left: -3px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      color: black;
      transition: 0.4s ease;
    }

    .btnn-1:hover, .btnn-2:hover{
      font-size: 19px;
      background-color: #344CB7;
      font-weight: bold;
    }

    .btnn-1 a, .btnn-2 a{
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .form .link{
      color: black;
      font-weight: bold;
      font-size: 12px;
      padding-top: 10px;
      text-align: center;
      margin-top: -60px;
      margin-left: -5px;
      font-family: "Poppins", sans-serif;
    }

    .form .link a{
	    color: #426DDC;
      text-decoration: none;
      margin-left: 5px;
      margin-bottom: 10px;
    }

    .form .link a:hover {
      text-decoration: underline;
      color: #344CB7;
    }

    .form .select {
      font-size: 14px;
      font-style: italic;
      color: black;
      font-weight: bold;
      margin-top: 13px;
      text-align: center;
      font-family: "Poppins", sans-serif;
    }

    .choice {
      color: black;
      font-family: "Poppins", sans-serif;
      font-size: 15px;
      font-weight: bold;
      margin-top: 10px;
    }

    ::placeholder {
      color: black;
      font-family: "Poppins", sans-serif;
    }



    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {

    html, body {
     overflow-y: hidden;
     width: 100%;
     max-width: 100%;
    }

    nav button {
      display: none;
      width: 30px;
      height: 25px;
      top: 20px;
      right: 20px;
      cursor: pointer;
      border: none;
      outline: none;
      background: #757575;
    }

    nav  button:before,
    nav  button:after {
      position: absolute;
      content: '';
      z-index: 0;
      background-color: white;
      width: 30px;
      height: 5px;
      top: 5px;
      left: 0;
      transition: 0.5s;
    }

    nav button:after {
      top: 15px;
    }

    nav button.expand-icon {
      background: transparent;
    }

    nav button.expand-icon:before,
    nav button.expand-icon:after {
      transform: rotate(45deg);
      background: #757575;
      top: 10px;
    }

    nav button.expand-icon:after {
      transform: rotate(-45deg);
    }

    nav .menu {
      position: absolute;
      margin: auto;
      width: 100%;
      height: 0;
      background: white;
      top: 60px;
      transition: 0.5s;
      overflow: hidden;
    }

    nav .menu ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    nav .menu.expand-mobile {
      height: 700px;
    }

    nav .menu ul li {
      width: 100%;
      display: block;
      font-size: 1rem;
      text-align: left;
      padding: 10px 15px;
      box-sizing: border-box;
    }

    .dropdown_menu ul {
      list-style: none;
      padding: 0;
      margin-left: 250px;
    }

    .dropdown_menu ul li {
      width: 130px;
      padding: 5px;
      white-space: nowrap;
    }

    nav .menu ul:nth-child(2) li {
      top: 0;
      left: 0;
    }

    nav .nav-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      position: relative;
      padding: 0 20px;
      flex-direction: column;
    }

    nav .search-container {
      position: relative;
      margin: 0 auto;
      justify-content: center;
      width: 100%;
      max-width: 500px;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      z-index: 10;
    }

    nav .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      width: 100%;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    nav .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    nav .search-container .fa-search {
      position: absolute;
      right: 35px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
      border: none;
      font-size: 16px;
      pointer-events: auto;
    }

    ::placeholder {
      color: #888;
      font-size: 15px;
      margin-left: 30px;
      font-family: "Poppins", sans-serif;
    }

    nav .search-container i .fa-search:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

    .user-icon {
      display: none;
    }

    nav .menu-toggle {
      display: flex;
      top: auto;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 24px;
      color: #333;
      position: relative;
      margin-left: 20px;
    }

    nav .menu-toggle:hover {
      color: #426DDC;
    }


    .form {
      display: none;
    }

    .details {
     display: none;
    }
    }

    .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0; top: 0;
    width: 100%; height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
    }

    .modal-content {
    font-family: "Poppins", sans-serif;
    font-size: small;
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 500px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .modal-content h3 {
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    }

    .close {
    color: rgb(128, 128, 128);
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    }

    .close:hover {
    color: #426DDC;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 32px 0 24px 0;
    }

    .slide img {
      width: 100%;
      max-width: 700px;
      height: auto;
      border-radius: 16px 16px 0 0;
      margin-bottom: 18px;
    }

    .announcement-text {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 24px 32px;
      background: #fff;
      border-radius: 0 0 16px 16px;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .announcement-text h2,
    .announcement-text p {
      text-align: center;
      width: 100%;
    }

	</style>
</head>

<body>
	<nav>
        <div class="image-container">
            <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> </div>

        <div class="logo-name">
            <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>

		<div class="menu">
			<ul>
				  <li> <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}"> Home </a> </li>
          <li> <a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}"> FAQs </a> </li>
          <li> <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}"> About Us </a> </li>
          <li> <a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> Contact Us </a> </li>
			</ul>
    </div>

  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
</div>


<i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
</div>

		<button class="menu-toggle"> </button>
	</nav>


	<section>
    <div class="details">
      <div>
        <h5 style="letter-spacing: 15px; font-size: 100px;"><center>SCHEDULE</center></h5>
        <div style="display: flex; flex-direction: column; align-items: center;">
          <h4 style="white-space: nowrap; text-align: center;">AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"></i></h4>
          <div style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <p style="display: block; margin: 18px auto 18px auto; background: #fff; color: #222; font-size: 22px; font-style: italic; font-weight: 600; border-radius: 30px; padding: 12px 36px; width: fit-content; white-space: nowrap; text-align: center; box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07); letter-spacing: 0.5px; max-width: 900px;">"Convenience you can count on, appointments you can trust."</p>
            <a href="#learn-more" class="learn-button" style="margin-top: 18px;">Learn more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="form">
      <h2> USER MODE </h2>
      <p class="select" > <i class="fa fa-arrow-down" aria-hidden="true"> </i> Please click or select your user mode: </p>
      <center>
      <button style="color: white;" class="btnn-1" onclick="window.location.href='{{ route('admin.login') }}'">  CITY CIVIL REGISTRY <br/> EMPLOYEE </button>
      <p class="choice"> or </p>
      <button style="color: white;" class="btnn-2" onclick="window.location.href='{{ url('login') }}'">  MANDALUYONG CITY <br/> RESIDENCE </button>
      </center>
      <br/> <br/> <br/> <br/>
      <p class="link"> Upon acessing this service, you consent to adhere to the City Civil Registry of Mandaluyong's
      <a href="#" onclick="openModal()"> <br/> Terms of Use and Privacy Policy </a> </p>
    </div>
  </section>

   <div id="termsModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2><center>Terms of Use and Privacy Policy</center></h2><br/>
      <p>Welcome to City Civil Registry of Mandaluyong Portal. By using this website, you agree to the following terms:<br/><br/>
      <h3>1. Use of Services</h3>
      This website allows you to request and verify civil registry records. You agree to use the site legally and only access records you are authorized to view.
      <h3>2. Privacy & Data Collection</h3>
      We collect personal information (such as name, contact details, and ID numbers) to process your requests. Your data is used only for providing services, verifying identity, and complying with legal requirements.
      We do not sell your information. Data may be shared with authorized agencies or partners solely to process your request or as required by law.
      <h3>3. Cookies</h3>
      We may use cookies to improve website performance and user experience. You can manage cookies through your browser settings.
      <h3>4. Security</h3>
      We are committed to protecting your personal information. This website uses secure technologies, including encryption and security protocols, to safeguard your data from unauthorized access, loss, or misuse. We continuously monitor and maintain our systems to ensure your information remains protected.
      <h3>5. Limitations</h3>
      While we aim to provide accurate and uninterrupted service, occasional errors or technical issues may occur. We are committed to correcting any errors and continuously improving the website to ensure a reliable and secure user experience. Please contact us if you encounter any issues.
      <h3>6. Changes</h3>
      We may update these terms and our privacy policy. Continued use of the website means you accept any changes.<br/><br/>

      <h3><center>Contact Us:</center></h3>
      For questions or concerns, contact Civil Registry of Mandaluyong at city.registrar@mandaluyong.gov.ph or (02) 8533-28-21.</p>
    </div>
  </div>

<script type="text/javascript">
            function performSearch() {
                const routes = {
                    home: "{{ route('home') }}",
                    faqs: "{{ route('faqs') }}",
                    about: "{{ route('about') }}",
                    contact: "{{ route('contact') }}"
                };

            const input = document.getElementById("searchInput").value.trim().toLowerCase();

            if (input === "") {
            alert("Please enter a search term.");
            } else {
                if (["home page", "homepage", "home"].includes(input)) {
                    window.location.href = routes.home;
            } else if (["faqs", "facts", "help", "faq", "question"].includes(input)) {
                    window.location.href = routes.faqs;
            } else if (["about", "about civil"].includes(input)) {
                    window.location.href = routes.about;
            } else if (["contact", "number", "email"].includes(input)) {
                    window.location.href = routes.contact;
            } else {
                  alert("No results found.");
                  inputField.value = "";
            }
            } }
            document.getElementById("searchInput").addEventListener("keypress", function(e) {
                 if (e.key === "Enter") {
            performSearch();
            }
            });

            const button = document.querySelector('.menu-toggle');
            const menu = document.querySelector('.menu');
                 if (button && menu) {
            button.onclick = () => {
                menu.classList.toggle('expand-mobile');
                button.classList.toggle('expand-icon');
            };
            }

            function toggleDropdown() {
            const dropdown = document.getElementById("accountDropdown");
            alert("Please choose a user mode that best describes you.");
            dropdown.classList.toggle("show");
            }

            function openModal() {
            document.getElementById("termsModal").style.display = "block";
            }

            function closeModal() {
            document.getElementById("termsModal").style.display = "none";
            }

            window.onclick = function(event) {
            const modal = document.getElementById("termsModal");
            if (event.target == modal) {
            modal.style.display = "none";
            }
            }
</script>

</body>
</html>
