<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
  <script>
    export default {
        name: "App",
    }
  </script>
  <style>
    @import url("http://fonts.googleapis.com/css?family=Raleway:wght@400;500&display=swap");
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Raleway", sans-serif;
    font-weight: 400;
    }
    .app {
    min-height: 100vh;
    position: relative;
    background-color: #f1f1f1;
    }
    .container {
    padding: 0 20px;
    max-width: 1140px;
    margin: 0 auto;
    }
  </style>
</html>
