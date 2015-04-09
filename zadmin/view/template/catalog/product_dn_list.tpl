<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
<div class="page-header">
    <div class="container-fluid">
        <div class="pull-right"><a href="<?php echo $add; ?>" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            <button type="submit" form="form-product" formaction="<?php echo $copy; ?>" data-toggle="tooltip" title="<?php echo $button_copy; ?>" class="btn btn-default"><i class="fa fa-copy"></i></button>
            <button type="button" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger" onclick="confirm('<?php echo $text_confirm; ?>') ? $('#form-product').submit() : false;"><i class="fa fa-trash-o"></i></button>
        </div>
        <h1><?php echo $heading_title; ?></h1>
        <ul class="breadcrumb">
            <?php foreach ($breadcrumbs as $breadcrumb) { ?>
            <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $text_list; ?></h3>
        </div>
        <div class="panel-body">
            <div class="well">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
                            <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-model"><?php echo $entry_model; ?></label>
                            <input type="text" name="filter_model" value="<?php echo $filter_model; ?>" placeholder="<?php echo $entry_model; ?>" id="input-model" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="input-price"><?php echo $entry_price; ?></label>
                            <input type="text" name="filter_price" value="<?php echo $filter_price; ?>" placeholder="<?php echo $entry_price; ?>" id="input-price" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-quantity"><?php echo $entry_quantity; ?></label>
                            <input type="text" name="filter_quantity" value="<?php echo $filter_quantity; ?>" placeholder="<?php echo $entry_quantity; ?>" id="input-quantity" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="input-status"><?php echo $entry_status; ?></label>
                            <select name="filter_status" id="input-status" class="form-control">
                                <option value="*"></option>
                                <?php if ($filter_status) { ?>
                                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                                <?php } else { ?>
                                <option value="1"><?php echo $text_enabled; ?></option>
                                <?php } ?>
                                <?php if (!$filter_status && !is_null($filter_status)) { ?>
                                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                                <?php } else { ?>
                                <option value="0"><?php echo $text_disabled; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> <?php echo $button_filter; ?></button>
                    </div>
                </div>
            </div>
            <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-product">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                            <td class="text-center">Image</td>
                            <td class="text-center">Tên sản phẩm</td>
                            <td class="text-left">Link</td>
                            <td class="text-center">Tổng số yêu cầu</td>
                            <td class="text-center">Trạng thái</td>
                            <td class="text-right">Tác vụ</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($productdns) { ?>
                        <?php foreach ($productdns as $productdn) { ?>
                        <tr>
                            <td class="text-center"><?php if (in_array($productdn['product_dn_id'], $selected)) { ?>
                                <input type="checkbox" name="selected[]" value="<?php echo $productdn['product_dn_id']; ?>" checked="checked" />
                                <?php } else { ?>
                                <input type="checkbox" name="selected[]" value="<?php echo $productdn['product_dn_id']; ?>" />
                                <?php } ?></td>
                            <td class="text-center"><?php if ($productdn['image']) { ?>
                                <img style="width: 40px; height: 40px;" src="<?php echo $productdn['image']; ?>" alt="<?php echo $productdn['name']; ?>" class="img-thumbnail" />
                                <?php } else { ?>
                                <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>
                                <?php } ?></td>
                            <td class="text-left"><?php echo $productdn['name']; ?></td>
                            <td class="text-left"><?php echo $productdn['link']; ?></td>
                            <td class="text-left"><?php echo $productdn['number_dn']; ?></td>
                            <td class="text-left"><?php if($productdn['status'] == 1){ echo 'Active'; }else{ echo 'DeActive'; } ?></td>
                            <td class="text-right"><a href="<?php echo $productdn['edit']; ?>" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td class="text-center" colspan="8"><?php echo $text_no_results; ?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
                <div class="col-sm-6 text-right"><?php echo $results; ?></div>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>