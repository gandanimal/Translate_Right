# TRANSLATE RIGHT - Academic Project

## Project Overview
This project is an academic database design and web development exercise for **TRANSLATE RIGHT**, a fictional crowdsourcing platform aimed at identifying, improving, and correcting translation and writing errors found in public places (e.g., restaurant menus, tourist information panels).

## Features
- **Database Design:** Implements an **Entity-Relationship Model (ER Model)** with integrity constraints to ensure data consistency.
- **User Authentication:** Users can register and log in using an email and password.
- **Incident Reporting:** Users can report language-related issues by providing a description, image, timestamp, and location.
- **Certified Users:** Certain users can suggest qualified corrections to reported incidents.
- **Anomaly Classification:** Errors are categorized as either writing or translation issues, with additional details for translation errors.
- **Duplicate Detection:** The system detects and manages duplicate incidents based on location, text, and image analysis.

## Technologies Used
- **SQL** - For database management and query handling.
- **PHP** - Backend logic and server-side functionality.
- **HTML** - Frontend structure and basic user interface.

## How to Run
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/Translate_Right.git
   ```
2. Set up a local server (e.g., XAMPP, WAMP) and configure the database.
3. Import the provided SQL schema into MySQL.
4. Run the PHP scripts through the local server.
5. Access the application via a web browser.

## License
This project is for academic purposes and is not intended for production use.
