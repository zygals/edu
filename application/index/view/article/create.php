{extend name='public:base' /}
{block name="title"}{$title}{/block}
{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>

	<!--弹出添加用户窗口-->
<form id="addForm" class="form-horizontal" action="{:url($act)}" method="post" enctype="multipart/form-data" >
		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<!---->
					<h4 class="modal-title" id="gridSystemModalLabel">{$title}</h4>
				</div>
				<div class="">
					<div class="container-fluid">
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>院校：</label>
                            <div class="col-xs-8">
                                <select class=" form-control select-duiqi" name="school_id" id="">
                                    <?php foreach ($list_school as $row_) { ?>
                                        <option value="{$row_['id']}" >{$row_['title']}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>分类：</label>
                            <div class="col-xs-8">
                                <select class=" form-control select-duiqi" name="cate_article_id" id="sel_cate">
                                    <?php foreach ($list_cate_article as $row_) { ?>
                                        <option value="{$row_['id']}" >{$row_['name']}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
							<div class="form-group ">
                                <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>标题：</label>
								<div class="col-xs-8 ">
									<input type="text" class="form-control input-sm duiqi" name='title' value="" id="" placeholder="">
								</div>
							</div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>内容：</label>
                            <div class="col-xs-8 ">
                                <textarea name="cont" id="desc_textarea" style="width:700px;height:300px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">首页推荐：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="index_show" class="index_show yes" value="1" >是</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="index_show" class="index_show no" value="0" checked> 否</label>
                            </div>
                        </div>

                        <!--<div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>列表图：</label>
                            <div class="col-xs-4 ">
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（218*218），大小不超过<?php /*echo floor(config('upload_size')/1024/1024);*/?>M。</span>
                            </div>

                        </div>-->
                       <!-- <div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>详情页图：</label>
                            <div class="col-xs-4 ">
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img_big" placeholder=""><span style="color:red">尺寸要求（734*448），大小不超过<?php /*echo floor(config('upload_size')/1024/1024);*/?>M。</span>
                            </div>

                        </div>-->



                    </div>
				<div class="text-center">
                    <a href="javascript:history.back()">
                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回</button>
                    </a>
					<button type="submit" class="btn btn-xs btn-green">保 存</button>
				</div>
			</div>
		</div>
</form>

<script>
      $(function () {

        $('form').bootstrapValidator({
            fields: {
                title: {
                    validators:
                        {
                            notEmpty: {
                                message: '名称不能为空'
                            }
                        }

                },
                school_id: {
                    validators:
                        {
                            notEmpty: {
                                message: '不能为空'
                            }
                        }

                },

                cate_article_id: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }


                    }
                },

                cont: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }
                    }
                },

            }
        });

    });

</script>

{/block}
