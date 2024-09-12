<section class="ftco-section ftco-no-pb ftco-no-pt ftco-booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/')}}#" class="booking-form">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                            <div class="form-group ps-4 border-0">
                                <label for="#">Arrivée</label>
                                <div class="form-field">
                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                    <input type="text" class="form-control arrival_date" placeholder="Date d'arrivée">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                            <div class="form-group ps-4">
                                <label for="#">Départ</label>
                                <div class="form-field">
                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                    <input type="text" class="form-control departure_date" placeholder="Date de départ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                            <div class="form-group ps-4">
                                <label for="#">Chambres</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name id class="form-control">
                                            <option value>Suite</option>
                                            <option value>Chambre Familiale</option>
                                            <option value>Chambre Classique</option>
                                            <option value>Chambre Supérieure</option>
                                            <option value>Chambre de Luxe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                            <div class="form-group ps-4">
                                <label for="#">Invités</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name id class="form-control">
                                            <option value>1 Personne</option>
                                            <option value>2 Personnes</option>
                                            <option value>3 Personnes</option>
                                            <option value>4 Personnes</option>
                                            <option value>5 Personnes</option>
                                            <option value>6-9 Personnes</option>
                                            <option value>10+ Personnes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg d-flex">
                            <div class="form-group d-flex border-0">
                                <div class="form-field w-100 align-items-center d-flex">
                                    <a href="{{url('/')}}#" type="submit" class="d-flex justify-content-center align-items-center align-self-stretch form-control btn btn-primary py-lg-4 py-xl-0"><span>Vérifier la Disponibilité</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>