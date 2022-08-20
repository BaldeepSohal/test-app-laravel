<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Test App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row g-2 p-3">
            <div class="col-12">
                <div class="p-3 border bg-light">
                    <div id="alertPlaceholder"></div>

                    <form>
                        <div class="mb-3">
                            <label for="command" class="form-label">Enter Command</label>
                            <input type="text" name='command' type="command" class="form-control" id="command">
                        </div>

                        <button data-url="{{ url('/process') }}" onClick='runCommand()' type="button" class="run btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-12 text-center output" style="display: none;">
                <div class="p-3 border bg-light">
                    <h4>Output:</h4>
                    <p class="result">
                    </p>
                </div>
            </div>

        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src='js/app.js'></script>

</html>