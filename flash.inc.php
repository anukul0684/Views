<?php foreach($flash as $message) : ?>
    <div class = "flash <?=$message[0]?>">
        <?=$message[1]?>
    </div>
<?php endforeach; ?>