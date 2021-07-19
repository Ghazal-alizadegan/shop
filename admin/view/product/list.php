<section id="main-content">
    <section class="wrapper">

<!--    <ul>-->
<!--        <li>--><!--</li>-->
<!--    </ul>-->

        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        لیست زیر مجموعه ها

                    </header>
                    <table class="table table-striped border-top" id="sample_1">
                        <thead>
                        <tr>
                            <th style="width: 8px;">
                            <th class="hidden-phone">عنوان محصول</th>
                            <th class="hidden-phone">عنوان دسته بندی</th>
                            <th class="hidden-phone">نمایش</th>
                            <th class="hidden-phone">ویرایش</th>
                            <th class="hidden-phone">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($products as $val){

                            ?>
                            <tr class="odd gradeX">
                                <td>
                                <td class="hidden-phone"><?php echo $val['title']?></td>
                                <td class="hidden-phone"><?php
                                    $chid=$val['parent'];
                                    $show_pr=$class->show_parent_list($chid);
                                    echo $show_pr['title'];
                                    ?>
                                </td>
                                <td class="hidden-phone"><a class="label label-success" href="*">نمایش</a></td>
                                <td class="hidden-phone"><a class="label label-info" href="index.php?c=product&a=edit&id=<?php echo $val['id'] ?>">ویرایش</a></td>
                                <td class="hidden-phone"><a class="label label-danger" href="index.php?c=product&a=delete&id=<?php echo $val['id'] ?>">حذف</a></td>

                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>

