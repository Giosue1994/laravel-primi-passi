<!-- MAIN -->
@extends('pages.layouts.app')

@section('title')
  FAQ-Boolean Careers
@endsection

@section('content')
  <section id="faq">
    <div class="container-fluid">
      <div class="title">
        <h2>Domande frequienti</h2>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="#">Contattaci</a> e saremo felici di darti una mano.</p>
      </div>
      <div class="row">
        <div class="question col-xs-12 col-lg-6">
          <h2>Prima del corso</h2>
          @foreach ($faqs_list_left as $faq)
            <div class="faq-box">
              <h3>{{ $faq['question'] }}<i class="show fas fa-plus"></i></h3>
              <p class="answer-toggleable">{{ $faq['answer'] }}</p>
            </div>
          @endforeach
        </div>

        <div class="answer col-xs-12 col-lg-6">
          <h2>Dopo il corso</h2>
          @foreach ($faqs_list_right as $faq)
            <div class="faq-box">
              <h3>{{ $faq['question'] }}<i class="show fas fa-plus"></i></h3>
              <p class="answer-toggleable">{{ $faq['answer'] }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
