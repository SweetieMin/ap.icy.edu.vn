let <?php echo e($chart->id); ?>_rendered = false;
<!--[if BLOCK]><![endif]--><?php if($chart->api_url): ?>
let <?php echo e($chart->id); ?>_api_url = "<?php echo $chart->api_url; ?>";
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
let <?php echo e($chart->id); ?>_load = function () {
    if (document.getElementById("<?php echo e($chart->id); ?>") && !<?php echo e($chart->id); ?>_rendered) {
        <!--[if BLOCK]><![endif]--><?php if($chart->api_url): ?>
            fetch(<?php echo e($chart->id); ?>_api_url)
                .then(data => data.json())
                .then(data => { <?php echo e($chart->id); ?>_create(data) });
        <?php else: ?>
            <?php echo e($chart->id); ?>_create(<?php echo $chart->formatDatasets(); ?>)
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    }
};
window.addEventListener("load", <?php echo e($chart->id); ?>_load);
document.addEventListener("turbolinks:load", <?php echo e($chart->id); ?>_load);
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/vendor/consoletvs/charts/src/Views/init.blade.php ENDPATH**/ ?>