
<link rel='stylesheet' type='text/css' media='all' href='/assets/css/notificationStateFormStyles.css'>

<?php if((isset($formState)) and (!empty($formState))): ?>

    <div class="div-estado-erroneo">

        <?php foreach($formState as $error): ?>

            <p>
                <?php echo $error; ?>
            </p>

        <?php endforeach; ?>

    </div>

<?php endif; ?>

<?php if((isset($formState)) and (empty($formState))): ?>

<div class="div-estado-correcto">

    <p>
        <?php echo $mensajeCorrecto; ?>
    </p>

</div>

<?php endif; ?>

