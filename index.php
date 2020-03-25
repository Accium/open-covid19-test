<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="/open-covid19-test/favicon.ico">
  <title>
    Open COVID-19 Test
  </title>
  <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@acciumred_media" />
      <meta name="twitter:creator" content="@acciumred_media" />
      <meta property="og:url" content="https://acciumred.com/open-covid19-test/" />
      <meta property="og:title" content="Open COVID-19 Test" />
      <meta property="og:description" content="Test accesible de autoevaluación del COVID-19. De código abierto, y devolviendo los mismos resultados que el creado por la Comunidad de Madrid, no almacena datos ni usa cookies." />
      <meta property="og:image" content="https://acciumred.com/v/acciumred_media.jpg">
  <link rel=stylesheet href="/open-covid19-test/style.css">
</head>
<body>
  <div id="app">
    <main class="home">
      <div>
        <h1>
          Open COVID-19 Test
        </h1>
        <p class="home-p">
          Este es un test de autoevaluación del COVID-19 semejante al test de <a href="https://www.coronamadrid.com/" target="_blank" title="Se abre en una ventana nueva.">coronamadrid.com</a> lanzado, recientemente, por la Comunidad de Madrid. 
          La diferencia entre ambos es que este es un test de código abierto que, devolviendo los mismos resultados, no almacena ni regala a empresas privadas tus datos. En él, tampoco usamos ningún tipo de cookie. 
        </p>
        <p class="home-p small">
         ▸ Si quieres más información sobre el uso que la Comunidad de Madrid hace de tus datos privados, a través de su aplicación coronamadrid.com, puedes leer este artículo de <a href="https://maldita.es/malditatecnologia/2020/03/20/aplicacion-madrid-coronavirus-oficial-comparte-datos-empresas/" target="_blank" title="Se abre en una ventana nueva.">Maldita.es</a> donde se explica.
       </p>
       <p class="home-p small">
        ▸ <b>Actualización 24/03/2020</b> (<a href="https://www.eldiario.es/tecnologia/Madrid-coronavirus-rectifica-condiciones-privacidad_0_1009299143.html" target="_blank" title="Se abre en una ventana nueva.">eldiario.es</a>): La Comunidad de Madrid rectifica las condiciones más invasivas de privacidad, limitando la posibilidad de que los datos acaben en empresas privadas. 
      </p>
      <p class="home-p small">
        ▸ Si quieres conocer el algoritmo de CoronaMadrid o este, cómo lo ha descubierto su desarrolladora y ver su código fuente, puedes hacerlo en esta web <a href="https://github.com/celiavelmar/open-covid19-test" target="_blank" title="Se abre en una ventana nueva.">Repositorio GitHub</a>.
      </p>
      <p class="home-p small">
        ▸ Esta versión del Open COVID-19 sigue las Pautas de Accesibilidad WCAG 2.0. Si tienes alguna duda o sugerencia que nos ayude a mejorar su accesibilidad, por favor, háznosla llegar a través de <a href="" target="_blank" title="Se abre en una ventana nueva.">@AcciumRed_media</a>.
      </p>
      <div style="height: 2em;">&nbsp;</div>
      <div class="panel home-info-panel">
        <div class="icon">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16" width="24" height="24">
            <path fill="#F8BA00" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z" class="">
            </path>
          </svg>
        </div>
        <div>
          <p>
           <b>IMPORTANTE:</b> La información obtenida a través del uso de esta aplicación no sustituye
           ni pretende sustituir, en ningún caso, el consejo de un profesional
           médico. Si crees que tienes síntomas compatibles con el COVID-19 ponte
           en contacto con el teléfono correspondiente a tu Comunidad. 
         </p>
       </div>
     </div>
     <div style="height: 1em;">&nbsp;</div>
     <div>
      <form action="/open-covid19-test/test.php">
          <div style="display: flex; align-items: center;">
            <input id="confirm" type="checkbox" name="confirm" required aria-required="true" style="margin:0 0.5rem 0 0"/><label for="confirm" style="font-size: 0.8rem">Entiendo la información sobre el nulo uso de mis datos y el carácter meramente orientativo de esta aplicación.</label>
          </div>
          <div style="height: 1em;">&nbsp;</div>
          <div class="right">
            <button type="submit">
              &nbsp;Seguir&nbsp;
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>
</body>
</html>