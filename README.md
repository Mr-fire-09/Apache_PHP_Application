# 🚀 Dockerized PHP Application

Welcome to the **Dockerized PHP Application**! This project is a simple PHP web app running inside a Docker container with Apache.

---

## 📌 Features
✅ Lightweight and Fast ⚡  
✅ Runs in a Secure Docker Container 🐳  
✅ Easy to Set Up and Deploy 🚀  
✅ Fully Configurable 🛠️  

---

## 📂 Project Structure
```
📦 Apache_PHP_Application
├── 📜 Dockerfile         # Defines the container
├── 📜 docker-compose.yml # Automates container management
├── 📂 app                # PHP application folder
│   ├── index.php        # Main PHP file
│   ├── style.css        # CSS for styling
│   ├── script.js        # JS for interactions (if needed)
└── 📜 README.md         # Documentation
```

---

## 🛠️ Setup & Installation

### 🔹 Prerequisites
- Install **Docker** & **Docker Compose**
- Clone this repository:
  ```sh
  git clone https://github.com/your-repo/apache-php-docker.git
  cd apache-php-docker
  ```

### 🔹 Run the Application
1️⃣ **Build and Start** the container:
   ```sh
   docker-compose up --build -d
   ```
2️⃣ Open your browser and visit:
   ```
   http://localhost:8000
   ```

### 🔹 Stop the Application
To stop the running containers:
```sh
docker-compose down
```

### 🔹 Restart the Application
```sh
docker-compose restart
```

---

## 🛠️ Configuration
Modify the **`docker-compose.yml`** file to change the port mapping or volume settings:
```yaml
version: '3.7'
services:
  web:
    build: app
    ports:
      - "8000:80"
    volumes:
      - ./app:/var/www/html
```

---

## 📜 Dockerfile Explained
```dockerfile
# Use official PHP image with Apache
FROM php:apache

# Copy local files to container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
```
🔹 **`php:apache`** → Official PHP with Apache pre-installed.  
🔹 **`COPY . /var/www/html/`** → Copies the app files to the container.  
🔹 **`EXPOSE 80`** → Opens port 80 inside the container.  

---

## 🎨 Aesthetic PHP Page Example
```php
<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Hello, Docker!</title>";
echo "<style>body {text-align: center; background: #282c34; color: #61dafb; font-family: Arial; padding: 20px;} h1 { font-size: 3rem;}</style>";
echo "</head><body>";
echo "<h1>🚀 Hello, Docker! 🎉</h1>";
echo "</body></html>";
?>
```
---

## 📜 Useful Commands
| Action  | Command |
|---------|---------|
| Build & Run  | `docker-compose up --build -d`  |
| Stop Services  | `docker-compose down`  |
| Restart Services  | `docker-compose restart`  |
| View Running Containers  | `docker ps`  |
| Remove All Containers  | `docker rm -f $(docker ps -aq)`  |

---

## 🏆 Contributing
Feel free to fork, modify, and send a pull request. Contributions are always welcome! 💙

---

## 📜 License
This project is **MIT Licensed**. Feel free to use and modify it!

---

🚀 **Happy Coding!** 🎉

