
    <!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->
    <section class="message_now_area section_padding_100_70" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Message Title -->
                    <div class="message_title">
                        <!-- Section Heading Start -->
                        <div class="section_heading">
                            <p>Contact</p>
                            <h3>Lasă un mesaj</h3>
                        </div>
                    </div>

                    <div class="contact_from">
                        <form action="/contact" method="post" id="main_contact_form">
                            @csrf
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nume" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiect" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Număr de telefon" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mesaj" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-default">Trimite</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->
