@extends('layouts.app')
@section('content')

<div class="rbt-conatct-area bg-gradient-13" style="padding-top: 13%; padding-bottom: 5%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--60">
                    <h2 class="title">Contactez-nous</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                <div class="rbt-address text-center">
                    <div class="icon">
                        <i class="feather-headphones"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Appelez-nous</h4>
                        <p><a href="tel:+33753303635">+33 7 53 30 36 35</a></p>
                        <p><a href="tel:+33753303635">+33 7 53 30 36 35</a></p>
                        <p><a href="tel:+33753303635">+33 7 53 30 36 35</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                <div class="rbt-address text-center">
                    <div class="icon">
                        <i class="feather-map-pin"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Venez nous rendre visite</h4>
                        <p>2 avenue de la forêt <br> 91170 Viry-Châtillon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-contact-address" style="padding-top: 3%">
    <div class="container">
        <div class="row g-5">
            <!-- Zone pour afficher les erreurs -->
            <div id="form-error" class="text-danger mt-3 text-center" style="display:none;"></div>
            <div class="col-lg-5" >
                <div class="thumbnail">
                    <img class="w-100 radius-6" src="assets/images/about/contact.jpeg" alt="Contact Images">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <h3 class="title">Besoin d’un accompagnement sur mesure ?</h3>
                    <P>Contactez nos experts pour discuter de vos enjeux technologiques et trouver la solution adaptée à votre entreprise.</P>
                    <form id="contact-form"  class="rainbow-dynamic-form max-width-auto">
                        @csrf
                        <div class="form-group">
                            <input name="fullname" id="contact-nom" type="text" required>
                            <label>Nom complet</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="row">
                            <div class=" col-lg-6 form-group">
                                <input name="email" type="email" required>
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="col-lg-6  form-group">
                                <input name="phone" type="text">
                                <label>Numéro de téléphone
                                </label>
                                <span class="focus-border"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" required>
                            <label>Sujet * </label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="contact-message" required></textarea>
                            <label>Message</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-submit-group">
                            <button name="submit" type="submit" id="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Soumettre</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-google-map bg-color-white rbt-section-gapTop">
<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.96769557268!2d2.264633301929685!3d48.858825541861634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1762624636340!5m2!1sfr!2sfr" height="600" style="border:0"></iframe>
</div>


<div class="rbt-team-modal modal fade rbt-modal-default" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="feather-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner">
                    <div class="row g-5 row--30 align-items-center">
                       <p>Votre message a bien été envoyé. Nous vous répondrons rapidement.</p>
                    </div>
                    <div class="top-circle-shape"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const errorDiv = document.getElementById("form-error");
    const contactSendUrl = "{{ route('contact_send') }}";
    const submitBtn = document.getElementById("submit");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        errorDiv.style.display = "none";

        fetch(contactSendUrl, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
            },
            body: formData,
        })
        .then(response => {
            submitBtn.disabled = false;
        submitBtn.classList.remove('loading');
        if (!response.ok) throw new Error("Erreur serveur (" + response.status + ")");
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // On réinitialise le formulaire
                form.reset();
                // On affiche le modal de confirmation
                const modal = new bootstrap.Modal(document.getElementById("exampleModal"));
                modal.show();
            } else {
                errorDiv.textContent = data.message || "Une erreur est survenue.";
                errorDiv.style.display = "block";
            }
        })
        .catch(error => {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
            errorDiv.textContent = "Impossible d’envoyer le message. Vérifiez votre connexion ou réessayez plus tard.";
            errorDiv.style.display = "block";
            console.error(error);
        });
    });
});
</script>
<style>
.alert {
  padding: 12px 20px;
  border-radius: 8px;
  margin-top: 15px;
  font-size: 0.95rem;
  transition: all 0.3s ease;
}
.alert.hidden {
  opacity: 0;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.alert.error {
  background-color: #ffe5e5;
  border: 1px solid #ff5c5c;
  color: #a70000;
}
</style>
@stop