<!-- Start Contact Form Section -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="section-title wow fadeInUp">TRABAJEMOS JUNTOS.</h2>
            </div>

            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                <div id="message"></div>
                <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                <form method="post" action="php/contact-form.php" name="contactform" id="contactform">
                    <fieldset>
                            <input name="name" type="text" id="name" placeholder="Nombre"/>
                            <input name="email" type="text" id="email" placeholder="Email"/>
                            <input name="subject" type="text" id="subject" placeholder="Asunto"/>
                    </fieldset>
                    <fieldset>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Mensaje"></textarea>
                    </fieldset>
                    <input type="submit" class="submit" id="submit" value="Enviar Mensaje" />
                </form>
            </div>

            <div class="col-md-12 text-center wow fadeInUp" style="margin-top:20px;">
                <p></p>
                <h4>CONTACTA HOY MISMO!</h4>
                <p><br>Vicente López, BA <br>(54) 11-3853-0655</p>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Form Section -->
