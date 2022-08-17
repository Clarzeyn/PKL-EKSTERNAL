<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Siswa</h1>
        <a class="btn btn-success" href="javascript:void(0)" id="createNnewStudent">ADD</a>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th> 
                    <th>Agama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="studentForm" name="studentForm" class="form-horizontal">
                        <div class="form-group">
                            Nis : <br>
                            <input type="number" class="form-control" id="name" name="nis" placeholder="Masukan nis" required>
                        </div>
                        <div class="form-group">
                            Nama : <br>
                            <input type="text" class="form-control" id="name" name="nama" placeholder="Masukan Nama" required>
                        </div>
                        <div class="form-group">
                            Jenis Kelamin : <br>
                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="radio" name="jenis_kelamin" value="Laki-laki">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                        </div>
                        <div class="form-group">
                            No HP : <br>
                            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Masukan nohp" required>
                        </div>
                        <div class="form-group">Agama
                                <select class="form-select" name="agama">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                        </div>
                        <div class="form-group">
                            Tanggal Lahir : <br>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            Alamat : <br>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    
</body>
<script type="text/javascript">
    $(function(){
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        var table = $(".data-table"). DataTable{
            processing:true;
            serverSide:true;
            processing:true;
            ajax:"{{route('siswa.index')}}",
            columns:[
                {data:'DT_RowIndex',name:'DT_RowIndex'},
                {data:'nis',name:'nis'},
                {data:'nama',name:'nama'},
                {data:'jenis_kelamin',name:'jenis_kelamin'},
                {data:'nohp',name:'nohp'},
                {data:'agama',name:'agama'},
                {data:'tgl_lahir',name:'tgl_lahir'},
                {data:'alamat',name:'alamat'},
                {data:'aksi',name:'aksi', orderable: false, searchable: false},
            ]
        }
            $("#createNewStudent").click(function()){
            $('#ajaxModel'), modal('show');
        }
        })
    });
    </script>
</html>