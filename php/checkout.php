<?php

?>

<!DOCTYPE html>

<html lang="en">
    <head>        
        <title>Checkout</title>
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../.utils/css/header.css"> 
        <link rel="stylesheet" href="../.utils/css/checkout.css">
        <link rel="stylesheet" href="../.utils/css/footer.css"> 
        <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon">
    
        <script src="../js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- Header -->

        <!-- Checkout -->
            <form id="checkout" method="post" action="../php/prova_decode.php">
                <!--cart-summary -->



                <input id="cart_hidden" type="text">



                <!-- payment method-->
                <fieldset>
                    <h3>Payment</h3>
                    <div id="payment">
                        <p>Accepted cards</p>
                        <i class="fa fa-cc-visa fa-x" style="color:navy;"></i>
                        <i class="fa fa-cc-amex fa-x" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard fa-x" style="color:red;"></i>
                        <i class="fa fa-cc-discover fa-x" style="color:orange;"></i>
                        <i class="fa fa-cc-paypal fa-x" style="color:navy;"></i>
                        <br>
                        <p>Required fields*</p>
                    </div>

                    <label><i class="fa-solid fa-user"></i> Name on card*: <input type="text" name="card-name" value="" placeholder="Jhon Doe"></label>
                    <label><i class="fa-solid fa-money-check"></i> Card number*: <input type="text" name="card-number" value="" placeholder="1111 2222 3333 4444" pattern="[0-9\s]{13,19}"></label>
                    <label><i class="fa-solid fa-calendar-days"></i> Expiration date*: <input type="month" name="card-exp" value="2023-05" min="2023-05" ></label>
                    <label><i class="fa-solid fa-credit-card"></i> CVV*: <input type="text" name="card-cvv" value="" placeholder="123" maxlength="3" minlength="3"></label>
                </fieldset>

                <fieldset>
                    <h3>Billing address</h3>
                    <label><i class="fa-solid fa-id-card"></i> Full name*: <input type="text" name="billing-name" value="" placeholder="Jhon M. Doe"></label>
                    <label><i class="fa-solid fa-envelope"></i> Email*: <input type="email" name="billing-email" value="" placeholder="jhon@example.com" pattern="[a-zA-Z]+\@[a-zA-Z]+\.[a-zA-Z]+"></label>
                    <label><i class="fa-solid fa-road"></i> Address*: <input type="text" name="billing-addr" value="" placeholder="Via del corso 31"></label>
                    <label><i class="fa-solid fa-building"></i> City*: <input type="text" name="billing-city" value="" placeholder="Rome"></label>
                    <label><i class="fa-solid fa-flag"></i> State*: <input type="text" name="billing-state" value="" placeholder="Italy"></label>
                    <label><i class="fa-solid fa-truck-front"></i> Postal code*: <input type="text" name="card-cvv" value="" placeholder="00012" maxlength="5" minlength="5"></label>
                    <label><input id="hide-check" type="checkbox" class="inline" checked>Shipping address is the same as billing one</label>
                </fieldset>
                
                <fieldset id="shipping">
                    <h3>Shipping address</h3>
                    <p><b>NOTE:</b> fill all fields or we will consider the shipping address the same as billing one</p>
                    <label><i class="fa-solid fa-id-card"></i> Full name: <input type="text" placeholder="Jhon M. Doe"></label>
                    <label><i class="fa-solid fa-envelope"></i> Email: <input type="email" placeholder="jhon@example.com" pattern="[a-zA-Z]+\@[a-zA-Z]+\.[a-zA-Z]+"></label>
                    <label><i class="fa-solid fa-road"></i> Address: <input type="text" placeholder="Via del corso 20"></label>
                    <label><i class="fa-solid fa-building"></i> City: <input type="text" placeholder="Rome"></label>
                    <label><i class="fa-solid fa-flag"></i> State: <input type="text" placeholder="Italy"></label>
                    <label><i class="fa-solid fa-truck-front"></i> Postal code: <input type="text" placeholder="00112"></label>
                </fieldset>

                <a href="thank_you.html"><button class="redirect-button">Pay now</button></a>
            </form>
            <div id="back-to-home">
                <label><a href="home.html"><i class="fa-solid fa-arrow-left"></i> Return to home</a></label>
            </div>
        </main>

        <!-- footer -->

        <!-- main.js -->    
        <script src="../js/checkout.js"></script>
    </body>
</html>