<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <img src="assets/images/header.png" width="720"/>
        <p>&nbsp;</p>
        <p><strong><?= $city ?>, <?= date("F j, Y"); ?></strong></p>
        <p>&nbsp;</p>
        <p><strong><?= $applicant ?></strong>
        <br/><strong><?= $institution ?></strong>
        <br />Presente.-</p>
        <p>&nbsp;</p>
        <p><?= $title ?>:</p>
        <?= $body ?>
        <p style="text-align: center;"><img src="assets/images/signature.png" width="100"/>
        <br/><strong><?= $president ?></strong>
        <br/><?= $position ?>
        <br/><?= $institution_president ?></p>
        <p>&nbsp;</p>
    </body>
</html>'