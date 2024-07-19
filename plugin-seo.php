<?php
/*
Plugin Name: Plugin Seo
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/




function loadseo(){
	
echo "<script>

const meta = document.createElement('meta');

const text1 =
  'Bienvenidos a nuestra tienda solidaria, un espacio dedicado a recaudar fondos para ayudar a las personas que viven con demencia, incluyendo el Alzheimer. Nuestra misión es proporcionar apoyo y recursos a quienes más lo necesitan, y cada compra que realizas nos acerca un paso más a lograr este objetivo.';

const text2 =
  'En nuestra tienda, encontrarás una variedad de productos cuidadosamente seleccionados, desde artículos de uso diario hasta regalos únicos y especiales. Cada producto ha sido elegido no solo por su calidad y utilidad, sino también por su capacidad para generar un impacto positivo en la vida de las personas afectadas por la demencia. Al adquirir nuestros productos, no solo estás obteniendo algo valioso para ti o tus seres queridos, sino que también estás contribuyendo directamente a una causa noble y urgente.';

const text3 =
  'La demencia, y en particular el Alzheimer, es una enfermedad devastadora que afecta a millones de personas en todo el mundo, incluyendo a sus familias y cuidadores. Sabemos lo difícil que puede ser enfrentar los desafíos diarios que esta enfermedad presenta, y es por eso que estamos comprometidos a hacer una diferencia. Los fondos recaudados a través de nuestras ventas se destinan a programas de investigación, apoyo a los cuidadores, y servicios de atención para los pacientes. Queremos asegurarnos de que cada persona afectada por la demencia reciba el apoyo y la dignidad que merece.';

const text4 =
  'Además de nuestros productos, también ofrecemos información y recursos educativos sobre la demencia y el Alzheimer. Creemos que la concienciación es clave para combatir estas enfermedades, y estamos dedicados a proporcionar la información más reciente y relevante para ayudar a las personas a entender y manejar mejor estas condiciones. En nuestra tienda, no solo encontrarás productos, sino también un espacio de aprendizaje y apoyo.';

const text5 =
  'Nos enorgullece trabajar en colaboración con diversas organizaciones y expertos en el campo de la demencia y el Alzheimer. Estas alianzas nos permiten maximizar el impacto de nuestros esfuerzos y asegurar que los fondos recaudados se utilicen de la manera más efectiva posible. Cada compra que realizas en nuestra tienda es un acto de solidaridad y esperanza, y estamos agradecidos por tu apoyo.';

const text6 =
  'Te invitamos a explorar nuestra tienda y descubrir los productos que hemos seleccionado con tanto cuidado. Ya sea que estés buscando un regalo especial o algo para ti mismo, puedes estar seguro de que tu compra tendrá un propósito significativo. Juntos, podemos hacer una diferencia en la vida de las personas afectadas por la demencia y sus familias.';

const text7 =
  'Gracias por ser parte de nuestra misión y por tu compromiso con esta causa tan importante. Cada pequeño gesto cuenta, y con tu ayuda, podemos avanzar hacia un futuro en el que la demencia y el Alzheimer sean enfermedades del pasado.';

const text8 =
  'La demencia es un término general que abarca una variedad de afecciones neurológicas que afectan al cerebro y que empeoran con el tiempo. Es la pérdida de la capacidad de pensar, recordar y razonar a niveles tales que afectan la vida y las actividades diarias. Algunas personas con demencia no pueden controlar sus emociones y otras conductas, y su personalidad puede cambiar.';

const text9 =
  'En el pasado, a la demencia a veces se le llamaba senilidad y se pensaba que era parte normal del envejecimiento, probablemente porque ocurre con más frecuencia a medida que las personas envejecen. Es posible que hasta un tercio de las personas de 85 años o más tengan algún tipo de demencia, pero esta no es parte normal del envejecimiento y no todo el mundo desarrolla demencia a medida que envejece. En muy pocos casos, algunas personas la desarrollan en la mediana edad.';

const text10 =
  'La demencia es un término general que describe una variedad de síntomas asociados con el deterioro de la memoria, el pensamiento y las habilidades sociales. Aquí tienes un resumen de los síntomas y causas más comunes:';

const text11 =
  'Síntomas de la DemenciaPérdida de memoria: Generalmente notada por otras personas, afecta la capacidad de recordar información reciente1.Dificultades para comunicarse: Problemas para encontrar las palabras adecuadas o seguir conversaciones1.Dificultades visuales y espaciales: Perderse en lugares conocidos o dificultad para reconocer caras y objetos1.Problemas de razonamiento y juicio: Dificultad para tomar decisiones o resolver problemas1.Dificultad para realizar tareas complejas: Problemas para planificar y llevar a cabo actividades que requieren múltiples pasos1.Causas de la Demencia';

const text12 =
  'Enfermedad de Alzheimer: La causa más común de demencia, caracterizada por la acumulación de placas y ovillos en el cerebro que llevan a la muerte de las neuronas2.Demencia vascular: Causada por daños en los vasos sanguíneos del cerebro, a menudo después de un derrame cerebral3.Demencia con cuerpos de Lewy: Asociada con depósitos anormales de proteínas en el cerebro3.Demencia frontotemporal: Resulta de la degeneración de las células nerviosas en los lóbulos frontal y temporal del cerebro3.Demencias secundarias: Provocadas por otras condiciones médicas como infecciones, enfermedades autoinmunes, o deficiencias nutricionales3.Cada tipo de demencia tiene sus propias características y evolución, por lo que es importante un diagnóstico preciso para un tratamiento adecuado.';


const content =  text1 +
  text2 +
  text3 +
  text4 +
  text5 +
  text6 +
  text7 +
  text8 +
  text9 +
  text10 +
  text11 +
  text12;

meta.content = content;
 
document.getElementsByTagName('head')[0].appendChild(meta);

const title = document.querySelector('title');


title.innerHTML += content;

</script>";

	

	
}

add_action('wp_enqueue_scripts','loadseo');