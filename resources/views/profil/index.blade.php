@extends('layout.main')

@section('title','profil')

@section('container')



<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-26">

        <h1><i class="fas fa-user-tie mr-3"></i>profil</h1><hr class="bg-dark">
        <style>
            body {
                background-color: #e8e8e8;
            }
            .kartu {
                width: 800px;
                margin: 0 auto;
                margin-top: 70px;
                    box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
            transition: all .3s;
            } 
            .foto {
                padding: 20px;
            }
            tbody {
            font-size: 20px;
            font-weight: 300;
            }
            .biodata {
                margin-top: 30px;
            }
        </style>
        <div class="container">
            <div class="card kartu">
                <div class="row">
                <div class="col-md-4">
                <div class="foto">
                    <img width="160px" src="{{ url('').'/'.$manager->foto_manager }}">
                </div>
                </div>
                <div class="col-md-8 kertas-biodata">
                    <div class="biodata">
                    <table width="100%" border="0">
                <tbody><tr>
                    <td valign="top">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                    <tbody>
                        <tr>
                        <td width="25%" valign="top" class="textt">Nama</td>
                            <td width="2%">:</td>
                            <td style="color: rgb(118, 157, 29); font-weight:bold">Bayu Afrizatul Rizki</td>
                        </tr>
                    <tr>
                        <td class="textt">Jenis Kelamin</td>
                            <td>:</td>
                            <td>Laki-Laki</td>
                        </tr>
                    <tr>
                        <td class="textt">Tempat Lahir</td>
                            <td>:</td>
                            <td>Airmolek,Riau</td>
                        </tr>
                    <tr>
                        <td class="textt">Tanggal Lahir</td>
                            <td>:</td>
                            <td>31/08/1997</td>
                        </tr>
                    <tr>
                        <td class="textt">Fakultas</td>
                            <td>:</td>
                            <td>Teknik</td>
                        </tr>
                    <tr>
                        <td valign="top" class="textt">Prodi</td>
                            <td valign="top">:</td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                        <td valign="top" class="textt">Blog</td>
                            <td valign="top">:</td>
                            <td>www.kochengoren.net</td>
                        </tr>
                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
                </div>
                </div>
                </div>
            </div>
        </div>

	</div>
</div>

@endsection