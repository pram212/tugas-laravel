@extends('master')
	@section('content')
	<div class="card card-primary m-5">
        <div class="card-header">
			<h3 class="card-title">Tanyakan Sesuatu! <small></small></h3>
        </div>
			<form action="/pertanyaan" method="post">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    	<label for="judul">Tentang</label>
                    	<input type="text" name="judul" class="form-control " id="judul" placeholder="Contoh: Laravel" value="{{old('judul','')}}">
                    	@if ($errors->any())
						    <span  class="text-danger ml-2" style="font-size: 12px;"><i>{{"oops! tolong di isi ya!"}}</i></span>
						@endif
                  	</div>
                  	<div class="form-group">
                       	<label>Pertanyaan</label>
                    	<textarea class="form-control " name="isi" rows="3" placeholder="Tulis pertanyaan ..." value="{{old('isi', '')}}"></textarea>
                    	@if ($errors->any())
						    <span  class="text-danger ml-2" style="font-size: 12px;"><i>{{"oops! tolong diisi ya!"}}</i></span>
						@endif
                    	
                    </div>
                </div>
                <!-- /.card-body -->
            <div class="card-footer">
               	<button type="submit" name="create" class="btn btn-primary">Kirim</button>
            </div>
        </form>
	</div>
	@endsection