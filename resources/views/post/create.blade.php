@extends('Components.app')

@section('content')
  <form action="{{ route('post.store') }}" method="POST">
    @csrf

    <div id="">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter the notification title">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control" name="description" placeholder="Enter the notification description"></textarea>
    </div>

    <button class="btn btn-dark" type="submit">Send Notification</button>
  </form>
@endsection

@section('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
@endsection
