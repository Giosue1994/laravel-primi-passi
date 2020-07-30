<!-- MAIN -->
@extends('pages.layouts.app')

@section('title')
  FAQ-Boolean Careers
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-6">

        @foreach ($faqs_list_left as $faq)
          <h2>{{ $faq['question'] }}</h2>
          <p>{{ $faq['answer'] }}</p>
        @endforeach

      </div>
    </div>
  </div>
@endsection
