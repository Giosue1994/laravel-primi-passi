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
