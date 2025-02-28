# Basis-Image mit Apache
FROM php:8.0-apache

# Installiere die mysqli-Erweiterung für die Datenbankverbindung
RUN docker-php-ext-install mysqli

# Kopiere die Webseiten-Dateien in das Apache-Verzeichnis
COPY info.php /var/www/html/
COPY db.php /var/www/html/

# Port 80 für den Webserver freigeben
EXPOSE 80
