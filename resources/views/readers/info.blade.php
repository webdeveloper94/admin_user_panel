@extends('layouts.app')
@section('title','Foydalanuvchi sahifasi')
@section('content')
<div class="container">
    <div align="center">
        <div style="width: 400px; height: 100px; border-style: groove;">
            <p align="center">
                <strong style="font-size: 50px; margin-top: 200px;">
                    Davomat
                   @foreach ($readers as $reader)
                       {{ $reader->name }}
                   @endforeach
                </strong>
            </p>

        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sentyabr</th>
                <th scope="col">Oktyabr</th>
                <th scope="col">Noyabr</th>
                <th scope="col">Dekabr</th>
                <th scope="col">Yanvar</th>
                <th scope="col">Fevral</th>
                <th scope="col">Mart</th>
                <th scope="col">Aprel</th>
                <th scope="col">May</th>
                <th scope="col">Iyun</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>+</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              
            </tbody>
          </table>







    </div>


</div>









@endsection