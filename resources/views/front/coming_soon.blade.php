@extends('layouts.front.front')

@section('title', 'Coming Soon')

@section('content')
@include('layouts.front.hero')

<div class="container">
  <div class="row">
    <div class="col-md-12 mb-4">
      <h1>Coming Soon...</h1>
      <p>Wir arbeiten hart daran, etwas Großartiges zu schaffen – bald mehr dazu...</p>
      <p>Wir freuen uns, Ihnen bald ein innovatives Vermittlungsportal für Betreuungskräfte präsentieren zu können!</p>
      <p>Hier bei SenioAngel setzen wir uns dafür ein, Menschen und Betreuungskräfte zusammenzubringen, um eine liebevolle und kompetente Betreuung zu gewährleisten.</p>

      <p class="mt-4"><strong>Doch das ist erst der Anfang!</strong></p>
      <p>Bald ermöglichen wir auch:</p>
      <ul>
        <li>Kompetente und liebevolle Betreuung für Seniorinnen und Senioren im Alltag</li>
        <li>Eine Plattform zur Suche nach neuen Bekanntschaften und Freundschaften für Seniorinnen und Senioren</li>           <li>Die Vermittlung von Leihomas und Leihopas zur liebevollen Betreuung von Kindern</li>
        <li>Die Unterstützung bei der Betreuung von Haustieren, damit Ihre Lieblinge in guten Händen sind</li>
      </ul>

                
      <div class="row g-4">
                
              
        <div class="col-md-3">
          <div class="card border-primary h-100" style="max-width: 100%;">
            <div class="card-header bg-transparent border-primary text-primary">Seniorenbetreuung</div>
            <div class="card-body ">
              <h5 class="card-title">Individuelle Betreuung</h5>
              <p class="card-text">
                          Kompetente und liebevolle Unterstützung für Seniorinnen und Senioren im Alltag – zu Hause und unterwegs.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card border-primary h-100" style="max-width: 100%;">
            <div class="card-header bg-transparent border-primary text-primary">Freunde finden</div>
            <div class="card-body ">
              <h5 class="card-title">Neue Bekanntschaften</h5>
              <p class="card-text">
                          Eine Plattform für Seniorinnen und Senioren, um neue Kontakte und Freundschaften zu knüpfen.
              </p>
            </div>
          </div>
        </div>
                  
        <div class="col-md-3">
          <div class="card border-primary h-100" style="max-width: 100%;">
            <div class="card-header bg-transparent border-primary text-primary">Leihoma & Leihopa</div>
            <div class="card-body ">
              <h5 class="card-title">Kinder liebevoll betreuen</h5>
              <p class="card-text">
                          Ältere Menschen unterstützen Familien durch herzliche Kinderbetreuung – wie echte Großeltern.
              </p>
            </div>
          </div>
        </div>
                  
        <div class="col-md-3">
          <div class="card border-primary h-100" style="max-width: 100%;">
            <div class="card-header bg-transparent border-primary text-primary">Haustierbetreuung</div>
            <div class="card-body ">
              <h5 class="card-title">Senioren helfen Tieren</h5>
              <p class="card-text">
                          Haustiere in guten Händen: Senioren kümmern sich liebevoll und zuverlässig um Tiere im Alltag.
              </p>
            </div>
          </div>
        </div>
              
        <div class="col-12">
          <p>Unsere Mission ist es, Menschen in allen Lebenslagen miteinander zu verbinden – mit Herz, Vertrauen und gegenseitiger Hilfe.</p>
          <p><strong>Bleiben Sie gespannt – wir halten Sie auf dem Laufenden!</strong></p>
        </div>

      </div>

    </div>
  </div>

<!-- coming soon form  two columns, submit Button in right column input in left column -->
  <div class="container" id="coming-soon-form">
    <div class="row justify-content-center">
      <div class="card col-12 col-md-6 p-4 mx-auto">     
          <!-- multiselect interests as checkboxes -->
        <div class="col-12  bg-light mb-3 p-4 ">
            <label class="form-label">Interessensgebiete</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="pflege" id="interest1">
              <label class="form-check-label" for="interest1">Seniorenbetreuung</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="freunde" id="interest2">
              <label class="form-check-label" for="interest2">Freunde finden</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="kinder" id="interest3">
              <label class="form-check-label" for="interest3">Kinderbetreuung</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="haustiere" id="interest4">
              <label class="form-check-label" for="interest4">Tiere betreuen</label>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating">
              <input type="email" class="form-control" id="email" placeholder="Bitte geben Sie Ihre E-Mail-Adresse ein" required>
              <label for="email" class="form-label">Ihre E-Mail-Adresse</label>
            </div>
          </div>
          <div class="col-md-6 text-end   ">
            <button type="submit" class="btn btn-primary  py-3">Benachrichtigung bei Start</button>
          </div>
        </div>
      </div>
    </div>  

  </div>

</div>


@endsection 