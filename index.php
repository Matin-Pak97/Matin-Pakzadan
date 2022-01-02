<?php include 'calc.php' ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Calculator</title>
        <link rel="icon" href="./image/calc.ico">
        <meta charset="UTF-8">
        <meta name="author" content="Matin Pakzadan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./calc-css.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
    <div class="container">
        <div class="text-center">
            <h1>Math Calculator</h1>
        </div>
        <div class="row">
            <div class="col-md-12">

            <?php
                $calcForm =
                    '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
                        <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter your formula ..." name="formula">
                              <div class="input-group-append">
                                   <span class="input-group-text" id="basic-addon2">Using (), +, -, *, /</span>
                              </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit_button">Calculator</button>
                    </form>';

                $returnForm =
                    '<form action="' . $_SERVER['PHP_SELF'] . '" method="get">
                        <button type="submit" class="btn btn-primary" name="back_button">Back to Calculator</button>
                    </form>';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo '<p>' . calc($_REQUEST['formula']) . '</p>' . $returnForm;
                } else {
                    echo $calcForm;
                }
                ?>
            </div>
        </div>
    </div>

    </body>
</html>


