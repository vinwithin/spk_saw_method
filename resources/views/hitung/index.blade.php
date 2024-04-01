@extends('layout/index')
@section('nilai')
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
        <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade show in active ">
            <div class="d-flex card shadow p-3">

                <div class="table-responsive col-lg-">


                    <form action="/artikel" method="get"
                        class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">

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
        <div id="menu1" class="tab-pane fade  ">
            <div class="d-flex card shadow p-3">

                <div class="table-responsive col-lg-">


                    <form action="/artikel" method="get"
                        class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">

                    </form>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>


                                @foreach ($kriterias as $kriteria)
                                    <th>{{ $kriteria->nama_kriteria }}({{ $kriteria->atribut }}:
                                        {{ $kriteria->bobot }})</th>
                                @endforeach
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normal as $key => $val)
                                <tr>
                                    <td>{{ $key }}</td>
                                    @foreach ($val as $k => $v)
                                        <td>{{ round($v, 4) }}</td>
                                    @endforeach
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div id="menu2" class="tab-pane fade  ">
            <div class="d-flex card shadow p-3">

                <div class="table-responsive col-lg-">


                    <form action="/artikel" method="get"
                        class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">

                    </form>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>


                                @foreach ($kriterias as $kriteria)
                                    <th>{{ $kriteria->nama_kriteria }}({{ $kriteria->atribut }}:
                                        {{ $kriteria->bobot }})</th>
                                @endforeach
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($terbobot as $key => $val)
                            <tr>
                                <td>{{ $key }}</td>
                                @foreach ($val as $k => $v)
                                    <td>{{ round($v, 4) }}</td>
                                @endforeach
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="d-flex card shadow p-3">

                <div class="table-responsive col-lg-">


                    <form action="/artikel" method="get"
                        class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">

                    </form>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total</th>


                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rank as $key => $val)
                            <tr>
                                <td>{{ $val }}</td>
                                <td>{{ $key }}</td>
                                <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                                <td>{{ round($total[$key], 4) }}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
