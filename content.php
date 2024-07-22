<?php



function pluginseo_admin_page_callback() {

global $texto;

if ( isset($_POST['texto']) ){
    $texto = $_POST['texto'];
}




?>
<div class="wrap">
    <h2>Plugin Seo</h2>
    <p>Bienvenido a la página de administración de seo del plugin.</p>
    <p>Puedes añadir tu contenido aquí.</p>


    <form action="" method="post">


        <label for="texto">Introduce un Texto</label>

        <input type="text" name="texto" id="texto" />


        <button>GUARDAR</button>
    </form>

</div>
<?php
}