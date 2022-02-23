@extends('layouts.master')
@section('content')
    <div class="row">

        <!-- Modal -->
        <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filterModalLabel">Filter Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="return false">
                            <input class="form-control" type="date" name="start_date" id="startDate">
                            <br>
                            <input class="form-control" type="date" name="end_date" id="endDate">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="filtering()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#filterModal">
                    Filter Transaksi
                </button>
                <h2>Daftar Transaksi</h2>
            </div>
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
        </tr>
        <tbody id="loadDataTransaksi">

        </tbody>
    </table>        
@endsection
@section('cjs')
    <script>
        function hitData(url, data, type) {
            return new Promise((resolve, reject)=>{
                $.ajax({
                    url,
                    data,
                    type,
                    headers:{
                        'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                    }, 
                    success:(respons)=>{
                        resolve(respons)
                    },
                    error:(error)=>{
                        reject(error)
                    }
                })
            })
        }

        async function getData(url = '/get-transaksi') {
            try {
                const respons = await hitData(url, null, 'GET')
                $('#loadDataTransaksi').html(respons);
            } catch (error) {
                console.log(error);
            }
        }

        function filtering() {
            var startDate = $('#startDate').val()
            var endDate = $('#endDate').val()
            getData(`/get-transaksi?start_date=${startDate}&end_date=${endDate}`, null, 'GET')
            $('#filterModal').modal('hide')
        }

        getData();
    </script>
@endsection