@extends('pagesCrud.layouts.head') 

   <h1>Add Page</h1>
   <div class="container">
   
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Add New Client</h2>
                    <div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('crudPage.update' , $product->id)}}" method="post" >
                          @method('put')
                        @csrf
                        <div class="row">
                          
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{old('name') ?? $product->name}}" placeholder="Type here" class="form-control">
                                    @error('name')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" value="{{old('email') ?? $product->email}}" placeholder="Type here" class="form-control">
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="password" value="{{old('password') ?? $product->password}}" placeholder="Type here" class="form-control">
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                               
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
    
                        <div class="text-end">
                            <button type="submit" class="btn btn-md rounded font-sm hover-up btn-success">Update</button>
                        </div>
    
                    </form>
    
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> <!-- content-main end// -->
    
    <div class="row">
       
           
 @extends('pagesCrud.layouts.footer') 
