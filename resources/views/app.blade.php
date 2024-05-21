<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @inertiaHead
</head>
    <Navigation></Navigation>
    @inertia
<script>
    export default {
        name: "App",
    }
</script>
<style>

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
