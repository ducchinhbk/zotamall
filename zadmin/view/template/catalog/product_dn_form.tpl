<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
<div class="page-header">
    <div class="container-fluid">
        <div class="pull-right">
            <button type="submit" onclick="$('#form-product').submit();" form="form-product" data-toggle="tooltip" title="Lưu" class="btn btn-primary"><i class="fa fa-save"></i></button>
            <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="Hủy" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
        <h1>Sản phẩm đề nghị</h1>
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
                        <label class="col-sm-2 control-label" for="name">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="<?php echo $productdn['name']; ?>" placeholder="Tên sản phẩm" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="image"><span data-toggle="tooltip" title="Image">Image</span></label>
                        <div class="col-sm-10">
                            <a href="" id="thumb-image<?php echo $productdn['product_dn_id'] ?>" data-toggle="image" class="img-thumbnail">
                                <img src="<?php echo $productdn['image']; ?>" alt="" title="" data-placeholder="<?php echo $productdn['image']; ?>" style="height: 100px; width: 100px;"/>
                            </a>
                            <input type="hidden" name="image" value="<?php echo $productdn['image']; ?>" id="input-image<?php echo $productdn['product_dn_id']; ?>" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="link" value="<?php echo $productdn['link']; ?>" placeholder="Link sản phẩm" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="description">Mô tả sản phẩm</label>
                        <div class="col-sm-10">
                            <textarea name="description" placeholder="Mo ta" id="description">
                                <?php echo $productdn['description'] ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Số lượng đề nghị</label>
                        <div class="col-sm-10">
                            <input type="text" name="number_dn" value="<?php echo $productdn['number_dn']; ?>" placeholder="Số lượng đề nghị" id="number_dn" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">Số lượng đề nghị tối đa</label>
                        <div class="col-sm-10">
                            <input type="text" name="max_dn" value="<?php echo $productdn['max_dn']; ?>" placeholder="Số lượng đề nghị tối đa" id="max_dn" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">Trạng thái</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control">
                                <?php if($productdn['status'] == 1){ ?>
                                <option value="1" selected="selected">Active</option>
                                <option value="0">DeActive</option>
                                <?php }else{ ?>
                                <option value="1">Active</option>
                                <option value="0" selected="selected">DeActive</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="product_dn_id" value="<?php echo $productdn['product_dn_id']; ?>"/>
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