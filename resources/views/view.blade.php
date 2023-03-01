@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
        <div style="text-align: center">
          <h1 id="home">{{ $movie->movie_title }}</h1>
            <div class="mt-2 mb-2">
              <img src="{{ asset('/storage/' . $movie->movie_image) }}" height="500px">
            </div>
          <h3>วันที่ฉาย : {{ date('d-m-Y', strtotime($movie->movie_release_date)); }}</h3>
        </div>
      </div>
      <h1 id="home">รีวิว</h1>
      <div class="container">
        @foreach($comments as $comment)
        <div class="row border border-success border border-2 rounded pt-2 mt-2">
            <div class="col-6">
              <p>ชื่อผู้รีวิว : {{ $comment->name }}</p>
            </div>
            <div class="col-6" style="text-align: end">
              <p>คะแนน : {{ $comment->comment_score }}</p>
            </div>
            <div class="col-6">
              <p>ข้อความรีวิว : {{ $comment->comment_text }}</p>
            </div>
          </div>
        @endforeach
        @guest
        <div class="row border border-success border border-2 rounded pt-2 mt-2">
          <div class="col-12">
            <p>กรุณาเข้าสู่ระบบเพื่อรีวิว</p>
          </div>
        @else
        <form action="{{ route('commentsave') }}" method="post">
          @csrf
          <input type="hidden" value="{{ $movie->movie_id }}" name="movie_id">
        <div class="row border border-success border border-2 rounded pt-2 mt-2">
          <div class="col-6">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="comment" id="comment" placeholder="Comment" aria-label="Comment">
            </div>
          </div>
          <div class="col-6">
            <div class="input-group mb-3">
              <label class="input-group-text" for="score">คะแนน</label>
              <select class="form-select" id="score" name="score">
                <option value="0" selected>ไม่ให้คะแนน</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="col-12" style="text-align: end">
            <button type="submit" class="btn btn-success mb-2">รีวิว</button>
          </div>
        </div>
        </form>
        @endguest
      </div>
     
    <!-- END OF MAIN CONTAINER -->
  </div>
</div>
@endsection
