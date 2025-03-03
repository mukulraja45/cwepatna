<?php
$page_module_name = "Banner";
?>
<?
$banner_name=$image=$link=$title1=$title2=$title3=$title4=$description="";
$banner_id=0;
$status=1;
$banner_for=1;
$record_action = "Add New Record";

if(!empty($banner_data))
{

	$record_action = "Update";
	$banner_id = $banner_data->banner_id;
	$banner_name = $banner_data->banner_name;
	$image = $banner_data->image;
	$link = $banner_data->link;
	$title1 = $banner_data->title1;
	$banner_for = $banner_data->banner_for;
	$status = $banner_data->status;
	
}

?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=$page_module_name?> </small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=MAINSITE_Admin."wam"?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=MAINSITE_Admin.$user_access->class_name."/".$user_access->function_name?>"><?=$user_access->module_name?> List</a></li>
						<? if(!empty($banner_data)){ ?>
						<li class="breadcrumb-item"><a href="<?=MAINSITE_Admin.$user_access->class_name."/view/".$banner_id?>">View</a></li>
						<? } ?>
						<li class="breadcrumb-item"><?=$record_action?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?  ?>
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"><?=$banner_name?> <small><?=$record_action?></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <?php
						if($user_access->view_module==1 || true)	{
					?>
					<? echo $this->session->flashdata('alert_message'); ?>
                    <div class="card-body">


                        <?php echo form_open(MAINSITE_Admin."$user_access->class_name/doEdit", array('method' => 'post', 'id' => 'banner_form' , "name"=>"banner_form", 'style' => '', 'class' => 'form-horizontal', 'role' => 'form', 'onsubmit' => 'return validateForm()', 'enctype' => 'multipart/form-data')); ?>
							<input type="hidden" name="banner_id" id="banner_id" value="<?=$banner_id?>" />
							<input type="hidden" name="redirect_type" id="redirect_type" value="" />

                            	<div class="">

								<div class="form-group row">
									    <div class="col-lg-3 col-md-4 col-sm-6">
                                    <label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Banner Name <span style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
                                    <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-sm" required id="banner_name" name="banner_name" value="<?=$banner_name?>" placeholder="Banner Name">
                                        <span style="color:red" class="error_span" id="banner_name_error" ></span>
                                    </div>
                                </div>

								<div class="col-md-3 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Banner Link<span style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12	">
									<input type="text" class="form-control form-control-sm"  id="link" name="link" value="<?=$link?>" placeholder="Banner Link">
									</div>
								</div>

                                <div class="col-md-2 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Upload Banner<span style="color:#f00;font-size: 22px;margin-top: 3px;"></span></label>
									<div class="col-sm-12 d-flex">
									<div class="input-group"style="width:90%" >
									<div class="custom-file" >
										<input type="file" name="image" class="custom-file-input" id="files" <? if(empty($image)){ ?> required <? } ?>>
										<label class="custom-file-label form-control-sm" for="files"></label>
									</div>
										</div><div class="custom-file-display">
										<? if(!empty($image)){ ?>
											<span class="pip">
											<a target="_blank" href="<?=_uploaded_files_.'banner/'.$image?>">
											<img class="imageThumb" src="<?=_uploaded_files_.'banner/'.$image?>" />
											</a>
											</span>
										<? }else{ ?>
											<span class="pip">
											<img class="imageThumb" src="<?=_uploaded_files_?>no-img.png" />
											</span>
										<? } ?>
										</div>
									</div>
								</div>


                                </div>
                              

                                <div class="form-group row">

								<div class="col-md-3 col-sm-6">
									<label for="radioSuccess1" class="col-sm-12 label_content px-2 py-0">Status</label>
									<div class="col-sm-6">
									<div class="form-check" style="">
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="status" <? if($status==1){echo "checked"; }?> value="1" id="radioSuccess1">
												<label for="radioSuccess1"> Active
												</label>
											</div>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<div class="icheck-danger d-inline">
												<input type="radio" name="status" <? if($status!=1){echo "checked"; }?> value="0" id="radioSuccess2">
												<label for="radioSuccess2"> Block
												</label>
											</div>
										</div>
									</div>
									</div>
								</div>

                                <div class="col-md-3 col-sm-6">
									<label for="banner_forradioSuccess1" class="col-sm-12 label_content px-2 py-0">Banner For</label>
									<div class="col-sm-6">
									<div class="form-check" style="">
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="banner_for" <? if($banner_for==1){echo "checked"; }?> value="1" id="banner_forradioSuccess1">
												<label for="banner_forradioSuccess1"> Desktop
												</label>
											</div>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<div class="icheck-danger d-inline">
												<input type="radio" name="banner_for" <? if($banner_for!=1){echo "checked"; }?> value="0" id="banner_forradioSuccess2">
												<label for="banner_forradioSuccess2"> Mobile
												</label>
											</div>
										</div>
									</div>
									</div>
								</div>
								<br>
								
								<div class="col-md-12 col-sm-12">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>File Title</th>
                <th>Description</th>
                <th>File Upload</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="documentFields">
            <tr class="qe_sub_table_tr">
                <td class="qe_sub_table_count">1</td>
                <td>
                    <input type="text" name="file_title[]" placeholder="File Title" class="form-control" required>
                </td>
                <td>
                    <input type="text" name="description[]" placeholder="Description" class="form-control" required>
                </td>
                <td>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="file[0][]" class="custom-file-input" multiple required>
                            <label class="custom-file-label">Choose files</label>
                        </div>
                    </div>
                </td>
                <td class="qe_sub_table_remove_td">
                    <button type="button" onclick="removeRow(this)">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="button" onclick="addMoreFields()">Add More</button>
</div>

<script>
    function addMoreFields() {
        let container = document.getElementById('documentFields');
        let index = container.children.length;
        let tr = document.createElement('tr');
        tr.className = 'qe_sub_table_tr';
        tr.innerHTML = `
            <td class="qe_sub_table_count">${index + 1}</td>
            <td><input type="text" name="file_title[]" placeholder="File Title" class="form-control" required></td>
            <td><input type="text" name="description[]" placeholder="Description" class="form-control" required></td>
            <td>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="file[${index}][]" class="custom-file-input" multiple required>
                        <label class="custom-file-label">Choose files</label>
                    </div>
                </div>
            </td>
            <td class="qe_sub_table_remove_td"><button type="button" onclick="removeRow(this)">Remove</button></td>
        `;
        container.appendChild(tr);
    }

    function removeRow(button) {
        button.closest('tr').remove();
        updateRowNumbers();
    }

    function updateRowNumbers() {
        let rows = document.querySelectorAll('.qe_sub_table_tr');
        rows.forEach((row, index) => {
            row.querySelector('.qe_sub_table_count').innerText = index + 1;
        });
    }
</script>

								<!-- /.card-body -->

                                <div class="card-footer">
									<center>
									<button type="submit" name="save" onclick="return redirect_type_func('')" value="1" class="btn btn-info">Save</button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="submit" name="save-add-new" onclick="return redirect_type_func('save-add-new')" value="1" class="btn btn-default ">Save And Add New</button>
									</center>
								</div>


								<!-- /.card-footer -->

                        <?php echo form_close() ?>
                        </table>
                    </div>
                    <? }else{
											$this->data['no_access_flash_message']="You Dont Have Access To View ".$page_module_name;
											$this->load->view('admin/template/access_denied' , $this->data);
										} ?>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

</div>
    </section>
    <?  ?>

</div>
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<script>
function redirect_type_func(data)
{
	document.getElementById("redirect_type").value = data;
	return true;
}
window.addEventListener('load' , function(){
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
		  //customized code
		  $(".pip").remove();
          $(".custom-file-display").html("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" + "</span>");
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }

});
</script>
