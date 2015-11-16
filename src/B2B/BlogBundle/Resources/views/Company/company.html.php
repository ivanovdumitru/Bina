<html>
    <head>
        <title>List Company</title>
    </head>
    <body>
        <table>
            <?php foreach($test as $item): ?>
            <tr>
                <td><?php echo $item['id_company']; ?></td>
                <td></td>
                <td></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
