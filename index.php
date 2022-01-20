<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JogLogger</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">

        <div class="heading">
            <p>JogLogger</p>
        </div>

        <div>
            <form action="" class="form">
                
                <div>
                    <label for="" class="text">Date:</label> <br>
                    <input id="" class="input-field" type="text" />
                </div>
                
                <div>
                    <label for="" class="text">Distance Covered:</label> <br>
                    <input id="" class="input-field" type="text" />
                </div>
                
                <div>
                    <label for="" class="text">Time Taken:</label> <br>
                    <input id="" class="input-field" type="text" />
                </div>

                <button id="submit" class="btn">Add</button>
            </form>
        </div>

        <table class="logs">
            <tr>
                <td class="head" colspan="5" style="text-align: center;">Logs:</td>
            </tr>
            <tr class="titles">
                <th class="text">Date:</th>
                <th class="text">Distance Covered:</th>
                <th class="text">Time Taken:</th>
                <td></td>
                <td></td>
            </tr>
            <tr class="log">
                <td class="text">10/01/2022</td>
                <td class="text">2.3km</td>
                <td class="text">14 minutes</td>
                <td><img src="assets/icons8-edit.svg" alt=""></td>
                <td><img src="assets/icons8-delete.svg" alt=""></td>
            </tr>
            <tr class="log">
                <td class="text">08/01/2022</td>
                <td class="text">4.4km</td>
                <td class="text">30 minutes</td>
                <td><img src="assets/icons8-edit.svg" alt=""></td>
                <td><img src="assets/icons8-delete.svg" alt=""></td>
            </tr>
        </table>
        <p>test</p>

    </div>
</body>
</html>