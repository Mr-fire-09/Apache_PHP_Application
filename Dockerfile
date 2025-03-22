# Use the official PHP image with Apache
FROM php:apache

# Copy application files to the web server directory
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Set file permissions (optional