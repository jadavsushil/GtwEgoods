<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<div class="gtwServices">
    <h1><?php echo $title?></h1>
    <div class="row">
        <div class="col-md-12">                
            <?php 
                echo $this->Form->create('EgoodCategory', array('inputDefaults' => array('div' => 'col-md-12 form-group','class' => 'form-control'),'class' => 'form-horizontal','id'=>'ServiceCategoryAddEditForm', 'novalidate'=>'novalidate'));    
                    echo $this->Form->input('name',array(
                        'type'=>'text'
                    )); 
                    echo $this->Form->input('description',array(
                        'class' =>'wysiwyg',
                        'style' => 'width:100%;height:60px;',
                    ));
                    echo $this->Form->submit($title, array(
                        'div' => false,
                        'class' => 'btn btn-primary'
                    )); 
                    echo "&nbsp;";
                    echo $this->Html->actionBtn(__('Cancel'), 'index'); 
                echo $this->Form->end();
            ?>
        </div>            
    </div>
</div>
