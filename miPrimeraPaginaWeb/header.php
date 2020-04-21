<?php
$header = array('Inicio' => 'index.php', 'Quien soy' => 'whoiam.php', 'Portafolio' => 'portfolio.php', 'contact' => 'contact.php');
?>


<header>
    <div id='header'>
        <ul class='ul'>
            <?php
            foreach ($header as $key => $value) {
                echo "<li class='header-list-element'><a href='$value' class='header-link'>";
                echo $key;
                echo '</a></li>';
            }
            ?>
        </ul>
    </div>

</header>