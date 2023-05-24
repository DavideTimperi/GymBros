
# Gymbros

Website for a gym with e-commerce. In the shop you can buy subscribe options and other items.
Developed for "Linguaggi e Tecnlogie per il web 2022/2023".
All rights reserved.


## Authors
- TIMPERI DAVIDE 1950722
- SERI RICCARDO 1887751
- 
## Technologies
- HTML5
- CSS3
- Bootstrap 5.2.0 
- JavaScript (jquery-3.6.4.min)
- PHP 
- SQL
- Fontawesome
- Boxicon 2.0.9
## Tools
- Visual Studio Code
    - Sa
    - asf
    - afe   
- Xampp


Visual Studio Code:
HTML CSS Support v1.12.2 ;
JavaScript (ES6) code snippets v1.8.0 ;
Live Server v5.7.5 ;
PHP Server v3.0.2 ;
PgAdmin ;
Chrome v101.0.4951 ;
Firefox v100.0.2 ;
Microsoft Edge v101.0.1210 .
## Structure
The website is divided in folders. We different folders for different programming languages (HTML, js, PHP). Plus, we used a "hidden" folder called .utils that has two subfolders, images (with another subfolder for the images of the products) and css (for all the css files). Every page is connected, eventually, to a related css file and/or a Javascript file. The interactions with the database are done with PHP.

#### HTML
- home.html: homepage that has schedule, about us section, pricing of different subscribe options and a map too see where we are located.
- shop.html: shop page with a list of all items that you can buy divided in interactionable cards.
- cart.html: cart page where the selected products are show.
- staff.html: page where the staff (us) are presented with a carousel.
- thank_you.html: not navigable html page to thank you the user for the payment done in checkout.

#### PHP
- checkout.php:
- config.php:
- confing_order.php:
- login_form.php:
- logout.php:
- register_form.php:
- user_page.php:

#### Javascript
- cart.js: generate the items added in the cart, with a modifiable quantity and a X mark to delete the element. It is displayed the overall price to pay. If the cart is empty, we have a button to return to shop. Otherwise, we have a checkout button and a clear cart.
- checkout.js: hide or show the shipping fieldset based on a checked checkbox. If checked we hide the section and clear all the input fields.
- data.js: list of json where all the products that we offers are stored.
- footer.js: simply attach the footer in every page.
- header.js: simply attach the header in every page.
- main.js: give responsiveness to the page with scroll up. the menu in media query and a read more/less option.
- shop.js: generate the items in the shop in different cards, with a modifiable quantity. It is displayed the first 4 elements at the beginning, but with a clock on "load more" button we can see all the products.
- staff.js: carousel for the staff page and a swap function.

#### css
- cart.css: style the home page.
- checkout.css: style the checkout page.
- footer.css: style the footer.
- header.css: style the header.
- home.css: style the home page.
- login.css: style the login/register page.
- shop.css: style the shop page.
- staff.css: style the staff page.
## Use
Importare la cartella “sito-internet” su Visual Studio per l’avvio corretto del sito (o selezionare apri con).

Per accedere alla sezione riservata del ristoratore registrarsi con l’email “emaildelristoratore@prova.com” ed effettuare il login con tale email (la password è a scelta dell’ipotetico ristoratore).