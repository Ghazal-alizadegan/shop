<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<section id="main-content">
    <section class="wrapper">
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading" style="color: #99c262; font-size: 20px" >
                افزودن محصول جدید

            </header>
            <div class="panel-body">
                <form class="form" role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group" style="width: 310px">
                        <label>عنوان محصول</label>
                        <input type="text" class="form-control" id="exampleInputEmail2"  name="title">

                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>عنوان سرگروه</label>
                        <select class="form-control m-bot15" name="parent">
                            <?php
                            foreach ($pr as $val){
                                ?>
                                <option value="<?php echo $val['id'];?>"><?php echo $val['title'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">وضیعت</label>
                        <div class="radio">

                            <label>
                                <input type="radio" name="status"value="1" checked>
                                فعال
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" value="0">
                                غیر فعال
                            </label>
                        </div>
                    </div>
                    <div class="form-group " >
                        <label for="exampleInputPassword1">توضیحات</label>
                        <br/>
                        <textarea class="form-control" name="detail" placeholder="توضیحات محصول" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>تصویرشماره یک محصول </label>
                        <input type="file" class="form-control" id="exampleInputEmail2"  name="img1">

                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>تصویرشماره دو محصول </label>
                        <input type="file" class="form-control" id="exampleInputEmail2"  name="img2">

                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>تصویرشماره سه محصول </label>
                        <input type="file" class="form-control" id="exampleInputEmail2"  name="img3">

                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>تعداد موجودی</label>
                        <input type="text" class="form-control" id="exampleInputEmail2"  name="number">

                    </div>
                    <div class="form-group" style="width: 310px">
                        <label>قیمت محصول</label>
                        <input type="text" class="form-control" id="exampleInputEmail2"  name="price">

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm" name="btn">افزودن</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
    </section>
</section>