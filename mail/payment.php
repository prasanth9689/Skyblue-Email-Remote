
   <body>
      <?php
         include_once "header.php";
         ?>
      <!doctype html>
      <html lang="en">
         <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <title>Skyblue Business Mail | Price List</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0">
            <meta name="theme-color" content="#f4f4f4">
            <meta name="msapplication-navbutton-color" content="#f4f4f4">
            <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
            <link rel="icon" href="../assets/img/favicon/favicon.ico">
            <link rel="manifest" href="../assets/img/favicon/site.webmanifest">
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/payment.css">
            <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="../assets/js/native/payment.js"></script>
            <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

            <style>
               .error-email {
    color: #ff3500;
    font-size: 12px;
    display: block;
}

.name-card {
   border-bottom: 2px solid #eee !important;
    border: none;
    font-weight: 600
}
               </style>

         </head>
         <body style="background-color:white;">

            <div class="container mt-5 px-5">
               <div class="mb-4">
                  <h2>Confirm order and pay</h2>
                  <span>please make the payment, after that you can enjoy all the features and benefits.</span>
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <div class="card p-3">
                        <h6 class="text-uppercase">Payment details</h6>

                        <!-- Input field 1 -->
                        <div class="inputbox mt-3">
                           <input type="text" name="name" class="form-control name-card" required="required">
                           <span>Name on card</span>
                           <p class="error-email" id="error-email">Enter name on card.</p>
                        </div>


                        <div class="row">
                           <div class="col-md-6">
                              <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><i class="fa fa-credit-card"></i><span>Card Number</span></div>
                           </div>
                           <div class="col-md-6">
                              <div class="d-flex flex-row">
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>Expiry</span></div>
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>CVV</span></div>
                              </div>
                           </div>
                        </div>
                        <div class="mt-4 mb-4">
                           <h6 class="text-uppercase">Billing Address</h6>
                           <div class="row mt-3">
                              <div class="col-md-6">
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>Street Address</span></div>
                              </div>
                              <div class="col-md-6">
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>City</span></div>
                              </div>
                           </div>
                           <div class="row mt-2">
                              <div class="col-md-6">
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>State/Province</span></div>
                              </div>
                              <div class="col-md-6">
                                 <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"><span>Zip code</span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt-4 mb-4 d-flex justify-content-between" ><span>Previous step</span><button id="pay" class="btn btn-success px-3">Pay ₹840</button></div>
                  </div>
                  <div class="col-md-4" >
                     <div class="card card-blue p-3 text-white mb-3">
                        <span>You have to pay</span>
                        <div class="d-flex flex-row align-items-end mb-3">
                           <h1 class="mb-0 yellow">₹549</h1>
                           <span>.99</span>
                        </div>
                        <span>Enjoy all the features and perk after you complete the payment</span><a href="#" class="yellow decoration">Know all the features</a>
                        <div class="hightlight"><span>100% Guaranteed support and update for the next 5 years.</span></div>
                     </div>
                  </div>
               </div>
            </div>
