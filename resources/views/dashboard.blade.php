@extends('layouts.full-layout')
@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
    <div class="main-content">
    <div class="content-wrapper">
    <section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Votre plateforme Geomapping !</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Bienvenue <span class="content-header">{{Auth::user()->name}}</span></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Province</a></span>
                
                    <span class="line-height-2 d-block overflow-hidden">{{Auth::user()->province}}</span>
                  </li>
                  
                </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Email</a></span>
                   
                    <span class="line-height-2 d-block overflow-hidden">{{Auth::user()->email}}</span>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <section id="columns">
            <div class="row">
            <div class="col-md-12 mt-1">
            <div class="card-columns">

        
            <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/dsr.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Diagnostique foncier</h4>
              <p class="card-text">Diagnostique foncier des secteurs remembrés, immeubles collectifs et cooperatives de la reforme agraire.</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>

        
        
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/vocation.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Carte de vocation agricole</h4>
              <p class="card-text">Classification des terres en trois zones de vocation agricoles.</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/occupation.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Carte d'occupation du sol</h4>
              <p class="card-text">Carte d'occupation du sol a partir du traitement des images sattélitaires.</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/pedo.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Carte pédologique</h4>
              <p class="card-text">Carte pédologique elaboré a l'echelle de la region TTH.</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/GDB.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Géodatabase</h4>
              <p class="card-text">Données collecté durant la première phase, projet agricols, documents d'urbanisme, espaces sylvopastorals ...</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="app-assets/img/carte/ortho.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Orthophoto-plan</h4>
              <p class="card-text">Orthophoto-plan par drone du périmètre d'asjen.</p>
              <a class="btn btn-outline-success">Détails</a>
            </div>
          </div>
        </div>
</div>
        </div>
        </div>
</div>
</section>
</div>
    </div>
</div>
@endsection