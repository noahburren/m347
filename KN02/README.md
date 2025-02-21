# A) Dockerfile I
## 1. Korrigiertes Dockerfile erstellen  

Erstelle eine Datei namens `Dockerfile` (ohne Dateiendung) mit folgendem Inhalt:  

```dockerfile
# Basis-Image von Nginx verwenden  
FROM nginx

# Arbeitsverzeichnis auf den Standard-Root für HTML-Dateien setzen  

# Kopiert die HTML-Datei in das Arbeitsverzeichnis  
COPY helloworld.html /usr/share/nginx/html/helloworld.html

# Öffnet Port 80 für eingehende Verbindungen  
EXPOSE 80

```
### Docker-Image bauen
``docker build -t noahburren07/m347:kn02a . ``
→ Erstellt ein neues Docker-Image mit dem Tag kn02a

### Image in eigenes Repository hochladen
``docker push noahburren07/m347:kn02a ``
→ Lädt das Image in das eigene Docker Hub Repository hoch

### Container mit dem neuen Image starten
``docker run -d -p 8082:80 --name kn02a-container noahburren07/m347:kn02a ``
→ Startet einen Container mit dem neuen Image

## Image KN02
![Image](./image.png)

## Hello.hml
![Hello.html](./hello.png)

---

# B) Dockerfile II

# **Docker-Setup für Datenbank und Webserver**  

## **1. Dockerfile für den Datenbank-Container (MariaDB)**  
Erstelle eine Datei `Dockerfile` im Ordner `kn02-db`:  

```dockerfile
# Basis-Image für MariaDB  
FROM mariadb:latest  

# Umgebungsvariablen für DB-Zugang setzen  
ENV MYSQL_ROOT_PASSWORD=root  
ENV MYSQL_DATABASE=mydb  

# Port 3306 für externe Zugriffe freigeben  
EXPOSE 3306  

