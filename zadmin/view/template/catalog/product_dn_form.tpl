<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
<div class="page-header">
    <div class="container-fluid">
        <div class="pull-right">
            <button type="submit" form="form-product" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
            <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
        <h1>San pham de nghi</h1>
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
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_form; ?></h3>
</div>
<div class="panel-body">
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-general" data-toggle="tab">Data</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab-general">
            <div class="tab-content">
                <div class="tab-pane" style="display: block;">
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Ten san pham</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="<?php echo $productdn['name']; ?>" placeholder="Ten san pham" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="image"><span data-toggle="tooltip" title="Image">Image</span></label>
                        <div class="col-sm-10">
                            <?php if(empty($productdn['image'])){ ?>
                                <a href="" id="thumb-image<?php echo $productdn['product_dn_id'] ?>" data-toggle="image" class="img-thumbnail">
                                    <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>
                                </a>
                            <?php }else{ ?>
                                <a href="" id="thumb-image<?php echo $productdn['product_dn_id'] ?>" data-toggle="image" class="img-thumbnail">
                                    <img src="<?php echo $productdn['image']; ?>" alt="" title="" data-placeholder="Image" />
                                </a>
                            <?php } ?>
                            <input type="hidden" name="image" value="<?php echo $productdn['image']; ?>" id="input-image<?php echo $productdn['product_dn_id']; ?>" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="link" value="<?php echo $productdn['link']; ?>" placeholder="Link san pham" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="description">So luoc san pham</label>
                        <div class="col-sm-10">
                            <textarea name="description" placeholder="Mo ta" id="description">
                                <?php echo $productdn['description'] ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">So luong de nghi</label>
                        <div class="col-sm-10">
                            <input type="text" name="number_dn" value="<?php echo $productdn['number_dn']; ?>" placeholder="So luong de nghi" id="name" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $('#description').summernote({height: 300});
</script>
<?php echo $footer; ?> 