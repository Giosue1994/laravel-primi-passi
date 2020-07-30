<!-- MAIN -->
@extends('pages.layouts.app')

@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection

@section('content')
  <!-- SEZIONE BECOME -->
    <section id="become">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>DIVENTA <span class="font-weight-bold">SVILUPPATORE WEB</span></h1>
            <h3 class="font-weight-bold">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>
            <ul>
              <li><span>6 mesi</span> di corso intensivo online in diretta</li>
              <li><span>Nessuna competenza</span> di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti <span>ti rimborsiamo</span></li>
            </ul>
          </div>

          <div class="col-6">
            <img src="{{ asset('/img/gif/pc-black-gif.gif') }}" alt="GIF">
          </div>
        </div>
      </div>
    </section>

    <!-- SEZIONE INFORMATIONS -->
    <section id="informations">
      <div class="container">
        <div class="row text-center">
          <div class="col-4">
            <h2>98%</h2>
            <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
          </div>

          <div class="col-4">
            <h2>€ 23.000</h2>
            <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
          </div>

          <div class="col-4">
            <h2>#1</h2>
            <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SEZIONE PARTNERS -->
    <section id="partners">
      <div class="container">
        <p>I nostri studenti sono stati assunti da:</p>
        <div class="row">
          <div class="col-4">
            <img src="{{ asset('/img/partners/facileit.png') }}" alt="Facile.it">
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/partners/oneday.png') }}" alt="Oneday">
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/partners/prima.png') }}" alt="Prima">
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img src="{{ asset('/img/partners/fabbrica-digitale-big.png') }}" alt="Fabbrica digitale">
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/partners/nephila.png') }}" alt="Nephila">
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/partners/rds.png') }}" alt="RDS">
          </div>
        </div>
      </div>
    </section>

    <!-- SEZIONE HOME-SCHOOL -->
    <section id="home-school">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>Una vera scuola a casa tua</h2>
            <p>
              Le lezioni si svolgono tutti i giorni, dal lunedì al venerdì,
              in <span>aula virtuale.</span>
            </p>
            <ul>
              <li>
                <span>Il mattino</span> è maggiormente dedicato alla teoria con
                lezioni in diretta. Comodamente da casa tua, puoi interagire con
                i tuoi compagni e con il <span class="font-italic">teacher</span>,
                proprio come se fossi a scuola.
              </li>
              <br>
              <li>
                <span>Il pomeriggio</span> è dedicato alle esercitazioni.
                In qualsiasi momento puoi chiedere supporto ai
                <span class="font-italic">tutor</span> per risolvere
                gli esercizi che ti abbiamo assegnato. Alza la mano e
                siamo subito da te!
              </li>
            </ul>
          </div>

          <div class="col-6">
            <img src="{{ asset('/img/gif/pc-black1-gif.gif') }}" alt="GIF">
          </div>
        </div>
      </div>
    </section>

    <!-- SEZIONE PRACTICAL -->
    <section id="practical">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="{{ asset('/img/boolflix.png') }}" alt="Boolflix">
          </div>

          <div class="col-6 text-right">
            <h2>Un programma fortemente pratico</h2>
            <p>Ogni concetto teorico che assimili è seguito da un esercizio.</p>
            <p>Il piano di studi pensato per incrementare le tue competenze trae spunto da <span>case study reali</span>, così da proporti esercizi <span>sempre nuovi</span>.</p>
            <p>Così sei pronto per entrare nel mercato del lavoro.</p>
          </div>

        </div>
      </div>
    </section>
@endsection
