<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./app/public/app.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            height: 100%;
            width: 100%;
        }

        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #34d399;
            height: 2px;
        }

        ::-webkit-scrollbar-corner {
            display: none;
            height: 0px;
            width: 0px;
        }

        .scrollbar {
            overflow-y: hidden;
            overflow-x: auto;
            scrollbar-color: #34d399 transparent;
            scrollbar-width: thin;
        }
    </style>
</head>

<body>
    <?php require_once $views_path . $view . ".php"; ?>

</body>

</html>