            <!--category Table  -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">



                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Categories</h6>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                            <p>{{ $message }}</p>
                            </div>
                            @endif
                            <center> <a  href="/admin/category/new" class="btn btn-outline-success m-2">Add Category</a> </center>
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Id Parent</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($i = 1)
                                            @foreach($categories as $categorie)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>{{$categorie -> name}}</td>
                                                <td>{{$categorie -> namep }}</td>   

    
        
                                                <td>  <!--.$categorie->id-->
                                                    <a  href="{{url('/admin/category/edit/'.$categorie->id)}}"  class="btn btn-outline-warning m-2">Edit</a>
                                                    <a href="{{ url('/softdelete/category/'.$categorie->id) }}"  class="btn btn-outline-danger m-2">Delete </a> 
                                                </td>
                                            </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->















            <!--trach part  -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">



                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">trash list</h6>                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Id Parent</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($i = 1)
                                            @foreach($trachCat as $categorie)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>{{$categorie -> name}}</td>
                                                <td>{{$categorie -> namep }}</td>   

    
        
                                                <td>  
                                                    <a  href="{{url('/admin/category/restore/'.$categorie->id)}}"  class="btn btn-outline-warning m-2">Restore</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

