<!DOCTYPE html>
<!-- ICS2O-Unit1-08-HTML-MDL -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The XXX program, PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Shaena Jaromay" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://code.getmdl.io/1.3.0/material.green-red.min.css" /> "
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon-16x16.png"
    />
    <link rel="manifest" href="./images/site.webmanifest" />
    <title>The XXX program, PHP</title>
  </head>

  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The XXX program, PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/flower.jpeg" alt="flower" />
        </div>
        <div class="page-content">Instructions here ...</div>
        <br />
        <!-- Simple Textfield for integers-->
        <form action="answer.php" method="GET">
          <div class="mdl-textfield mdl-js-textfield">
            <!-- input pattern attribute -->
            <input
              class="mdl-textfield__input"
              type="text"
              pattern="-?[0-9]*(\.[0-9]+)?"
              id="length"
            />
            <!-- mdl-textfield__label -->
            <label class="mdl-textfield__label" for="demo-input"
              >Length of ... (mm)</label
            >
            <!-- class "mdl-textfield__error" -->
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit"
          >
            Calculate
          </button>
        </form>
        <br />
      </main>
    </div>
  </body>
</html>
