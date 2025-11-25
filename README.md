<h1 align="center" style="font-size: 3rem; font-weight: 800; margin-bottom: 0;">
  GAMERZ ZONE
</h1>

<h3 align="center" style="font-size: 1.4rem; font-weight: 400; color: #555;">
  Gaming Price Finder & Catalogue
</h3>

<br>
<p align="center">
  <a href="https://github.com/Quastro0/GAMERZ-ZONE/stargazers">
    <img src="https://img.shields.io/github/stars/Quastro0/GAMERZ-ZONE?style=social" alt="GitHub stars" />
  </a>
  <a href="https://github.com/Quastro0/GAMERZ-ZONE/network/members">
    <img src="https://img.shields.io/github/forks/Quastro0/GAMERZ-ZONE?style=social" alt="GitHub forks" />
  </a>
  <a href="https://github.com/Quastro0?tab=followers">
    <img src="https://img.shields.io/github/followers/Quastro0?style=social" alt="GitHub followers" />
  </a>
</p>

<p align="center">
  <strong>Project Report:</strong>
  <a href="GAMERZ_ZONE Website By Shashank.pdf">Download PDF (report & screenshots)</a>
</p>

<p align="center">

  <!-- HTML -->
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />

  <!-- CSS -->
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />

  <!-- JavaScript -->
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />

  <!-- PHP -->
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />

  <!-- MySQL -->
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />

  <!-- Apache -->
  <img src="https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white" alt="Apache" />

  <!-- XAMPP (Only if you want) -->
  <img src="https://img.shields.io/badge/XAMPP-F37623?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP" />

</p>


---

## 📌 One-Line Summary
**GAMERZ ZONE** — a frontend website built for gamers to discover games, view categorized collections, and find the cheapest purchase links. Includes a contact form backed by PHP + MySQL.

---

## 📋 Table of Contents
- [Features](#-features)  
- [Tech Stack](#-tech-stack)  
- [Project Structure](#-project-structure)  
- [Screenshots & Preview](#-screenshots--preview)  
- [How to Run Locally](#-how-to-run-locally)  
- [Deployment & Hosting Notes](#-deployment--hosting-notes)  
- [Future Enhancements](#-future-enhancements)  
- [Authors](#-authors)  
- [License](#-license)

---

## ✨ Features
- Modern, responsive homepage (hero banner + categories)  
- Categorized game galleries (Action, Racing, Roleplay) with “View More” pages  
- Join community (Discord link section)  
- Testimonials / “What people say about us” section  
- Functional **Contact Us** form (PHP backend) that stores submissions in a MySQL table  
- Lightweight assets for fast load times

---

## 🧰 Tech Stack
- **HTML5** — Markup  
- **CSS3** — Styling & layout (external `css/` folder)  
- **JavaScript** — Interactivity (`script.js`)  
- **PHP** — Form handling / DB connection (`connect 1.php`)  
- **MySQL** — Database for contact form entries

---

## 📂 Project Structure (top-level)
GAMERZ_ZONE/ <br>
├── index.html # Redirects to 2nd.html (or rename 2nd.html -> index.html) <br>
├── 2nd.html # Homepage (main landing) <br>
├── 3rd.html # About Us <br>
├── 4th.html # Privacy & Policy <br>
├── 5th.html # Contact Us (form) <br>
├── action_games.html # Category page - Action <br>
├── racing_games.html # Category page - Racing <br>
├── roleplay_games.html # Category page - Roleplay <br>
├── connect 1.php # PHP backend (DB connection) <br>
├── css/ # Stylesheets <br>
├── Images/ # Image assets (banners, game thumbnails) <br>
├── Fonts/ # Custom fonts <br>
└── database.sql # (optional) DB dump for quick import <br>

---

## 📸 Screenshots & Preview

<p align="center">
  <img src="/mnt/data/WEBSITE_unzipped/WEBSITE/Images/naraka.jpeg" alt="Homepage banner" width="240" />
  <img src="/mnt/data/WEBSITE_unzipped/WEBSITE/Images/witcher.jpg" alt="Game tiles" width="240" />
  <img src="/mnt/data/WEBSITE_unzipped/WEBSITE/Images/feedback.jpg" alt="Testimonials" width="240" />
</p>

> More screenshots & design references are included inside the project ZIP and the project report PDF linked above.

---

## ⚙️ How to Run Locally (XAMPP / MAMP / LAMP)
1. Install [XAMPP](https://www.apachefriends.org/index.html) or similar (Apache + PHP + MySQL).  
2. Copy the project folder to your web server folder, e.g.:
   - Windows (XAMPP): `C:\xampp\htdocs\GAMERZ_ZONE\`
   - macOS (MAMP): `/Applications/MAMP/htdocs/GAMERZ_ZONE/`
3. (Recommended) Rename `2nd.html` → `index.html` so the site root opens correctly.  
   Or keep `index.html` as redirect to `2nd.html`.
4. Start **Apache** and **MySQL** from your control panel.  
5. Create a database and import `database.sql` (if provided) via **phpMyAdmin**.  
6. Edit `connect 1.php` or add a `config.php` with your DB credentials **locally** (do not commit `config.php`).  
7. Open the site in your browser:
http://localhost/GAMERZ_ZONE/


---

## 🔐 Security & Best Practices
- **Do not commit** real DB credentials. Use `config.example.php` + `.gitignore` to keep secrets out of Git.  
- Sanitize & validate all form inputs on the server side (use prepared statements).  
- Consider rate-limiting or CAPTCHA for the contact form to reduce spam.

---

## 🚀 Deployment & Hosting Notes
- **GitHub Pages** — great for static hosting (HTML/CSS/JS). *It will not run PHP or MySQL.*  
Use GitHub Pages if you want a public static preview (contact form will not function).  
- **Shared PHP hosting / VPS / Cloud** — required if you want the contact form and DB to work live (e.g., 000webhost, InfinityFree, shared cPanel hosts, or a small VPS).  
- For demo-only: host static pages on GitHub Pages and show a note that the contact form is disabled in the static demo.

---

## 🔧 Suggested `.gitignore`
OS

.DS_Store
Thumbs.db

Local config & credentials

config.php
.env

Temporary logs

*.log


---

## 📈 Future Enhancements
- Integrate price-comparison API for live cheapest-link data  
- Add search & filters (by platform, price, rating)  
- Admin dashboard for managing game lists & testimonials  
- Account system & user favorites  
- Improve accessibility & SEO

---

## 👨‍💻 Authors
**Shashank Kuveskar** — https://github.com/Quastro0 <br>
**Tuhin Kumar** —   <br>
---

## 📄 License
This project is provided for educational purposes. Add an `LICENSE` (MIT / Apache 2.0) if you want to allow reuse.


