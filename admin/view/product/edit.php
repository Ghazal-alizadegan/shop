<?php
$id = $_GET['id'];
$show = $class->show_edit_product($id)
?>
<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <section class="panel">
                    <header class="panel-heading" style="color: #99c262; font-size: 20px">
                        ویرایش محصول

                    </header>
                    <div class="panel-body">
                        <form class="form" role="form" method="post">
                            <div class="form-group" style="width: 310px">
                                <label>عنوان دسته بندی</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" name="title"
                                       value="<?php echo $show['title'] ?>">

                            </div>
                            <div class="form-group" style="width: 310px">
                                <label>عنوان سرگروه</label>
                                <select class="form-control m-bot15" name="parent">
                                    <?php
                                    foreach ($products as $val) {
                                        ?>
                                        <option value="<?php echo $val['parent'] ?>"
                                        <?php
                                        $chid = $val['parent'];
                                        $show_pr = $class->show_parent_list($chid);
                                        if ($show['parent'] == $show_pr['id']) {
                                            echo " selected";
                                        }
                                        echo ">$show_pr[title]</option>";
                                        ?>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">وضیعت</label>
                                <div class="radio">

                                    <label>

                                        <input type="radio" name="status" value="1" <?php if ($show['status'] == 1) {
                                            echo "checked";
                                        } ?> />
                                        فعال
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" value="0" <?php if ($show['status'] == 0) {
                                            echo "checked";
                                        } ?> >
                                        غیر فعال
                                    </label>
                                </div>
                            </div>
                            <br/><br/>

                            <div class="form-group ">
                                <label for="exampleInputPassword1">توضیحات</label>
                                <br/>
                                <textarea class="form-control" name="detail" placeholder="توضیحات محصول"
                                          id="editor1"><?php echo $show['detail'] ?></textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>

                            </div>
                            <div class="form-group" style="width: 310px">
                                <label>تعداد موجودی</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" name="number"
                                       value="<?php echo $show['number'] ?>">

                            </div>
                            <div class="form-group" style="width: 310px">
                                <label>قیمت محصول</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" name="price"
                                       value="<?php echo $show['price'] ?>">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm" name="btn">ویرایش</button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </section>
</section>