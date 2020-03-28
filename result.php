<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="/open-covid19-test/favicon.ico">
  <title>
    Open COVID-19 Resultado
  </title>
  <link href="/open-covid19-test/style.css" rel="stylesheet">
</head>
<body>
  <?php 
  if(isset($_POST) && !empty($_POST['airShortness'])){
    $falta_aire = 0;
    $fiebre = 0;
    $tos = 0;
    $contacto_positivo = 0;
    $mucosidad = 0;
    $dolor_muscular = 0;
    $gastrointestinal = 0;
    $mas_20_dias = 0;
    if($_POST['airShortness'] == "true"){
      $falta_aire = 60;
    }
    if($_POST['fever'] == "true"){
      $fiebre = 15;
    }
    if($_POST['dryCough'] == "true"){
      $tos = 15;
    }
    if($_POST['closeContact'] == "true"){
      $contacto_positivo = 29;
    }
    if($_POST['mucus'] === "true"){
      $mucosidad = 0;
    }
    if($_POST['muscularPain'] == "true"){
      $dolor_muscular = 0;
    }
    if($_POST['gastrointestinal'] == "true"){
      $gastrointestinal = 0;
    }
    if($_POST['twentyDays'] == "true"){
      $mas_20_dias = -15;
    }
    $res = ($falta_aire+$fiebre+$tos+$contacto_positivo+$mucosidad+$dolor_muscular+$gastrointestinal+$mas_20_dias);
    ?>
    <div id="app">
      <main class="results">
        <div class="main-container">
          <div style="height: 1em">&nbsp;</div>
          <h1>
            Resultados
          </h1>
          <div style="height: 2em">&nbsp;</div>
          <div>
            <?php if($res >= 30){
              ?>
              <p style="border: 1px solid #00588b;padding: 1em;border-radius: 0.25em;">Tus respuestas sugieren la posibilidad de tener sintomatología compatible con COVID-19 según el algoritmo de <a href="http://coronamadrid.com/" target="_blank" title="Se abre en una ventana nueva.">coronamadrid.com</a>.</p>
              <div style="height: 1em;">&nbsp;</div>
              <p><b>Algunas recomendaciones si crees tener COVID-19:</b></p>
              <ul>
                <li>
                  <b>Observa tu evolución.</b> <br>Si tus síntomas empeoran, sobre todo si tienes dificultad respiratoria, ponte en contacto con el teléfono designado por tu Comunidad para la atención sobre COVID-19 o tu centro de salud. <br><br>Puedes consultar el listado de teléfonos <a href="https://www.mscbs.gob.es/profesionales/saludPublica/ccayes/alertasActual/nCov-China/telefonos.htm" target="_blank" title="Se abre en una ventana nueva.">aquí</a>. Si eres una persona con diversidad funcional, puedes acceder a los teléfonos a través de la plataforma <a href="http://www.svisual.org/acceso_svisual.html" target="_blank" title="Se abre en una ventana nueva.">SVIsual</a>.
                </li>
                <li>
                  <b>Quédate en casa</b> para evitar contagiar a otras personas.
                </li>
                <li>
                  <b>Utiliza mascarillas</b> de protección respiratoria, cambiándolas cada 24 horas.
                </li>
                <li>
                  <b>Si vives con otras personas</b>, permanece en una habitación separada con la puerta cerrada y utiliza un cuarto de baño propio si fuese posible. Ventila la habitación evitando las corrientes hacia el resto de la casa. No compartas vajilla, toallas ni sábanas.
                </li>
                <li>
                  <b>Limpia las superficies</b> y objetos con lejía o productos desinfectantes.
                </li>
                <li>
                  <b>Guarda la ropa sucia</b> en una bolsa cerrada y lávala por separado a 60-90ºC.
                </li>
                <li>
                  <b>Elimina tus residuos</b> por separado utilizando un cubo con tapa.
                </li>
                <li>
                  El COVID-19 se transmite por gotas que se expulsan al toser o estornudar, por eso <b>la higiene y evitar el contacto es vital</b> para reducir el contagio.
                </li>
              </ul>
              <?php
            } else {
              ?>
              <p style="border: 1px solid #00588b;padding: 1em;border-radius: 0.25em;">
                Tus respuestas sugieren que no tienes síntomas o no son suficientes para determinar un contagio de COVID-19 según el algoritmo de <a href="http://coronamadrid.com/" target="_blank" title="Se abre en una ventana nueva.">coronamadrid.com</a>. 
              </p>
              <div style="height: 2em">&nbsp;</div>
              <p><b>Algunas recomendaciones y consejos de prevención.</b></p>
              <ul>
                <li>
                 <b>Al toser o estornudar</b>, cúbrete boca y nariz con el codo o un pañuelo de papel desechable.
               </li>
               <li>
                 <b>Lava tus manos varias veces al día</b> durante 60 segundos y siempre después de estar en un espacio público, tocar objetos o superficies.
               </li>
               <li>
                <b>Mantén al menos un metro y medio de distancia</b> con el resto de personas.

              </li>
              <li>
                <b>Si no muestras sintomalogía de COVID-19</b>, no es necesario usar mascarillas de protección.
              </li>
              <li>
                <b>Quédate en casa.</b><br><br>
                El desplazamiento queda limitado a la compra de alimentos y productos de primera necesidad, medicamentos, desplazamientos a centros de salud, trabajo, atención a mayores, menores o personas con diversidad funcional. <br><br>
                <b>Actualización 14/03/2020</b>: Las personas con diversidad funcional, autistas y, entendemos también, que las personas con sufrimiento psíquico que vean agravada su condición debido al confinamiento también podrán realizar desplazamientos.    
              </li>
              <li>
               <b>Evita compartir</b> comida y utensilios como cubiertos, vasos, servilletas, vajillas, pañuelos, etc.
             </li>
           </ul>
           <?php
         }
       } else {
        header('Location: /open-covid19-test/');
      }
      ?>
    </div>
    <div style="height: 1em;">&nbsp;</div>
    <div class="panel">
      <div class="icon">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16" width="24" heigth="24">
          <path fill="#F8BA00" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z" class="">
          </path>
        </svg>
      </div>
      <div>
        <p>
         <b>IMPORTANTE:</b> Recuerda que la información obtenida a través del uso de esta
         aplicación no sustituye ni pretende sustituir, en ningún caso, el
         consejo de un profesional médico. Si crees que tienes síntomas
         compatibles con el COVID-19 ponte en contacto con el teléfono
         correspondiente a tu Comunidad o con el de tu centro de salud. 
       </p>
     </div>
   </div>
   <div style="height: 4em;">&nbsp;</div>
   <h2>
    Algunos enlaces de interés:
  </h2>
  <div style="height: 1em;">&nbsp;</div>
  <ul>
    <li>
      Recomendaciones sanitarias y de salud pública del <a href="https://www.mscbs.gob.es/profesionales/saludPublica/ccayes/alertasActual/nCov-China/home.htm" target="_blank" title="Se abre en una ventana nueva.">Ministerio de Sanidad</a>
    </li>
    <li>
     Web de la Comunidad de Madrid con <a href="https://www.comunidad.madrid/servicios/salud/2019-nuevo-coronavirus" target="_blank" title="Se abre en una ventana nueva.">información sobre el COVID-19</a>
   </li>
   <li>
    <a href="https://www.comunidad.madrid/servicios/salud/covid-19-prevencion-consejos-ciudadania#videos" target="_blank" title="Se abre en una ventana nueva.">Consejos para evitar la transmisión</a> conviviendo con una persona con síntomas
   </li>
   <li>
     <a href="https://www.who.int/health-topics/coronavirus" target="_blank" title="Se abre en una ventana nueva.">Web de la Organización Mundial de la Salud para el Coronavirus</a>
   </li>
   <li>
    <a href="https://acciumred.com/covid-consultas-medicas/" target="_blank" title="Se abre en una ventana nueva.">Listado de profesionales de la salud que ofrecen ayuda voluntaria</a>
  </li>
</ul>
<div class="right">
  <a href="/open-covid19-test/test.php" class="">
    <button>
      Volver
    </button>
  </a>
</div>
</div>
</main>
</div>
</body>
</html>