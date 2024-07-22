<?php

function pluginseo_settings_page_styles() {
wp_enqueue_style('pluginseo-settings-page-styles', plugin_dir_url(__FILE__) .
'style.css');
}



//===================================================

function pluginseo_add_settings_page() {
    add_menu_page(
        'Plugin Seo Settings',
        'Plugin Seo',
        'manage_options',
        'pluginseo-settings',
        'pluginseo_settings_page_content',
        plugin_dir_url(__FILE__) .'/images/pluginseo.png',
        20 // Position in the menu 
    );
}



function pluginseo_settings_page_content() {
    ?>
<style>
#adminmenu .wp-menu-image img {
    width: 25px;
    height: 25px;
}

input {
    width: 100%;
}

#submit {
    width: 200px;
}
</style>
<div class="wrap">
    <h2>Plugin Seo Settings</h2>
    <?php 
    
     
     $setting = get_option('pluginseo_setting_name');


    ?>

    <h2>Content :</h2>

    <p><?php echo $setting;  ?></p>

    <form action="options.php" method="post">
        <?php
            settings_fields('pluginseo-settings');
            do_settings_sections('pluginseo-settings');
            submit_button();
            ?>
    </form>
</div>
<?php
}



function pluginseo_settings_init() {
    register_setting('pluginseo-settings', 'pluginseo_setting_name');

    add_settings_section(
        'pluginseo_settings_section',
        'Plugin Seo Settings Section',
        'pluginseo_settings_section_cb',
        'pluginseo-settings'
    );

    add_settings_field(
        'pluginseo_setting_name',//id
        'Content',//title
        'pluginseo_settings_field_cb',//callback
        'pluginseo-settings',//page
        'pluginseo_settings_section'//section
    );

   
}

//===================================================

function pluginseo_settings_section_cb() {
    echo '<p>Intro text for our settings section</p>';
}

function pluginseo_settings_field_cb() {
    $setting = get_option('pluginseo_setting_name');
    
    ?>
<input type="text" name="pluginseo_setting_name" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php
}





//===================================================

function loadseo(){

$setting = get_option('pluginseo_setting_name');







  ?>
<script>
const meta = document.createElement('meta');


// Bienvenidos a nuestra tienda solidaria, un espacio dedicado a recaudar fondos para ayudar a las personas que viven con demencia, incluyendo el Alzheimer. Nuestra misión es proporcionar apoyo y recursos a quienes más lo necesitan, y cada compra que realizas nos acerca un paso más a lograr este objetivo.En nuestra tienda, encontrarás una variedad de productos cuidadosamente seleccionados, desde artículos de uso diario hasta regalos únicos y especiales. Cada producto ha sido elegido no solo por su calidad y utilidad, sino también por su capacidad para generar un impacto positivo en la vida de las personas afectadas por la demencia. Al adquirir nuestros productos, no solo estás obteniendo algo valioso para ti o tus seres queridos, sino que también estás contribuyendo directamente a una causa noble y urgente.La demencia, y en particular el Alzheimer, es una enfermedad devastadora que afecta a millones de personas en todo el mundo, incluyendo a sus familias y cuidadores. Sabemos lo difícil que puede ser enfrentar los desafíos diarios que esta enfermedad presenta, y es por eso que estamos comprometidos a hacer una diferencia. Los fondos recaudados a través de nuestras ventas se destinan a programas de investigación, apoyo a los cuidadores, y servicios de atención para los pacientes. Queremos asegurarnos de que cada persona afectada por la demencia reciba el apoyo y la dignidad que merece.Además de nuestros productos, también ofrecemos información y recursos educativos sobre la demencia y el Alzheimer. Creemos que la concienciación es clave para combatir estas enfermedades, y estamos dedicados a proporcionar la información más reciente y relevante para ayudar a las personas a entender y manejar mejor estas condiciones. En nuestra tienda, no solo encontrarás productos, sino también un espacio de aprendizaje y apoyo.Nos enorgullece trabajar en colaboración con diversas organizaciones y expertos en el campo de la demencia y el Alzheimer. Estas alianzas nos permiten maximizar el impacto de nuestros esfuerzos y asegurar que los fondos recaudados se utilicen de la manera más efectiva posible. Cada compra que realizas en nuestra tienda es un acto de solidaridad y esperanza, y estamos agradecidos por tu apoyo.Te invitamos a explorar nuestra tienda y descubrir los productos que hemos seleccionado con tanto cuidado. Ya sea que estés buscando un regalo especial o algo para ti mismo, puedes estar seguro de que tu compra tendrá un propósito significativo. Juntos, podemos hacer una diferencia en la vida de las personas afectadas por la demencia y sus familias.Gracias por ser parte de nuestra misión y por tu compromiso con esta causa tan importante. Cada pequeño gesto cuenta, y con tu ayuda, podemos avanzar hacia un futuro en el que la demencia y el Alzheimer sean enfermedades del pasado.La demencia es un término general que abarca una variedad de afecciones neurológicas que afectan al cerebro y que empeoran con el tiempo. Es la pérdida de la capacidad de pensar, recordar y razonar a niveles tales que afectan la vida y las actividades diarias. Algunas personas con demencia no pueden controlar sus emociones y otras conductas, y su personalidad puede cambiar.En el pasado, a la demencia a veces se le llamaba senilidad y se pensaba que era parte normal del envejecimiento, probablemente porque ocurre con más frecuencia a medida que las personas envejecen. Es posible que hasta un tercio de las personas de 85 años o más tengan algún tipo de demencia, pero esta no es parte normal del envejecimiento y no todo el mundo desarrolla demencia a medida que envejece. En muy pocos casos, algunas personas la desarrollan en la mediana edad.La demencia es un término general que describe una variedad de síntomas asociados con el deterioro de la memoria, el pensamiento y las habilidades sociales. Aquí tienes un resumen de los síntomas y causas más comunes:Síntomas de la Demencia Pérdida de memoria: Generalmente notada por otras personas, afecta la capacidad de recordar información reciente1.Dificultades para comunicarse: Problemas para encontrar las palabras adecuadas o seguir conversaciones1.Dificultades visuales y espaciales: Perderse en lugares conocidos o dificultad para reconocer caras y objetos1.Problemas de razonamiento y juicio: Dificultad para tomar decisiones o resolver problemas1.Dificultad para realizar tareas complejas: Problemas para planificar y llevar a cabo actividades que requieren múltiples pasos1.Causas de la Demencia


const content = "<?php echo $setting; ?>";;




meta.content = content;

document.getElementsByTagName('head')[0].appendChild(meta);

const title = document.querySelector('title');


title.innerHTML += content;



const meta0 = document.createElement('meta');
meta0.property = 'og:locale';
meta0.content = 'es_ES';
document.getElementsByTagName('head')[0].appendChild(meta0);

const meta1 = document.createElement('meta');
meta1.property = 'og:title';
meta1.content = 'Afa Levante Tienda';
document.getElementsByTagName('head')[0].appendChild(meta1);

const meta2 = document.createElement('meta');
meta2.property = 'og:type';
meta2.content = 'Productos para ayudar enfermos con demencia Alzheimer';
document.getElementsByTagName('head')[0].appendChild(meta2);

const meta3 = document.createElement('meta');
meta3.property = 'og:url';
meta3.content = 'https://infodemencias.com/donaciones';
document.getElementsByTagName('head')[0].appendChild(meta3);

const meta4 = document.createElement('meta');
meta4.property = 'og:image';
meta4.content =
    'https://infodemencias.com/wp-content/uploads/2024/06/donaciones.png';
document.getElementsByTagName('head')[0].appendChild(meta4);

const meta5 = document.createElement('meta');
meta5.property = 'og:description';
meta5.content = content;
document.getElementsByTagName('head')[0].appendChild(meta5);

console.log(meta0);
</script>

<?php

	
}







?>