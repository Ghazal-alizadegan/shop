<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <section class="panel">
                    <header class="panel-heading">
                        جزییات پیام
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <p style="font-size: 15px"> نام: </p></label>
                                <br/>
                                <p for="exampleInputEmail1"><?php echo $detail['name'] ?></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <p style="font-size: 15px">ایمیل: </p></label>
                                <br/>
                                <p for="exampleInputEmail1"><?php echo $detail['email'] ?></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <p style="font-size: 15px">متن پیام: </p></label>
                                <br/>
                                <p for="exampleInputEmail1"><?php echo $detail['message_text'] ?></p>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
