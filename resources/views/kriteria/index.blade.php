@extends('layout/index')
@section('nilai')
<div class="d-flex card shadow p-3">
      <h1 class="p-2">Data Alternatif</h1>
    <div class="table-responsive col-lg-10 ">
        

        
      
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                   
                    <th scope="col">Atribut</th>
                    <th scope="col">Bobot</th>
                   
                    
                   
                   
                </tr>
            </thead>
            <tbody>
                <tr>

                    @foreach ($kriteria as $item)               
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $item->nama_kriteria }}</th>
                    <th>{{ $item->atribut}}</th>
                    <th>{{ $item->bobot}}</th>
                   
                    
                    
                </tr>
                @endforeach
              
                </tr>
            </tbody>
        </table>
        
    </div>
    
</div>
@endsection