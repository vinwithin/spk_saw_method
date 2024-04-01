@extends('layout/index')
@section('nilai')
<div class="d-flex card shadow p-3">
      
    <div class="table-responsive col-lg-10 ">
        

        <form action="/artikel" method="get" class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..."
                    name="cari">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
      
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                   
                   
                   
                    
                   
                   
                </tr>
            </thead>
            <tbody>
                <tr>

                    @foreach ($alternatif as $item)               
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $item->nama_alternatif }}</th>
                   
                   
                    
                    
                </tr>
                @endforeach
              
                </tr>
            </tbody>
        </table>
        
    </div>
    
</div>
@endsection