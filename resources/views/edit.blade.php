@extends('master')
  @section('content')
    <div class="col-12">
      <div class="info-box bg-gradient-primary">
        <span class="info-box-icon"><i class="fas fa-comments"></i></span>
        <div class="info-box-content">
          <form role="form" action="/pertanyaan/{{$post->id}}" method="post">
          @csrf
          @method('PUT')
            <span class="info-box-text">Label : <input type="text" name="judul" class="form-control" value="{{$post->judul}}"></span>
            <span class="info-box-number">Waktu Posting : <input type="text" name="tanggal_dibuat" class="form-control" value="{{$post->tanggal_dibuat}}" readonly=""></span>
            <span class="info-box-number">Isi : <br>
              <textarea name="isi" class="form-control">{{$post->isi}}</textarea>
            </span>
            <span class="progress-description mt-3">
              <button type="submit" name="edit" class="btn btn-sm bg-light btn-success">Edit</button>
            </span>
          </form>
        </div>
      </div>
    </div>
  @endsection 

    