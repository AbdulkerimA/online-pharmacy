 <head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="./assets/style/footer.css">
 </head>
 <footer>
     <div id="top">
         <div id="left">
             <h3>Navigation</h3>
             <ul>
                 <li>home</li>
                 <li>about us</li>
                 <li>products</li>
             </ul>
         </div>
         <?php if ($_SERVER['PHP_SELF'] != '/online-pharmacy/loginandsignup.php') { ?>
             <div id="right">
                 <form action="./index.php" method="post">
                     <input type="email" name="email" id="email" placeholder="your email" required>
                     <textarea name="comment" id="comment" placeholder="contuct us" required></textarea>
                     <button type="submit">comment</button>
                 </form>
             </div>
         <?php } ?>
     </div>
     <div id="bottom">
         <div id="copyright">
             all rights reserved by MEDIAEVEN &copy; 2024
         </div>
         <div id="getapp">
             <div id="android">
                 <img src="./assets/icons/game.png" alt="android">
                 <p>
                     download from playstore
                 </p>
             </div>
             <div id="ios">
                 <img src="./assets/icons/app-store.png" alt="ios">
                 <p>
                     download from apple store
                 </p>
             </div>
         </div>
         <div id="socialmedias">
             <i class="fa fa-instagram" aria-hidden="true"></i>
             <i class="fa fa-telegram" aria-hidden="true"></i>
             <i class="fa fa-twitter" aria-hidden="true"></i>
         </div>
     </div>
 </footer>