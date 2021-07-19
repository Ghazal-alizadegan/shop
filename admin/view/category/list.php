<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                         لیست سرگروه ها

                    </header>
                    <table class="table table-striped border-top" id="sample_1">
                        <thead>
                        <tr>
<!--                            <th style="width: 8px;">-->
                            <th class="hidden-phone">عنوان دسته بندی</th>
                            <th class="hidden-phone"></th>
                            <th class="hidden-phone"></th>
                            <th class="hidden-phone">نمایش</th>
                            <th class="hidden-phone">ویرایش</th>
                            <th class="hidden-phone">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($categorys_pr as $val){

                        ?>
                        <tr class="odd gradeX">
                            <td class="hidden-phone"><?php echo $val['title']?></td>
                            <td class="hidden-phone"></td>
                            <td class="hidden-phone"></td>
                            <td class="hidden-phone"><a class="label label-success" href="*">نمایش</a></td>
                            <td class="hidden-phone"><a class="label label-info" href="index.php?c=category&a=edit&id=<?php echo $val['id'] ?>">ویرایش</a></td>
                            <td class="hidden-phone"><a class="label label-danger" href="index.php?c=category&a=delete&id=<?php echo $val['id'] ?>">حذف</a></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        لیست زیر مجموعه ها

                    </header>
                    <table class="table table-striped border-top" id="sample_1">
                        <thead>
                        <tr>

                            <th class="hidden-phone" style="width: 280px">عنوان زیر مجموعه</th>
                            <th class="hidden-phone" style="width: 300px">عنوان دسته بندی</th>
                            <th class="hidden-phone">نمایش</th>
                            <th class="hidden-phone">ویرایش</th>
                            <th class="hidden-phone">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($categorys_sb as $val){
                            ?>
                            <tr class="odd gradeX">

                                <td class="hidden-phone"><?php echo $val['title']?></td>
                                <td class="hidden-phone"><?php
                                    $chid=$val['chid'];
                                    $show_pr=$class->show_parent_subset_list($chid);
                                    echo $show_pr['title'];
                                    ?></td>
                                <td class="hidden-phone"><a class="label label-success" href="*">نمایش</a></td>
                                <td class="hidden-phone"><a class="label label-info" href="index.php?c=category&a=edit&id=<?php echo $val['id'] ?>&chid=<?php echo $val['chid'] ?>">ویرایش</a></td>
                                <td class="hidden-phone"><a class="label label-danger" href="index.php?c=category&a=delete&id=<?php echo $val['id'] ?>">حذف</a></td>


                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>

