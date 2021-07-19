<?php
$id=$_GET['id'];
$show=$class->show_edit_parent_category($id);
$show_s=$class->show_edit_parent_sb_category($id);
?>
<section id="main-content">
    <section class="wrapper">
        <?php
        if(!isset($_GET['chid'])){
        ?>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        ویرایش عنوان دسته بندی
                    </header>
                    <div class="panel-body">
                        <form class="form-inline" role="form" method="post">
                            <div class="form-group">
                                <label>عنوان دسته بندی</label>
                                <input type="text" class="form-control" id="exampleInputEmail2"  name="title" value="<?php echo $show;?>">

                            </div>
                            <br/>                    <br/>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm" name="btn">افزودن</button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
        <?php } ?>
        <?php
        if(isset($_GET['chid'])){

        ?>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        ویرایش زیر مجموعه
                    </header>
                    <div class="panel-body">
                        <form class="form-inline" role="form" method="post">
                            <div class="form-group">
                                <label>عنوان زیر مجموعه</label>
                                <input type="text" class="form-control" id="exampleInputEmail2"  name="title_subset" value="<?php  echo $show_s['title'];?>">
                            </div>
                            <br/>   <br/>
                            <div class="form-group" style="width: 310px">
                                <label>عنوان سرگروه</label>
                                <select class="form-control m-bot15" name="parent_subset">
                                    <?php
                                    foreach ($parent as $val){
                                        ?>
                                        <option value="<?php echo $val['id'];?>"<?php
                                        if($val['id']==$show_s['chid']){
                                            echo " selected";
                                        }
                                        echo">$val[title]</option>";
                                        ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <br/>                    <br/>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm" name="btn1">افزودن</button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
        <?php }?>
    </section>
</section>