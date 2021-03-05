
@extends('master')
	@section('content')
		<div class="card m-5">
			@if(session('success'))
				<div class="alert alert-success">
					{{session('success')}}
				</div>
			@endif
            <div class="card-header bg-dark overflow-auto">
                <h3 class="card-title">
                	Forum Diskusi
                </h3>
                <a href="/pertanyaan/create" class="btn btn-success btn-sm float-right " style="font-size: 14px;">Tulis</a>
            </div>
              <!-- ./card-header -->
              <div class="card-body p-0">
                <table class="table table-hover">
                  <tbody>
                  	@forelse ($pertanyaan as $key => $quetion)
                  		<tr>
	                      	<td class="border-0">
	                      		<h6 class="border-bottom pb-2 overflow-auto">
	                      			<b class="text-info">{{ $quetion->judul }}</b>
	                      			<form action="/pertanyaan/{{$quetion->id}}" method="post" class="float-right">
	                      				@csrf
	                      				@method('DELETE')
	                      				<input type="submit" value="Hapus" class="btn btn-sm btn-danger">
	                      			</form>
	                      			<a href="/pertanyaan/{{$quetion->id}}/edit" class=" float-right  mr-3 btn btn-sm btn-info" style="font-size: 14px;">Edit</a>
	                      			<a href="/pertanyaan/{{$quetion->id}}" class="float-right  mr-3 btn btn-sm btn-warning" style="font-size: 14px;">Rincian</a>
	                      		</h6>
	                      		<p class="ml-3">{{ $quetion->isi }}</p>
	                      		<span class="float-right text-success" style="font-size: 14px;">{{ $quetion->tanggal_dibuat}}</span>
	                  		</td>
	                    </tr>
	                    <tr data-widget="expandable-table" aria-expanded="false">
	                      <td>
	                        <i style="font-size: 14px;">Komentar...</i>
	                      </td>
	                    </tr>
	                    <tr class="expandable-body d-none">
	                      	<td>
	                        	<div class="p-0" style="display: none;">
	                          		<table class="table table-hover">
	                            		<tbody>
	                              			<tr data-widget="expandable-table" aria-expanded="false" style="font-size: 14px; text-align: justify;">
	                                			<td>
	                                  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                  				<span class="float-right text-success">12:00</span>
	                                			</td>
	                              			</tr>
	                            		</tbody>
	                          		</table>
	                        	</div>
	                      	</td>
	                	</tr>
	                	@empty
	                	<center><p class="mt-3">Belum ada pertanyaan masuk.</p></center>
	                @endforelse
                  	</tbody>
                </table>
           	</div>
              <!-- /.card-body -->
        </div>
	@endsection