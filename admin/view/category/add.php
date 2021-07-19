<section id="main-content">
    <section class="wrapper">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                افزودن دسته بندی جدید

            </header>
            <div class="panel-body">
                <form class="form-inline" role="form" method="post">
                    <div class="form-group">
                        <label>عنوان دسته بندی</label>
                        <input type="text" class="form-control" id="exampleInputEmail2"  name="title">
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
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        افزودن زیر مجموعه جدید

                    </header>
                    <div class="panel-body">
                        <form class="form-inline" role="form" method="post">
                            <div class="form-group">
                                <label>عنوان زیر مجموعه</label>
                                <input type="text" class="form-control" id="exampleInputEmail2"  name="title_subset">
                            </div>
                            <br/>   <br/>
                            <div class="form-group" style="width: 310px">
                                <label>عنوان سرگروه</label>
                            <select class="form-control m-bot15" name="parent_subset">
                                <?php
                                foreach ($parent as $val){
                                ?>
                                <option value="<?php echo $val['id'];?>"><?php echo $val['title'];?></option>
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
    </section>
</section>