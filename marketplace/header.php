<?php
$header = array('Inicio' => 'index.php', 'Productos' => 'products.php', 'Categorías' => 'categories.php', 'contact' => 'contact.php');
?>


<header>
    <div id='header'>
        <div>
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
        <div class='search-container'>
            <?php include_once('product-form.php') ?>
        </div>
    </div>

</header>