@extends('layouts.app')
@section('title','Foydalanuvchi sahifasi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background: #f6f6f6; height: 100px; border-radius: 10px; border-style: groove">
            
            <div style="margin-top: 10px;">

                <div style="display: inline-block">
                    
                    <form action="">
                        <input type="text" name="search" placeholder="F.I.O">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></i>Izlash</button>
                    </form>
                </div>

                    

                <div style="display: inline-block; width: 200px">
                    <form action="">
                    <label for="">Guruh bo'yicha</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>  

                <div style="display: inline-block; width: 200px">
                    <label for="">Berkitilgan xodim</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>  

                <div style="display: inline-block; width: 200px">
                    <label for="">Kurs bo'yicha</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>  

                <div style="display: inline-block">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-funnel-fill"></i> Filter</button>
                    
                </div>
            </form>

            <button type="button" class="btn btn-primary"><i class="bi bi-file-earmark-excel-fill"></i> Excel</button>
            <button type="button" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Qo'shish</button>

               </div>


            

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <!--Asosiy qism -->
                          <br>
                          <br>  
                   <div style="background: #f6f6f6;">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">№</th>
                            <th scope="col">F.I.O</th>
                            <th scope="col">Guruh</th>
                            <th scope="col">Yo'nalish</th>
                            <th scope="col">Berkitilgan xodim</th>
                            <th scope="col">Manzil</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Amallar</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($readers as $reader)
                          <tr>
                            <th scope="row">{{ ($readers->currentpage()-1)*$readers->perpage() +  $loop->index+1 }}</th>
                            <td><a href="{{route('readers.show',$reader->id)}}">{{ $reader->name }}</a></td>
                            <td>{{ $reader->group }}</td>
                            <td>{{ $reader->special }}</td>
                            <td>{{ $reader->teacher }}</td>
                            <td>{{ $reader->address }}</td>
                            <td>{{ $reader->phone }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" style="margin: 5px"><i class="bi bi-pencil-square"></i>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </button></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                      {{$readers->links()}}


                   </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
