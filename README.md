## PwChO_lab7_Compose
### Yevhenii Tsyliurnyk 
>Projekt składa się z:
>- trzech plików Dockerfili 
>- jednego Docker-compose<br> 
>- dodatkowych plików niezbędnych do poprawnej pracy każdej usługi cząstkowej.<br> 
>Port używany w projekcie to **6080** <br>
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
Hasło do dla uzytkownika root jest ustawione w pliku Docker-compose.MySQL jest podłaczony do sieci backend.<br>
Dane są przechowywane w podłączonym volumenie, aby były dostępne po wyłączeniu kontenera.<br>

Ponieważ standardowy config httpd nie pozwala na użycie proxymatcha oraz vhostów <br>
plik ten został zmieniony. Dyrektywa ProxyPassMatch zapełnia prawidłowe proxowanie.<br>
Kontener jest podłączony do do sieci frontend i backend, <br>
Dodatkowe pliki konfiguracyjne: httpd.conf oraz httpd-vhosts.conf <br>

### Wyniki
Aby sprawdzić poprawność działania naszych kontenerów prechodzimy pod adres **localhost:6080** <br>
![wynik](/wynik.png)
