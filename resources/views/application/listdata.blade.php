@extends('layout.main')
@section('content')


<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5" >
        <div class="w-100 me-4">
       <h5>
        <div class="fw-blood">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Daftar inventoris
        </div>
       </h5>
</div>

       <!-- form pencarian -->
       </div>
       <div class="d-flex mx-5 mt-2 px-5">
        <div class="col-4">
            <div class="form-group mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                    <input type="text" placeholder="cari aset" class="form-control">
                </div>

       </div>

       <div class="row">
           <div class="col-4">
               <button class="btn btn-light"><i class="fas fa-filter"></i> Filter</button>
               <button class="btn btn-light"><i class="fas fa-trash"></i></button>
           </div>
           <div class="col-2 justify-content-end">
               <button class="btn btn-light"><i class="fas fa-add>TambahS</i></button>
</div>

    <div class="content">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama aset</th>
                    <th scope="col">jenis aset</th>
                    <th scope="col">harga satuan (IDR.)</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>mark</td>
                    <td>otto</td>
                    <td>50000</td>
                    <td>
                        <span class="btn btn-sm btn-outline-success">aktif</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-dark"><i class="fas fa-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>mark</td>
                    <td>otto</td>
                    <td>50000</td>
                    <td>
                    <span class="btn btn-sm btn-outline-success">aktif</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-dark"><i class="fas fa-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>mark</td>
                    <td>otto</td>
                    <td>50000</td>
                    <td>
                    <span class="btn btn-sm btn-outline-success">aktif</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-dark"><i class="fas fa-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>