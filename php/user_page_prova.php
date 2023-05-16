<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>User Page</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      
        
        <!-- Font Awesome -->
        
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
        />
        
        <!-- Google Fonts -->

        
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
        />

        <!-- MDB -->
        
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
            rel="stylesheet"
        />

        <!-- MDB -->

        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
        ></script>
    </head>
        



    <body>


        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    
                                    <img src="../.utils/images/pablo.png" alt="logo"
                                        class="rounded-circle img-fluid" style="width: 100px;" />
                                </div>
                                <h4 class="mb-2"> Hi<span> <?php echo $_SESSION['name']?></span> </h4>
                                <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                                    href="#!">mdbootstrap.com</a></p>
                                    <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class="fab fa-facebook-f fa-lg"></i>
                                        </button>
              
                                        <button type="button" class="btn btn-outline-primary btn-floating">
              
                                        <i class="fab fa-twitter fa-lg"></i>
              
                                        </button>
              
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                
                                        <i class="fab fa-skype fa-lg"></i>
              
                                        </button>
                                    </div>
                                    <button type="button" class="btn redirect-button" >
                                        CHECKOUT
                                    </button>
            
                                    <button type="button" class="btn redirect-button">
                                        SHOP
                                    </button>

                                    <button type="button" class="btn redirect-button">
                                        LOGOUT
                                    </button>
                                    <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        <div>
                                            <p class="mb-2 h5">8471</p>
                                            <p class="text-muted mb-0">Wallets Balance</p>
                                        </div>
                                    <div class="px-3">
                                        <p class="mb-2 h5">8512</p>
                                        <p class="text-muted mb-0">Income amounts</p>
                                    </div>
                                    <div>
                                        <p class="mb-2 h5">4751</p>
                                        <p class="text-muted mb-0">Total Transactions</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </body>
</html>