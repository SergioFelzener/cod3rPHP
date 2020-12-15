<div class="title">Integração HTML</div>

<h1 center>

<?php 

echo "Hello";
echo '<small>'; 
echo ' World';
echo '</small>'; 

?>
</h1>

<?= "<div center blue> Outra forma de inserir HTML</div>" . "teste"?>

<br>

<div center>
    <button double>
        <?= "Cool" ?>
    </button>
</div>

<style>
    button { 
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEEE;
        font-weight: bold;
        /* border-radius: 10px; */
    }

    button:hover { 
        background-color: #ffffff;
        color: #000000;
    }

    [center] { 
        display: flex;
        justify-content: center;
    }

    [blue] { 
        color: #4286f4;
    }

    [double] { 
        font-size: 2rem;
    }



</style>