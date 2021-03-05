@extends('master')
	@section('content')
	<div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Label : {{$post->judul}}</span>
                <span class="info-box-number">Tanggal dibuat : {{$post->tanggal_dibuat}}</span>
                <span class="info-box-number">Pertanyaan : <p>{{$post->isi}}</p></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
	@endsection