Gymbros - Website for gym with e-commerce.

Website for a gym with the possibility to buy subscribe options and other items, such as t-shirts and hoodies.
It is developed for "Linguaggi e Tecnlogie per il web 2022/2023".
All rights reserved.

Authors:

Sito web di un ristorante che implementa la possibilità di poter prenotare, lato client, il proprio tavolo dalla piantina. Sviluppato per il corso di Linguaggi e Tecnologie per il Web 2021/2022. 

Tecnologie:
HTML ;
CSS (Bootstrap 5.1.3);
JavaScript (jquery-3.6.0 e ajax;);
PHP (PHP Mailer);
SQL.

Tools:
Visual Studio Code:
HTML CSS Support v1.12.2 ;
JavaScript (ES6) code snippets v1.8.0 ;
Live Server v5.7.5 ;
PHP Server v3.0.2 ;
PgAdmin ;
Chrome v101.0.4951 ;
Firefox v100.0.2 ;
Microsoft Edge v101.0.1210 .

Uso:
Importare la cartella “sito-internet” su Visual Studio per l’avvio corretto del sito (o selezionare apri con).

Per accedere alla sezione riservata del ristoratore registrarsi con l’email “emaildelristoratore@prova.com” ed effettuare il login con tale email (la password è a scelta dell’ipotetico ristoratore).

Struttura:
Il codice è diviso in cartelle:
Una cartella per ogni linguaggio di programmazione (HTML, css, js, PHP);
HTML contiene a sua volta una cartella di pagine HTML non navigabili esplicitamente ma usate per la gestione di errori PHP.
Una cartella “img” contenente le risorse (immagini, logo) richiamate nelle pagine del sito a loro volta divise in sottocartelle di competenza. 
Ogni Sorgente del sito ha un file HTML , e se presente un css associatovi (qualora non ricorra solo a bootstrap). Le pagine richiamano eventualmente del codice Javascript per effettuare modifiche o controlli dinamici, connessioni e interrogazioni del database (rappresentato nei file “sql” presenti nella cartella) o creazione e distruzione di elementi.

Cartella Bootstrap: Contenitore della libreria Bootstrap in locale.

Cartella CSS : 
carousel.css: Foglio di stile per i carousel in index.html ;
Central_Area.css: Foglio di stile per la gestione dell'area centrale della home;
contattaci.css: Foglio di stile per la pagina contattaci.html;
dove_siamo.css: Foglio di stile per la pagina dove siamo.html;
index.css: Foglio di stile per il body della pagina index.html;
loginSignup.css: Foglio di stile per la pagina di loginSignup.html;
prenotazioni.css : Foglio di stile per la pagina di prenotazioni.html contenente la disposizione degli elementi della pagina e la rappresentazione dei tavoli;
prenotati.css : Foglio di stile per la pagina prenotati.html contenente la disposizione degli elementi della pagina e della tabella.
ristoratore.css: Foglio di stile per la sezione riservata del ristoratore (ristoratore.html).

Cartella HTML :
Cartella “error”: Sorgenti HTML cui si viene reindirizzati in caso di errore o di avvenuta registrazione;
contattaci.html: Sorgente HTML per contattare il ristoratore tramite una form-mail in PHP;
doveSiamo.html: Sorgente HTML della pagina dove è presente una mappa google e altre informazioni su luoghi limitrofi al ristorante;
index.html: Sorgente HTML della homepage;
loginSignup.html: Sorgente HTML per la registrazione/login degli utenti e accesso alla sezione riservata al ristoratore;
prenotati.html : Sorgente HTML per la visualizzazione delle prenotazioni effettuate dall’utente;
prenotazioni.html : Sorgente HTML per la prenotazione dei tavoli contenente la sala e la form per la prenotazione;
ristoratore.html: Sorgente HTML della sezione riservata al ristoratore per la visualizzazione delle prenotazioni.

Cartella JS :
emailCheck.js: Sorgente JavaScript per il controllo dei campi della form nella pagina contattaci.html con relativa verifica della giusta formattazione della email inserita dall’utente o dall’autocompletamento;
jquery-3.6.0.js: Sorgente JavaScript per la libreria locale di jquery;
loginSignupAnimation.js: Sorgente JavaScript per gestire lo switch tra le form di registrazione e login nella pagina loginSignup.html;
prenotati.js: Sorgente JavaScript che effettua richiesta ajax per richiedere al database le prenotazioni effettuate collegate alla mail fornita e crea dinamicamente la tabella da visualizzare o il messaggio di errore in caso di fallimento;
prenotazione.js : Sorgente JavaScript che effettua le richieste ajax per richiedere i tavoli già prenotati al database, il caricamento dinamico della sala sulla base della data e del giorno, la gestione della form di invio dei dati della prenotazione al database, creazione dinamica del messaggio di pop-up in caso di successo o di fallimento della richiesta;
ristoratore.js: Sorgente JavaScript per gestire la chiamata ajax del ristoratore per il recupero delle prenotazioni dal database filtrate per nome, giorno e ora o combinazioni delle tre;
Session_Manager.js: Sorgente JavaScript per la gestione dei cookie in caso di login/logout (modifica della navbar, creazione, recupero dei dati dal database e cancellazione);
slideShow.js: Sorgente JavaScript per gestire le animazioni dei carousel nella pagina index.html.

Cartella PHP:
Cartella src in PHP: file per il funzionamento della libreria PHPmailer;
checkOccupati.php: Sorgente PHP richiamata da una chiamata ajax in prenotazioni.js per l’ottenimento dei tavoli che sono già stati prenotati grazie alla combinazione di data e ora forniti tramite POST;
formmail.php: Sorgente PHP che sfrutta la libreria PHPmailer per l'invio di e-mail al ristoratore, usando i campi della form della pagina contattaci.html;
invio.php: gestione dell’invio dei dati utente al database (email, nome, tavolo-selezionato, giorno, orario) per effettuare la prenotazione;
login.php: Sorgente PHP dove vengono inviati i campi riempiti nella form di login e, dopo dei controlli di errore, reindirizza l'utente all'index e il ristoratore alla pagina riservata; 
mostraPrenotati.php: Sorgente PHP richiamato da una chiamata ajax per interrogare il database ed ottenere un json contenente i dati circa le prenotazioni legate alla email inserita da POST;
mostraPrenotazioniRistorante.php: Sorgente PHP richiamata da chiamata ajax dove vengono richiesti dati al database in base ai campi forniti dalla form della sezione riservata al ristoratore;
recuperoDati.php: Sorgente PHP che si occupa di fornire i dati dell'utente in fase di login per il salvataggio nei cookie;
registrazione.php: Sorgente PHP dove vengono inviati i campi riempiti nella form di registrazione e, dopo dei controlli di errore, registrati nel database.

Cartella SQL: 
Contiene uno script SQL per la creazione delle tabelle usate.
    
Autori:
ESPOSITO PELELLA Davide 1886977;
IANNONE Bruno 1883472;
MARIANO Simone 1883519.