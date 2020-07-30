<!-- MAIN -->
@extends('pages.layouts.app')

@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection

@section('content')
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

    <section id="second">
      <div class="container">
        <div class="row">
          <div class="col-12 practical">
            <h2>Un programma fortemente pratico</h2>
            <p>Ogni concetto teorico che assimili è seguito da un esercizio.</p>
            <p>Il piano di studi pensato per incrementare le tue competenze trae spunto da case study reali, così da proporti esercizi sempre nuovi.</p>
            <p>Così sei pronto per entrare nel mercato del lavoro.</p>
          </div>
        </div>
      </div>
    </section>
@endsection
