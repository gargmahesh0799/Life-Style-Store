
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <div class="container">
             <div class="row" style="padding-top: 90px;">
                <div class="col-xs-8">
                    <h2>LIVE SUPPORT</h2>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p></p>      
                </div>
                <div class="col-xs-2">
                    <img src="img/contact.png">
                </div>      
             </div>
             <div class="row">
                 <div class="col-xs-8">
                     <h2>CONTACT US</h2>
                     <form>
                         <div class="form-group">
                             <label for="name">Name:</label>
                             <input type="text" name="name" class="form-control input-sm">
                         </div>
                         <div class="form-group">
                             <label for="email">Email:</label>
                             <input type="email" class="form-control input-sm" name="email">
                         </div>
                         <div class="form-group">
                             <label for="message">Message:</label>
                             <textarea name="message" class="form-control"></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form><br>
                 </div>
                 <div class="col-xs-4">
                     <h2>Company Information :</h2>
                     <p>500 Lorem Ipsum Dolor Sit,</p>
                     <p>USA</p>
                     <p>Phone: +91-123-000000</p>
                     <p>Email: info@company.com</p>
                     <p>Follow on: Twitter,Facebook</p>
                 </div>
             </div>
            </div>
        </div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </body> 
</html>