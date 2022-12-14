<h1>F.A.Q</h1>

        
<?php 
 
 echo $msg;

?>

<form method="post">
<label for="pseudo">pseudo</label>
    <input type="text" name="pseudo" id="pseudo">
<label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
    <button type="submit"> Valider 👍</button>
</form>

<div id="talk">

<div id="card">
    <div id="cardheader">
        <h2>Messages :</h2>
        <?php

        echo '<p>Il y a ' . $data_text->rowCount() . '  messages</p>';

        while ($com = $data_text->fetch(PDO::FETCH_ASSOC)) {
        ?>
    </div>

    <div id="cardbody">
        <h5 id="cardtitle">Par :  <?php echo $com['pseudo']; ?>, le <?php echo $com['date_fr'] ?></h5>
            <p id="cardtext"><?php echo $com['commentaire']; ?></p>
            
        <?php
        }

        ?>
    </div>
</div>

  

</div>



</section>


<footer>
<p>Site fait par Kévin Denis <a href="https://www.linkedin.com/in/k%C3%A9vin-denis-326272258/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
</footer>







<script src="./assets/script.js"></script>
</body>
</html>