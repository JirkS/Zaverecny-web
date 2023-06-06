# OREARIA website

Web je rozdělen do 4 tématických částí/jednotlivých stránek:
- home
- the Concorde
- facts
- api flights

a 2 podčástí:
- login
- register

### Technologie
- Jako editor k vývoji webu jsem využíval Visual Studio Code.
- Web využívá jazyky html, css, javascript a php.
- Zárověň web beží na webovém serveru Xampp Apache.
- Web obsahuje přihlášení do MySQL databáze.
- Mezi technologie, které web využívá, patří knihovny PHPMailer, Partisles-JS, Anime-JS, BootStrap, JQuery a Ajax.

### Instalace a spuštění
- V úvodu je potřeba instalace webového serveru [Xampp](https://www.apachefriends.org).
- Poté je zapotřebí upravit konfigurační soubor Apache httpd.conf, kde +- v polovině upravíte následující část kódu:
"<Directory />
    AllowOverride all
    Require all granted
</Directory>".

- Po stáhnutí všech souborů z tohoto githubu jako zip ho extrahujte a soubory ze složky překopírujete do složky:
\Xampp\htdocs\web\.
- Na závěr stačí spustit Xampp server tlačítkem start a do příkazového řádku v internetovém prohlížeči napsat:
"localhost/web/home.php" (např).
- Pro funkční přihlašování a registraci je třeba aby Vám na localhostovy běžel server s MySQL databází.

### Funkce
- Všechny stránky jsou plně responzivní.
- Struktura jednotlivých stránek je vždy stejná, a to header, potom obsah (content) celé stránky a na samém konci footer.
- Na všech stránkach Vám po 15s vyskočí na 5s pobídka "scroll down", aby jste sjeli kolečkem myši níže po stránce. Tato akce se však nestane, pokud jste přihlášeni (Anime-JS).
- Pokud kliknete na Sign In / Sign Up a kliknete zpět na "back to previous page", vrátíte se na stránku, ze které jste se na ní dostali (localstorage).
- Klikem na logo v levém horním rohu jste vždy přesměrováni na home webu.
- Na home stránce je příjemná line(čára), která se pohybuje s kolečkem myši a intuitivně propojuje jednotlivé části (svg Figma).
- Web obsahuje obrázky, rozsáhlé texty, či texty s linear-gradient barvou a stejně tak i pozadí stránky je linear-gradient barva.
- Animace (např. u buttonu) zpříjemňují uživatelský zážitek.
- Concorde nabízí overlined text, procházení obrázků (carousel) a obrázek s textem, který se při zmenšní obrazovky přemístí pod obrázek.
- Api fligts využívá volání API letů v určitém časovém úseku od firmy [OpenSky](https://opensky-network.org), využívá i knihovnu Partisles-JS se kterou si můžete hrát pohybem myši během načítání dat, které obsahuje animační loading, zárověň stránka obsahuje event na klávesu "R", která znovu zavolá request na API (Partosles-JS, event).
- Footer obsahuje několik odkazů na autora stránky a podobně (také plně respozivní).
- Header má intuitivní animace s logem na levém okraji, na pravém okraji se nachází tlačítka pro přihlášení a registraci.
    - zárověň při zmenšení se header přemění na tzv. hamburger menu, tím je header také plně respozivní.
- Register je pouze formulář a pokud je vše v pořádku vyplněné, jste rovnou přesměrováni na login a Váš účet je zapsán v databázi.
- Login obsahuje jednoduchý login s emailem a heslem.
    - pokud jsou pole vyplněná korektně, jste přihlášeni, to poznáte tak, že Vaše jméno se nachází místo "Sign In" a místo "Sing up" je "Log Off".
    - je zde implementovaná SESSION, podle které se indetifikuje, zda jste přihlášni nebo nikoli (SESSION).
    - po každém špatném pokusu o zalogování je tato informace zapsána do souboru na logování (json) pro jednotlivý účet (to znamená, že každý účet, který má alespoň jedno špatné zalogování, je pouze jednou v souboru na logování s počtem špatných pokusů zalogování).
    - zároveň po každých 5 pokusech je na danou emailovou adresu zaslán mail s infomací, že se někdo poravděpodobně snaží přihlásit do jeho účtu (PHPMailer).
