## PwChO_lab7_Compose
### Yevhenii Tsyliurnyk 
>Projekt składa się z:
>- trzech plików Dockerfile 
>- jednego Docker-compose<br> 
>- dodatkowych plików niezbędnych do poprawnej pracy każdej usługi cząstkowej.<br> 

Strona dostępna pod adresem: **localhost:6080** <br>

### Uruchomienie 
Folder Compose umiescic w ./home/<br> 
Dla uruchomienia usługi :
```
cd Compose
docker-compose build --no-cache
docker-compose up
```
Dla wyłączenia usługi oraz usunięcia wszystkich kontenerów, sieci i obrazów można użyć polecenia:
```
docker-compose down --remove-orphans --volumes --rmi all
```
#### PHP
Kontekst strony umieszczony został w katalogu /srv/my_php_page.<br>
Kontener podłączony do sieci backend.<br>
Aplikacja korzysta z aliasu dla kontenera z baza danych czyli musql_db.<br>
#### MySQL
Hasło dla uzytkownika root jest ustawione w pliku Docker-compose.MySQL, kontener jest podłaczony do sieci backend.<br>
Dane są przechowywane w podłączonym volumenie, aby były dostępne po wyłączeniu kontenera.<br>
#### httpd
Plik config został zmieniony dla zapewnienia możliwości użycia dyrektyw proxymatch oraz vhost <br>
Dyrektywa ProxyPassMatch zapewnia prawidłowe proxowanie.<br>
Kontener jest podłączony do do sieci frontend i backend, laczy sie z proxy PHP za pomoca aliasu<br>
Dodatkowe pliki konfiguracyjne: httpd.conf oraz httpd-vhosts.conf <br>

### Wyniki
Aby sprawdzić poprawność działania naszych kontenerów prechodzimy pod adres **localhost:6080** <br>
![wynik](/wynik.png)

### Reprezentacja   graficzna
Aby wygenerować reprezentację graficzną pliku docker-compose skorzystamy z narzędzia docker-compose-viz <br>
Polecenie:
```
docker run --rm -it --name dcv -v /home/student/Compose:/input pmsipilot/docker-compose-viz render -m image --force docker-compose.yml --output-file=topology.png 

```
![topology](/topology.png)
