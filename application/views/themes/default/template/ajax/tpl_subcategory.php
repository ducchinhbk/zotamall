    <?php if(count($categories) > 0){?>
    <select class="form-control" data-preselected="" name="post_data[subcate_id]" id="post_subcate_id">
        
		<?php foreach($categories as $row){?>
            <option value="<?php echo $row->term_id; ?>"><?php echo $row->name; ?></option>  
        <?php } ?>						
    </select>        

    <?php } ?>