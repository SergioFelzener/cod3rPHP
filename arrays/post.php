<div class="title">Array $_POST</div>

<form action="#" method="post">
    <!-- # Carrega no action a pagina atual -->
    <label for="name">nome</label>
    <input type="text" name="nome" id="nome">
    <label for="sobrenome">sobrenome</label>
    <input type="text" name="sobrenome" id="sobrenome">
    <select name="estado">
        <option value="BA">Bahia</option>
        <option value="PR">Paraná</option>
    </select>
    <button>enviar</button>
</form>



<style>
    form>* {
        font-size: 1.8rem;
    }
</style>


<?php

echo "<br>";
print_r($_GET);
echo "<br>";
print_r($_POST);


?>