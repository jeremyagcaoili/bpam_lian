<h5>Business Categories</h5>
<hr>
<table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Definition</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($business_categories)):?>
        <?php foreach($business_categories as $b):?>
        <tr>
            <td><?=$b->name?></td>
            <td><?=$b->definition?></td>
            <td class="text-center"><a href="#" class="gModal-btn" data-gaction="edit_business_categories" data-id="<?=$b->id?>" data-base_url="<?=base_url().add_index()?>"><i class="fa fa-pen text-primary"></i></a> <a href="#" class="gModal-btn" data-gaction="delete_business_categories" data-id="<?=$b->id?>" data-base_url="<?=base_url().add_index()?>"><i class="fa fa-trash text-danger"></i></a></td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>
<div class="text-right">
    <button type="button" data-base_url="<?=base_url().add_index()?>" data-gaction="add_business_categories" class="btn btn-success gModal-btn"><i class="fa fa-plus"></i> Add</button>
</div>
<script src="<?php echo base_url();?>assets/js/bpm_lian.js"></script>