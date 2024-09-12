<section class="ftco-section ftco-about-section">
    <div class="container-xl">
        <div class="row g-xl-5">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="row">
                    <div class="col-md-6">
                        <div class="f-services d-md-flex flex-md-column-reverse">
                            <div class="img w-100" style="background-image: url(images/f-services.jpg);" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="images/f-services.jpg"></div>
                            <div class="text w-100 p-4 text-center mb-md-4">
                                <div class="icon"><span class="flaticon-pillow"></span></div>
                                <h3>Chambre Confortable</h3>
                                <p>Loin, derrière les montagnes de mots, loin des pays de Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="f-services">
                            <div class="img w-100 mb-md-4" style="background-image: url(images/f-services-2.jpg);" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="images/f-services-2.jpg"></div>
                            <div class="text w-100 p-4 text-center">
                                <div class="icon"><span class="flaticon-special"></span></div>
                                <h3>Offres Spéciales</h3>
                                <p>Loin, derrière les montagnes de mots, loin des pays de Vokalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="mt-5 mt-md-0">
                    <span class="subheading">À propos de nous</span>
                    <h2 class="mb-4">Unwind - Une Agence de Réservation d'Hôtels</h2>
                    <p class="mb-5">Loin, derrière les montagnes de mots, loin des pays de Vokalia et Consonantia, vivent les textes aveugles. Séparés, ils vivent dans Bookmarksgrove, juste au bord de la Semantics, un vaste océan de langue.</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Réservez Votre Chambre Maintenant</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body d-flex justify-content-center align-items-center" style="background-color: transparent;">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" class="img-fluid" width="100%" height="100%" alt="Image en Plein Écran">
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modalImage = document.getElementById('modalImage');
        var images = document.querySelectorAll('.f-services .img');
    
        images.forEach(function(image) {
            image.addEventListener('click', function() {
                var imgSrc = image.getAttribute('data-bs-image');
                modalImage.src = imgSrc;
            });
        });
    });
</script>
