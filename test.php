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
  <link rel=stylesheet href="/open-covid19-test/style.css">
</head>
<body>
  <div id="app">
    <main class="test">
      <div>
        <h1>
          Evalúa tus síntomas
        </h1>
        <div style="height: 1em">&nbsp;</div>
        <form action="result.php" method="POST">
          <ol>
            <li>
          <div>
            <fieldset>
              <legend>
                <p class="question">
                  <b>¿Tienes sensación de falta de aire de inicio brusco?</b> <br><small>▸ En ausencia de cualquier otra patología que la justifique.</small>
                </p>
              </legend>
              <input type="radio" name="airShortness" value="true" id="airShortnessTrue" required="required" aria-required="true">
              <label for="airShortnessTrue">
                Sí
              </label><br>
              <input type="radio" name="airShortness" value="false" id="airShortnessFalse" required="required" aria-required="true">
              <label for="airShortnessFalse">
                No
              </label>
            </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
                <p class="question">
                  <b>¿Tienes fiebre superior a 37.7ºC?</b>
                </p>
              </legend>
              <input type="radio" name="fever" value="true" id="feverTrue" required="required" aria-required="true">
              <label for="feverTrue">
                Sí
              </label>
              <br>
              <input type="radio" name="fever" value="false" id="feverFalse" required="required" aria-required="true">
              <label for="feverFalse">
                No
              </label>
            </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
                <p class="question">
                  <b>¿Tienes tos seca y persistente?</b>
                </p>
              </legend>
              <input type="radio" name="dryCough" value="true" id="dryCoughTrue" required="required" aria-required="true">
              <label for="dryCoughTrue">
                Sí
              </label>
              <br>
              <input type="radio" name="dryCough" value="false" id="dryCoughFalse" required="required" aria-required="true">
              <label for="dryCoughFalse">
                No
              </label>
            </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
            <p class="question">
              <b>¿Has tenido contacto estrecho con algún paciente positivo confirmado?</b> <br><small>▸ Un paciente positivo significa que es un paciente infectado.</small>
            </p>
          </legend>
            <input type="radio" name="closeContact" value="true" id="closeContactTrue" required="required" aria-required="true">
            <label for="closeContactTrue">
              Sí
            </label>
            <br>
            <input type="radio" name="closeContact" value="false" id="closeContactFalse" required="required" aria-required="true">
            <label for="closeContactFalse">
              No
            </label>
          </fieldset>
          </div>
        </li>
        <li>
          <div>
          <fieldset>
            <legend>
            <p class="question">
              <b>¿Tienes mocos en la nariz?</b>
            </p>
          </legend>
            <input type="radio" name="mucus" value="true" id="mucusTrue" required="required" aria-required="true">
            <label for="mucusTrue">
              Sí
            </label>
            <br>
            <input type="radio" name="mucus" value="false" id="mucusFalse" required="required" aria-required="true">
            <label for="mucusFalse">
              No
            </label>
          </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
            <p class="question">
              <b>¿Tienes dolores musculares?</b>
            </p>
          </legend>
            <input type="radio" name="muscularPain" value="true" id="muscularPainTrue" required="required" aria-required="true">
            <label for="muscularPainTrue">
              Sí
            </label>
            <br>
            <input type="radio" name="muscularPain" value="false" id="muscularPainFalse" required="required" aria-required="true">
            <label for="muscularPainFalse">
              No
            </label>
          </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
            <p class="question">
              <b>¿Tienes sintomatología gastrointestinal?</b> <br><small>▸ Diarrea, náuseas, dolor abdominal, otros.</small>
            </p>
          </legend>
            <input type="radio" name="gastrointestinal" value="true" id="gastrointestinalTrue" required="required" aria-required="true">
            <label for="gastrointestinalTrue">
              Sí
            </label>
            <br>
            <input type="radio" name="gastrointestinal" value="false" id="gastrointestinalFalse" required="required" aria-required="true">
            <label for="gastrointestinalFalse">
              No
            </label>
          </fieldset>
          </div>
        </li>
        <li>
          <div>
            <fieldset>
              <legend>
            <p class="question">
              <b>¿Llevas más de 20 días con los síntomas que has confirmado arriba?</b>
            </p>
          </legend>
            <input type="radio" name="twentyDays" value="true" id="twentyDaysTrue" required="required" aria-required="true">
            <label for="twentyDaysTrue">
              Sí
            </label>
            <br>
            <input type="radio" name="twentyDays" value="false" id="twentyDaysFalse" required="required" aria-required="true">
            <label for="twentyDaysFalse">
              No
            </label>
          </fieldset>
          </div>
        </li>
      </ol>
          <br>
          <div class="right">
            <a href="/open-covid19-test/" class="button">Volver</a>&nbsp;
            <button type="submit">Resultados</button>
         </div>
       </form>
     </div>
     <div class="margin-container">
     </div>
   </main>
 </div>
</body>
</html>