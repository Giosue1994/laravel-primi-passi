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

    <!-- SEZIONE PLACEMENT -->
    <section id="placement">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>Un dipartimento <span class="font-italic">placement</span> dedicato</h2>
            <p>Finito il corso, il nostro compito è quello di offrirti <span>un costante e attivo sostegno nella ricerca del lavoro</span>.</p>
            <p>A seconda della tua personalità e delle tue attitudini, <span>ti presentiamo alle aziende che più si avvicinano alle tue esigenze</span>, insegnandoti a utilizzare strumenti e metodi per rendere il tuo profilo accattivante per il mercato del lavoro.</p>
          </div>

          <div class="col-6">
            <img src="{{ asset('/img/studente.png') }}" alt="Studente">
          </div>
        </div>
      </div>
    </section>

    <!-- SEZIONE WHY -->
    <section id="why">
      <div class="container text-center">
        <h2>Perché Boolean?</h2>
        <p>Siamo con te dal primo giorno di corso alla firma del tuo contratto di assunzione.</p>
        <div class="row">
          <div class="col-4">
            <img src="{{ asset('/img/home.svg') }}" alt="Home">
            <h4>Impara da casa tua</h4>
            <p>8 studenti su 10 trovano che le lezioni in <span>aula virtuale</span> siano migliori rispetto alle lezioni tradizionali in classe.</p>
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/pen.svg') }}" alt="Pen">
            <h4>Corso pratico e interattivo</h4>
            <p>Più del 40% del tuo tempo è dedicato a <span>esercitazioni</span> e a case study. Intervieni in diretta e fai domande quando vuoi.</p>
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/chat.svg') }}" alt="Chat">
            <h4>Esercitazione assistita</h4>
            <p>Per ogni tuo dubbio, in aula virtuale c’è sempre un <span>tutor</span> pronto a darti una mano e a incoraggiarti.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img src="{{ asset('/img/bag.svg') }}" alt="Bag">
            <h4>Colloqui garantiti</h4>
            <p>Ti presentiamo alle nostre aziende partner e se entro 6 mesi non trovi lavoro, puoi usufruire della <span>garanzia Money Back</span></p>
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/code.svg') }}" alt="Code">
            <h4>Rivedi le lezioni</h4>
            <p>Sei stato assente o non hai capito? Niente paura, hai a disposizione le <span>registrazioni</span> di ogni lezione.</p>
          </div>

          <div class="col-4">
            <img src="{{ asset('/img/light.svg') }}" alt="Light">
            <h4>Un'esperienza condivisa</h4>
            <p>Segui il corso insieme a ragazzi con la tua stessa motivazione e la tua stessa determinazione. <span>Insieme</span> si va lontano.</p>
          </div>
        </div>
      </div>
    </section>
@endsection
