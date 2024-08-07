<div class="container">
    <h2><?php echo $page_title; ?></h2>

    <h3><?= __("Filtering on"); ?> <?php echo $filter ?></h3>
    <?php
    $i = 1;
    if ($vucc_array) {
        echo '<table style="width:100%" class="table table-sm tablevucc table-bordered table-hover table-striped table-condensed text-center">
        <thead>
        <tr>
            <td>#</td>
            <td>' . __("Gridsquare") . '</td>';

        if ($type != 'worked') {
            echo '<td>' . __("QSL") . '</td>
                <td>' . __("LoTW") . '</td>';
        } else {
            echo '<td>' . __("Call") . '</td>';
        }
        echo '</tr>
        </thead>
        <tbody>';
    foreach ($vucc_array as $vucc => $value) {      // Fills the table with the data
        echo '<tr>
            <td>'. $i++ .'</td>
			<td><a href=\'javascript:displayContacts("'. $vucc .'","'. $band . '","All","All","All","VUCC")\'>'. $vucc .'</td>';

            if ($type != 'worked') {
                echo '<td>'. $value['qsl'] . '</td>
                    <td>'. $value['lotw'] .'</td>';
            } else {
            echo '<td>'. $value['call'] .'</td>';
            }

        echo '</tr>';
        }
        echo '</tbody></table></div>';

    }
    else {
        echo '<div class="alert alert-danger" role="alert">' . __("Nothing found!") . '</div>';
    }
    ?>
