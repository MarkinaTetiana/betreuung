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
                    <li>Eine Plattform zur Suche nach neuen Bekanntschaften und Freundschaften für Seniorinnen und Senioren</li>
                    <li>Die Vermittlung von Leihomas und Leihopas zur liebevollen Betreuung von Kindern</li>
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
    

                <p>Unsere Mission ist es, Menschen in allen Lebenslagen miteinander zu verbinden – mit Herz, Vertrauen und gegenseitiger Hilfe.</p>
                <p><strong>Bleiben Sie gespannt – wir halten Sie auf dem Laufenden!</strong></p>
            </div>

        </div>

    </div>

    {{-- Formular --}}
<section id="coming-soon-form">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 bg-light p-4 rounded">
                <h2 class="mb-4">Benachrichtigung bei Start</h2>
                <form >
                    <div class="mb-3">
                        <label for="email" class="form-label">Ihre E-Mail-Adresse</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>

                    <fieldset class="mb-3">
                        <legend class="col-form-label pt-0">Interessensgebiete</legend>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="pflege" id="service1">
                                <label class="form-check-label" for="service1">Seniorenbetreuung</label>
                            </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="haushalt" id="service2">
                            <label class="form-check-label" for="service2">Suche nach Freunden</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kinder" id="service3">
                            <label class="form-check-label" for="service3">Kinderbetreuung</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="fahrdienst" id="service4">
                            <label class="form-check-label" for="service4">Tiere betreuen</label>
                        </div>
                    </fieldset>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-50">Jetzt anmelden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection 