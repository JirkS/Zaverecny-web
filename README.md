# OREARIA website

web je rozdšlen do 4 tématických částí/jednotlivých stránek:
- home
- the Concorde
- facts
- api flights<br>
a 2 částí:
- login
- register

### Technologie
- Jako editor k vývoji webu jsem využíval Visual Studio Code.
- Web využívá jazyky html, css, javascript, php.
- Zárověň web beží na webovém serveru Xampp Apache.
- Web obsahuje přihlášení do MySQL databáze.
- Mezi technologie, které web využívá patří knihovny PHPMailer, Partisles-JS, Anime-JS, BootStrap, JQuery a Ajax.

### Instalace a spuštění
- Na začátek je potřeba instalace webového serveru [Xampp](https://www.apachefriends.org)
- Poté je zapotřebí upravit konfigurační soubor Apache httpd.conf, kde +- upravíte následující část kódu:
"<Directory />
    AllowOverride all
    Require all granted
</Directory>"

- Po stáhnutí všech souborů z tohoto githubu jako zip ho extrahujete a soubory ze složky překopírujete do složky:
\Xampp\htdocs\web\
- Jako finální úkon stačí spustit Xampp server tlačítkem start a do příkazového řádku v internetovém prohlížeči napsat:
"localhost/web/home.php" (např)
- Pro kunkční přohlašování a registraci je třeba aby Vám na localhostovy běžel server s MySQL databází

### Funkce
- Všechny stránky jsou plně responzivní.
- Struktura jednotlivých stránek je vždy stejná, a to header, potom obsah (content) celé stránky a na samém konci footer
- Na všech stránkach Vám po 15s vyskočí na 5s pobídka "scroll donw" aby jste sjeli kolečkem myši níže na stránce, tato akce se však nestane, pokud jste přihlášeni (Anime-JS)
- Pokud kliknete na Sign In / Sign Up a kliknete zpět na "back to previous page" vrátíte se na stránku, ze které jste se na ní dostali (localstorage)
- Klikem na logo v levém horním rohu jste vždy přeměrováni na home webu
- Na home stránce je příjemná line(čára), která se pohybuje s kolečkem myši a intuitivně propojuje jednotlivé části
- Web obsahuje obrázky, rozsáhlé texty, či texty s linear-gradient barvou a stejně tak i pozadí stránke je linear-gradient barva
- Animace (např u buttonu) zpříjemňují uživatelský zážitek
- concorde nabízí overlined text, prochání obrázku (carousel) a obrazek s textem, který se při zmenšní obrazovky přemístí pod obrázek
- api fligts využívá volání API letů v určitém časovém úseku, využívá i klihovnu Partisles-JS s kerou si můžete hrát myší během načítání dat, které obsahuje animační loading, zárověň stránka obsahuje event na klávesu "R", která zvonu zavolá request na API
- footer obsahuje několik odkazů na autora stránkya podobně
- header má intuitivní animace s logem na levém okraji a na pravém se nachází tlačítka pro přihlášení a registraci
- register je pouze formulář a pokud je vše v pořádku vyplněné jste rovnou přesměrováni na login a jste zapsáni v databázi
- login obsahuje jednoduchý login s emailem a heslem
    - pokud jsou pole vyplněná korektně, jste přihlášeni, to poznáte tak, že Vaše jméno se nachází místo "Sign In" a místo "Sing up" je "Log Off"
    - je zde implementovaná SESSION, podle které se indetifikuje zda jste přihlášni, nebo nikoli
    - po každém jednom špatném pokusu o zalogování je tato informace zapsána do souboru na logování (json) pro jednotlivý účet (to znamená, že každý účet, který má alespoň jedno špatné zalogování, je pouze jednou v souboru na logování s počtem pokusů zalogování)
    - zároveň po každých 5 pokusech je na danou emailovou adresu zaslán mail, s tím, že se někdo poravděpodobně snaží dostat do jeho účtu
