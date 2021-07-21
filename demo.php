<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Payment</title>
</head>

<body>
    <section class="sect">

        <form action="pay.php" method="post">
            <h2>Payment Method</h2>
            <table class="met">
                <tbody>
                    <tr>
                        <th>Name</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="CUSTOMER_NAME" value=""></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="CUSTOMER_EMAIL" value=""></td>
                    </tr>
                    <tr>
                        <th>Mobile No.</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="CUSTOMER_MOBILE" value=""></td>
                    </tr>
                    <tr>
                        <th>Payment Amount </th>
                    </tr>
                    <tr>
                        <td><input type="text" name="PAY_AMT" value=""></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Pay Now"></td>
                    </tr>


                </tbody>
            </table>
        </form>
    </section>
</body>

</html>