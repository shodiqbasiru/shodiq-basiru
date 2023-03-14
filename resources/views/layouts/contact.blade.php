@extends('main')

@section('contact-page')
<div class="section-content">
    <div id="contact" class="section content-contact">
        <h2 class="title-primary">Contact Me</h2>
        <hr class="mb-5 text-white">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <form id="contact-form" action="" method="POST" class="contact-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-2" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-2" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-2" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn button-primary">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 contact-col-r">
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.508711153468!2d107.63330642468023!3d-6.888516154200048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a8801c3a1b%3A0x8809416b914bb7ed!2zNsKwNTMnMTkuNiJTIDEwN8KwMzgnMDAuMSJF!5e0!3m2!1sid!2sid!4v1675292077525!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Address -->
                <p>Jl. Pradipta No.26, Cigadung, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40191</p>

                <!-- Links -->
                <ul class="contact-links mb-4">
                    <li class="mb-2">
                        <a href="tel:0100200340">
                            <i class="fas fa-phone mr-2 contact-link-icon"></i>
                            Tel: 081394600805
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@company.com">
                            <i class="fas fa-at mr-2 contact-link-icon"></i>
                            Email: shodiqbasiru@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection