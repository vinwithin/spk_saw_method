@extends('layout/index')
@section('nilai')

    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
        <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade show in ">
            <div class="d-flex card shadow p-3">

                <div class="table-responsive col-lg-">
        
        
                    <form action="/artikel" method="get" class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">
                        
                    </form>
        
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
        
                                @foreach ($kriterias as $kriteria)
                                    <th>{{ $kriteria->nama_kriteria }}({{ $kriteria->atribut }}:
                                        {{ $kriteria->bobot }})</th>
                                @endforeach
                                <th scope="col">Min</th>
                                <th scope="col">Max</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilais as $key => $val)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                                    @foreach ($val as $k => $v)
                                        <td>{{ $v }}</td>
                                    @endforeach
                                    <td>{{ $minmax[$key]['min'] }}</td>
                                    <td>{{ $minmax[$key]['max'] }}</td>
        
                                </tr>
                            @endforeach
        
        
                        </tbody>
                    </table>
        
                </div>
        
            </div>
        </div>
        <div id="menu1" class="tab-pane show fade in active ">
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="tab-pane fade show ">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
