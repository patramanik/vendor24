@extends('layouts.master')
@section('title', 'Publish')
@section('content')
    <div class="container-fluid px-4">
        <h2 class="mt-4">Category Publish</h2>

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="row">
            {{-- start not published catagorys --}}
            <div class="card col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 m-3 ">
                <h4 class="m-2">Not publish</h4>
                <div class="table-responsive-col  table-bordered">
                    <table class="table  table-striped table-hover" slot="">
                        <thead class="bg-dark text-bg-dark ">
                            <tr>
                                <th>Sno.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Acction</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($catagorys as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <img src="{!!$data->image!!}" class="img-thumbnail"
                                            alt="imges" height="50px" width="70px">
                                    </td>
                                    <td>
                                        @if ($data->status == 1)
                                            <span class="text-wrap" style="color: green">Publish</span>
                                        @else
                                            <span style="color: red">Not Publish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/publisg_catagory/' . $data->id) }}" type="button"
                                            class="btn btn-success btn-sm" style="margin: 2px 2px 2px 2px">publish</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- End not published catagorys --}}
            <div class="card col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 m-3">
                <h4 class="m-2"> Published</h4>
                <div class="table-responsive-col  table-bordered">
                    <table class="table  table-striped table-hover" slot="">
                        <thead class="bg-dark text-bg-dark ">
                            <tr>
                                <th>Sno.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Acction</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($approval as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <img src="{!!$data->image!!}" class="img-thumbnail"
                                            alt="imges" height="50px" width="70px">
                                    </td>
                                    <td>
                                        @if ($data->status == 1)
                                            <span class="text-wrap" style="color: green">Publish</span>
                                        @else
                                            <span style="color: red">Not Publish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/not_publisg_catagory/' . $data->id) }}" type="button"
                                            class="btn btn-danger btn-sm" style="margin: 2px 2px 2px 2px">Hide</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
