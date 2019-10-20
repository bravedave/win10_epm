<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * This work is licensed under a Creative Commons Attribution 4.0 International Public License.
 *      http://creativecommons.org/licenses/by/4.0/
 *
*/

// sys::dump( $this->data);
?>
<h1 class="d-none d-print-block"><?= $this->title ?></h1>
<div class="table-responsive">
    <table class="table table-sm" id="<?= $tblID = strings::rand() ?>">
        <thead class="small">
            <tr>
                <td class="align-bottom">updated</td>
                <td class="align-bottom text-center">elapsed<br /><i>(minutes)</i></td>
                <td class="align-bottom">locale</td>
                <td class="align-bottom text-center">defender</td>
                <td class="align-bottom text-center">Antispyware</td>
                <td class="align-bottom text-center">OnAccess<br />Protection</td>
                <td class="align-bottom text-center">RealTime<br />Protection</td>
                <td class="align-bottom text-center">Controlled<br />Folder<br />Access</td>

            </tr>

        </thead>

        <tbody>
        <?php   foreach ( $this->data->dtoSet as $dto) {
            $ago = (int)( (time() - strtotime( $dto->updated)) / 60);
                ?>
            <tr
                data-id="<?= $dto->id ?>"
                <?php if ( $ago > 120) print 'class="bg-warning"' ?>>
                <td><?= strings::asLocalDate( $dto->updated, true) ?></td>
                <td class="text-center"><?= number_format( $ago) ?></td>
                <td><?= $dto->locale ?></td>
                <td class="text-center"><?= $dto->defender ? strings::html_tick : '<span class="text-danger">&times;</span>' ?></td>
                <td class="text-center"><?= $dto->Antispyware ? strings::html_tick : '<span class="text-danger">&times;</span>' ?></td>
                <td class="text-center"><?= $dto->OnAccessProtection ? strings::html_tick : '<span class="text-danger">&times;</span>' ?></td>
                <td class="text-center"><?= $dto->RealTimeProtection ? strings::html_tick : '<span class="text-danger">&times;</span>'  ?></td>
                <td class="text-center"><?= $dto->ControlledFolderAccess ? strings::html_tick : '<span class="text-danger">&times;</span>' ?></td>

            </tr>

        <?php   }   ?>

        </tbody>

    </table>

</div>
<script>
$(document).ready( function() {
    $('> tbody > tr', '#<?= $tblID ?>').each( function( i, tr) {
        let _tr = $(tr);

        _tr
        .addClass('pointer')
        .on( 'click', function( e) {
            let _me = $(this);
            let _data = _me.data();

            window.location.href = _brayworth_.url('<?= $this->route ?>/view/' + _data.id);

        });

    });

});
</script>