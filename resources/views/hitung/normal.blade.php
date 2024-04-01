@extends('layout/index')
@section('nilai')
    <div class="d-flex card shadow p-3">

        <div class="table-responsive col-lg-12">


            <form action="/artikel" method="get" class="form-inline mr-auto w-100 navbar-search justify-content-end mb-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." name="cari">
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
                        < @foreach ($kriterias as $kriteria)
                            <th scope="col">{{ $kriteria->id_kriteria }}</th>
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
@endsection
