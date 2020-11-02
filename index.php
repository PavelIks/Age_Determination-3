<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <?php
    if(isset($_POST['year']))
    {
        echo
            '
                    <table style="background-color: green; margin-top: 20%; margin-left: 50%; color: white">
                        <tr>
                            <td>
                                <h1>
                                    <div>
                                        Вам '.(2020-$_POST['year']).' лет! 
                                    </div>
                                </h1>
                            </td>
                        </tr>
                    </table>
            ';
    }

    ?>

    <form method="post" action="index.php">
        <p>Введите Ваш год рождения:<input name="year" type="number" max="2020" min="1"></p>
        <input type="submit">
    </form>
</body>

</html>