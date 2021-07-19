<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        لیست پیام ها
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> نام</th>
                            <th> ایمیل</th>
                            <th> توضیحات</th>
                            <th>جزییات</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($listcontact) {
                            foreach ($listcontact as $msg) {
                                ?>
                                <tr>
                                    <td><?php echo $msg['name']; ?></td>
                                    <td><?php echo $msg['email']; ?></td>
                                    <td><?php echo $msg['message_text']; ?></td>
                                    <td><a class="btn btn-primary btn-xs"
                                           href="index.php?c=contact&a=detail&id=<?php echo $msg['id']; ?>"><i
                                                    class="icon-pencil"></i></a></td>
                                    <td><a href="index.php?c=contact&a=delete&id=<?php echo $msg['id']; ?>"
                                           class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                                </tr>
                                <?php
                            }
                        } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>
