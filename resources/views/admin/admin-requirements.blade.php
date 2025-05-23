<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="/storage/">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title> Requirements Page - Admin View </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins';
    }

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
        position: fixed;
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

        nav button{
        display: none;
        }

        nav .menu{
        width: 60%;
        margin-top: -5px;
        text-align: center;
        margin-left: 30px;
        }

        nav .menu ul li{
        padding: -5px;
        font-size: 17px;
        list-style: none;
        font-weight: bold;
        margin-right: 30px; 
        display: inline-block;
        position: relative;
        font-family: "Poppins", sans-serif;

        }

        nav .menu ul:nth-child(2) li{
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
        margin-left: -5px;
        }


        nav .menu ul li a:hover{
        color: #426DDC;
        transition: 0.3s ease; 
        }

        nav form{
        left: 25%;
        top: 65px;
        width: 60%;
        position: relative;
        }

        nav form input{
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

        .dropdown_menuuu {
        display: none;
        position: absolute;
        left: -55%;
        top: 100%;
        min-height: 90px;
        background-color: white;
        z-index: 1000;
        min-width: 130px;
        }

        .menu ul li:hover .dropdown_menuuu,
        .dropdown_menuuu:hover {
        display: block;
        border-radius: 5px;
        font-size: 18px;
        }

        .dropdown_menuuu ul {
        list-style: none;
        padding: 0;
        margin-top: 15px;
        margin-left: 25px; 
        margin-bottom: 9px;
        }

        .dropdown_menuuu ul li {
        width: 130px;
        padding: 7px;
        white-space: nowrap;
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

        #accountDropdown {
        display: none; 
        position: absolute;
        background-color: #fff;
        border-radius: 6px;
        right: 10px;
        top: 55px;
        min-width: 160px;
        z-index: 1000;
        padding: 8px 0;
        font-weight: bold;
        }

        #accountDropdown.show {
        display: block;
        }

        #accountDropdown a {
        display: block;
        padding: 10px 16px;
        color: #333;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        font-family: "Poppins", sans-serif;
        }

        #accountDropdown a:hover {
        color: #426DDC;
        transition: 0.3s ease; 
        }

        html, body {
        overflow-x: hidden;
        /* height: 100%; */
        min-height: 100vh;
        overflow-y: auto;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
        }

        /* Zoom-in screen orientation layout */
        @media(max-width: 1000px) {
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
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

        .dropdown_menuu ul {
        list-style: none;
        padding: 0;
        margin-left: 250px;
        }

        .dropdown_menuuu ul li {
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
    }

         footer {
      background: #fff;
      padding-top: 20px;
      padding-bottom: 5px;
    }

    .container {
      margin-left: 20px;
      margin-right: 20px;
      height: 110px;
      width: 1140px;
      display: flex;
      justify-content: space-between;
    }

    .footer-content {
      margin-left: 20px;
      margin-right: 20px;
      width: 33.3%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start; 
      margin: 0 10px;
    }

    footer iframe {
      margin-left: 20px;
      width: 100%;
      height: 100%;
      border: 0;
      margin: 0;
    }

    .map-container {
      flex-grow: 1; 
      height: 100%; 
    }

    h3 {
      margin-left: 20px;
      margin-right: 20px;
      font-weight: 100;
      font-size: 16px;
      margin-bottom: 5px;
      text-align: center;
      color: #3247df;
    }

    .footer-content p {
      width: 190px;
      margin-left: 15px;
      padding: 2px;
    }

    .social-icons {
      text-align: center;
      padding: 0;
    }

    .social-icons li {
      display: inline-block;
      text-align: center;
      padding: 5px;
    }

    .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
    }

    a {
      color: #333;
      text-decoration: none;
    }

    a:hover {
      color: #3247df;
    }

    .social-icons i:hover {
      color: #3247df;
    }

    .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 0px 0;
      margin-top: 50px;
    }

    .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 16px;
      padding: 8px;
    }

     [contenteditable="true"]:focus {
      border-radius: 10px;
      outline: 3px solid black;
      box-shadow: 0 0 20px white;
      cursor: text;
    }

    [contenteditable="true"]:hover {
     outline: 3px solid white;
     box-shadow: 0 0 20px black;
     border-radius: 10px;
     cursor: text;
    }

    .editable-wrapper {
      display: flex;
      align-items: center;
      position: relative;
      justify-content: center;
      gap: 8px; 
    }

    .edit-icon {
      pointer-events: none; 
      user-select: none;
      font-size: 17px;
      color: black;
    }

  </style>
</head>

<body>
        <nav>
            <div class="image-container">
                <img src="/storage/assets/civil_registry_logo.png"> </div>
    
            <div class="logo-name">
                <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>
    
            <div class="menu">
                <ul>
                    <li> <a href="{{ route('admin.homepage') }}"> Home </a> </li>
    
            <li> <a class="active" href="#"> Services <i class="fas fa-caret-down"> </i> </a> 
    
            <div class="dropdown_menuuu">
              <ul>
            <li> <a href="{{ route('admin.appointment') }}"> Appointment </a> </li>
            <li> <a class="active" href="{{ route('admin.requirements') }}"> Requirements </a> </li>
               </ul>
            </div>
            </li>
    
                    <li> <a href="{{ route('admin.faqs') }}"> FAQs </a> </li>
                    <li> <a href="{{ route('admin.about') }}"> About Us </a> </li>
                    <li> <a href="{{ route('admin.contact') }}"> Contact Us </a> </li>
                </ul>
        </div>
    
  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
  </div>
        
  <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" onclick="toggleDropdown()" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-right: 23px;">
  <div id="accountDropdown">
  <div style="padding: 16px 0 8px 0; text-align: center;">
    <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
    <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-left:60px;">
    </div>
    <div style="font-weight: bold; font-size: 18px;">Admin</div>
    <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
  </div>
  <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
</div>
      
        <button class="menu-toggle"> </button>
      </nav>

<!-- REQUIREMENTS MANAGEMENT SECTION -->
<div class="w-full flex justify-center pt-24 px-4">
  <div class="w-full max-w-5xl bg-blue-800 text-white text-3xl font-bold rounded-lg shadow-md py-4 text-center mb-8 tracking-wide">REQUIREMENTS</div>
</div>
<div class="flex gap-6 justify-center mt-0 px-4 pb-16">
    <!-- Add Requirement Container -->
    <div class="bg-white p-6 rounded-lg shadow-md w-[45%] max-w-lg min-h-[600px]">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">Add Requirement</h2>
        <form action="{{ route('admin.requirements.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" name="title" class="w-full border rounded px-3 py-2 text-gray-900" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Description (you can use bullets or paragraphs)</label>
                <textarea name="description" rows="6" class="w-full border rounded px-3 py-2 text-gray-900" placeholder="• Bullet 1&#10;• Bullet 2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Add Requirement</button>
        </form>
    </div>

    <!-- Existing Requirements Container -->
    <div class="bg-white p-6 rounded-lg shadow-md w-[45%] max-w-lg min-h-[600px]">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-blue-800">Existing Requirements</h2>
        </div>

        <div id="requirements-list" class="max-h-[600px] overflow-y-auto">
            @foreach($requirements as $requirement)
                <div class="requirement-item border-b py-4" data-id="{{ $requirement->id }}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $requirement->title }}</h3>
                        <div class="requirement-actions flex items-center gap-4">
                            <!-- Edit Button: Opens Modal -->
                            <button class="fas fa-edit text-blue-600 hover:text-blue-800 cursor-pointer bg-transparent border-none" type="button" onclick="openEditModal({{ $requirement->id }}, '{{ addslashes($requirement->title) }}', `{{ addslashes($requirement->description) }}`)"></button>
                            <!-- Delete Form -->
                            <form action="{{ route('admin.requirements.destroy', $requirement->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this requirement?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="fas fa-trash text-red-600 hover:text-red-800 cursor-pointer bg-transparent border-none"></button>
                            </form>
                            <button class="dropdown-btn bg-blue-600 text-white px-3 py-1 rounded hover:bg-bludsadsae-700 flex items-center gap-2" onclick="toggleDescription({{ $requirement->id }})">
                                <span>View</span>
                                <i class="fas fa-chevron-down transition-transform"></i>
                            </button>
                        </div>
                    </div>
                    <div class="requirement-description mt-4 hidden">
                        <div class="text-gray-700 whitespace-pre-line">{!! nl2br(e($requirement->description)) !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Edit Modal (hidden by default) -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-8 rounded-lg max-w-lg w-full">
        <h2 class="text-xl font-bold mb-4">Edit Requirement</h2>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" id="editTitle" name="title" class="w-full border rounded px-3 py-2 text-gray-900" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea id="editDescription" name="description" rows="6" class="w-full border rounded px-3 py-2 text-gray-900" required></textarea>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeEditModal()" class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</div>



      <footer>
    <div class="container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p><a href="mailto:city.registrar@mandaluyong.gov.ph">Email: city.registrar@mandaluyong.gov.ph</a></p>
            <p>Phone: 8533-28-21</p>
            <p>Address: <a href="https://maps.app.goo.gl/BqivjAUx2r4DJitu5" target="_blank">Maysilo, Mandaluyong</a></p>
        </div>
        <div class="footer-content">
            <h3>Our Location</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.374156967718!2d121.0337266!3d14.5777433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84b4d7d8847%3A0x3cc947be6455c07a!2sMandaluyong%20City%20Hall!5e0!3m2!1sen!2sph!4v1745828287728!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/p/Mandaluyong-City-Civil-Registry-100064760288454/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="mailto:city.registrar@mandaluyong.gov.ph"><i class="fas fa-envelope"></i></a></li>
                <li><a href="https://mandaluyong.gov.ph/government/departments/city-civil-registry-department/"><i class="fas fa-paperclip"></i></a></li>
                <li><a href="https://x.com/MandaluyongPIO"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2025 Civil Registry Department. All Rights Reserved.</p>
    </div>
</footer>
  

  <script>
function toggleDropdown() {
    const dropdown = document.getElementById("accountDropdown");
    dropdown.classList.toggle("show");
}

window.addEventListener("click", function(event) {
    const userIcon = document.querySelector(".user-icon");
    const dropdown = document.getElementById("accountDropdown");

    if (!userIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.remove("show");
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


function performSearch() {
    const inputField = document.getElementById("searchInput");
    const input = inputField.value.trim().toLowerCase();

    if (input === "") {
        alert("Please enter a search term.");
    } else {
        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "{{ route('admin.homepage') }}";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "{{ route('admin.faqs') }}";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "{{ route('admin.about') }}";
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "{{ route('admin.appointment') }}";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "{{ route('admin.requirements') }}";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "{{ route('admin.contact') }}";
        } else {
            alert("No results found.");
            inputField.value = "";
        }
    }
}

document.getElementById("searchInput").addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
        performSearch();
    }
});

function showChecklist(type) {
    const checklist = checklistData[type];
    const checklistEl = document.getElementById("checklist");
    const title = document.getElementById("checklistTitle");


    title.textContent = `REQUIREMENTS FOR ${type.toUpperCase()} CERTIFICATE`;


    checklistEl.innerHTML = "";
    checklist.forEach((item, index) => {
        const li = document.createElement("li");
        li.textContent = item;
        li.contentEditable = true; 
        li.style.outline = "none";
        li.addEventListener("blur", () => {
            checklistData[type][index] = li.textContent.trim();
            console.log(`Updated ${type} [${index}] ->`, checklistData[type][index]);
        });
        checklistEl.appendChild(li);
    });

    title.scrollIntoView({ behavior: "smooth" });
}

function openEditModal(id, title, description) {
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editTitle').value = title;
    document.getElementById('editDescription').value = description;
    // Set the form action dynamically
    document.getElementById('editForm').action = `/admin/requirements/${id}`;
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}

function toggleDescription(id) {
    const item = document.querySelector(`.requirement-item[data-id='${id}'] .requirement-description`);
    if (item) {
        item.classList.toggle('hidden');
        // Optionally toggle chevron rotation
        const chevron = document.querySelector(`.requirement-item[data-id='${id}'] .fa-chevron-down`);
        if (chevron) {
            chevron.classList.toggle('rotate-180');
        }
    }
}
</script>

</body>
</html>