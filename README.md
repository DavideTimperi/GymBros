
# Gymbros

Website for a gym with e-commerce. In the shop you can buy subscribe options and other items.
Developed for "Linguaggi e Tecnlogie per il web 2022/2023".
All rights reserved.


## Authors
- TIMPERI DAVIDE 1950722
- SERI RICCARDO 1887751
- PAUL DRAGOS BUDURCA 1934644

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
    - HTML CSS Support v1.13.1
    - JavaScript (ES6) code snippets v1.8.0
    - Live Server v5.7.9
    - PHP Server v3.0.2
    - PHP Intelephense v1.9.5
- Xampp
- Chrome v113.0.5672.127

## Structure
The website is divided in folders. Each folder contain a different programming languages (HTML, js, PHP). Plus, we used a "hidden" folder called .utils that has two subfolders, images (with another subfolder for the images of the products) and css (for all the css files). Every page is connected, eventually, to a related css file and/or a Javascript file. The interactions with the database are done with PHP.

#### HTML
- home.html: homepage that has schedule, about us section, pricing of different subscribe options and a map too see where we are located.
- shop.html: shop page with a list of all items that you can buy divided in interactionable cards.
- cart.html: cart page where the selected products are show.
- staff.html: page where the staff (us) are presented with a carousel.
- thank_you.html: not navigable html page to thank you the user for the payment done in checkout.

#### PHP
- checkout.php: saves the datas of each order from the form in the database called order_db.
- config.php: connect the page "login_form.php" and "register_form.php" to the users database. 
- confing_order.php:  connect the page "checkout.php" to the order database.
- login_form.php: takes the info about the client, like e-mail and password to login at the website.
- logout.php: destroy the session and the user is logout of the website.
- register_form.php: is a form wich takes the info required to subscribes to the website.
- user_page.php: is the page in wich the user is redicted when he login to the website.

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
Import the correct repository from github: https://github.com/DavideTimperi/GymBros/tree/main.
Set up Xampp with Apache and MySQL. 
Database info:
- User database: 
    - hostname='localhost'
    - username='root'
    - password=''
    - database='user_db'
- Order database: 
    - hostname='localhost'
    - username='root'
    - password=''
    - database='order_db'


