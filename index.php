<?php
include('includes/config.php');

$page_title = "home";
$current = "pg-index.php";
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



       <!-- Hero  title-->   
            
         <main>   
          <div class="hero">
           <div class="tagline">
            <h1>Smell the blossom</h1>
            <h3>“Flowers are the music of the ground. From earth’s lips spoken without sound.” – Edwin Curran</h3> 
          </div>

             <section id="text-content">
 
 

                <h1> Rose </h1>
               <p> The Rock Rose (Pavonia lasiopetala), also known as the Rose Mallow, is a great perennial for the California garden because of its drought tolerance and long flower bloom time.It will grow between 3-6 feet tall and wide and prefers well-drained rocky soils. Herbaceous stems rise from a woody base withlassic.</p>
              <br>
              <h1> Rose </h1>
              <p> It grows to 3 feet tall with clustered flower heads at the top of the upwards shooting stems. The leaves are pinnately lobed and divided into smaller leaflets, giving them a delicate, fern-like, lacy appearance.</p>
              <br>
              <h1> Rose </h1>
             <p> Different varieties come in variable heights and flower colors. Yarrow blooms from late April to early July in the southern part of the country, and prefers sun to para garden</p>
              <br>
            </section>
          </div>
        </main>
   
   <!-- footer -->       
 <?php include("includes/partials/footer.php"); ?>
           
 </body>       

</html>

      
