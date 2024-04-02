@extends('layout/index')
@section('nilai')
<div class="d-flex card shadow p-3">
      <h1 class="p-2">Data Nilai</h1>
    <div class="table-responsive col-lg-10 ">
       

        
      
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    @foreach ($kriteria as $item)
                    <th scope="col">{{ $item->nama_kriteria }}</th>
                   
                    @endforeach
                   
                   
                </tr>
            </thead>
            <tbody>
                <tr>

                    @foreach ($nilais as $key => $val)               
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    {{-- {{dd($val)}} --}}
                    {{-- @foreach ($alternatif as $item)
                    <td>{{ $item->id }}</td>
                    
                   
                    @endforeach     --}}
                    <td>{{ $val[1]->alternatif->nama_alternatif }}</td>
                    @foreach ($val as $k => $v )
                        <td>{{ $v->nilai }}</td>
                    @endforeach
                    {{-- <td>
                        <a href="/artikel/detail/{{$post->slug}}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                        <a href="/artikel/sunting/{{$post->slug}}" class="badge bg-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="/artikel/delete/{{$post->slug}}" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$post->slug}}"><i class="fa-solid fa-trash-can"></i></a>
                        <div class="modal fade" id="exampleModal{{$post->slug}}" tabindex="1" aria-labelledby="exampleModalLabel{{$post->slug}}" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel{{$post->slug}}">Konfirmasi</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Apakah anda yakin menghapus artikel ini?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                  <a href="/artikel/hapus/{{$post->slug}}" class="btn btn-primary">Iya</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td> --}}
                </tr>
                @endforeach
              
                </tr>
            </tbody>
        </table>
        
    </div>
    
</div>
@endsection