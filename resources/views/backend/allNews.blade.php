@extends('layouts.BackendLayout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
        
                        {{-- ! Table Start  --}}
        
                        <table class="table">
                            <tr>
                                <th>Sl.</th>
                                <th>News Heading</th>
                                <th class="text-start" >categoy</th>
                                <th class="text-center">Action</th>
                            </tr>
                            @if ($news->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center"><p>No News has been found!</p></td>
                            </tr> 
                            @else
                                @foreach ($news as $key => $news)
                                    <tr>
                                        <td>{{ ++$key}}</td>        
                                        <td class="text-start">
                                            <p>{{ $news->news_title }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $news->category }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNewsModal" data-id="1"><i class='bx bx-message-alt-edit'></i></a>
                                                <a href="{{route('news.delete', $news->id)}}" class="btn btn-sm btn-danger"><i class='bx bx-message-square-x'></i></a>
                                            </div>
                                        </td>
                                    </tr>                             
                                @endforeach
                            @endif
                        </table>
        
                      {{-- ! Table End  --}}
        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal ওপেন করার জন্য Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Open Modal
</button>

<!-- Modal এর HTML কোড -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                এখানে তুমি যেকোনো কনটেন্ট দিতে পারো।
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection