<?php $view->extend('::base.html.php'); ?>

<div class="box" id="homepage">
    
    <div class="box-header well">
        <h2>PPI01 Application</h2>
    </div>
    
    <div class="box-content">
        
        <div class="page-header">
            <h1>This is the first page</h1>
        </div>     

        <hr>

    </div>
    
</div>

<?php $view['slots']->start('include_js_body'); ?>
<script type="text/javascript" src="<?=$view['assets']->getUrl('js/home.js');?>"></script>
<?php $view['slots']->stop(); ?>