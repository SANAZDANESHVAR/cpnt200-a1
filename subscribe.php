<?php
include('includes/config.php');
$page_title = "subscribe";
$current = "pg-subscribe";
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <div class="wrapper">
    <!---nav---->

  <?php include("includes/partials/nav.php"); ?>

    <?php include("includes/partials/head.php"); ?>
    </div>

</head>

<body class = <?php echo $current; ?>>
  <main class="page-wrapper">

    <!-- head -->
    <?php include("includes/partials/head.php"); ?>

        <fieldset class="signup">
            <div class="title">
                <h1>Let's stay in touch!</h1>
                <p class="tagline">Subscribe to our newsletters</p>
            </div>
            <form action="/users" method="post" class="form">
                <div class="textfield">
                    <p><label for="name">Username:<abbr title="required" aria-label="required">*</abbr></label>
                        <input type="name" name="name" placeholder="Please enter your username"></p>
                    <!-- make the password minimum length of 10 characters -->
                    <p><label for="email">Email:<abbr title="required" aria-label="required">*</abbr></label>
                        <input type="email" name="email" placeholder="Please enter your email"></p>

                    <ul class="check-box">
                        <li><input type="checkbox" id="promos" name="promoEmails" value="yes">
                            <label for="promos">I would like to recieve promotional emails</label>
                        </li>
                    </ul>
                    <button type="submit">Subscribe</button>
                </div>
            </form>
        </fieldset>
    <!-- Footer -->
    
    <?php include("includes/partials/footer.php"); ?>
  </main>

    <!-- script -->
    <script type="module" src="js/client.js"></script>
</body>
</html>
