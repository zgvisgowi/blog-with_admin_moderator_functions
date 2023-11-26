<section>
    <h2>Comments</h2>
    <ul class="list-unstyled">
        @foreach($comments as $comment)
            <li>
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0">Autor:{{$comment->user_id}}</h5>
                        <p>{{$comment->comment}}</p>
                        <div class="mb-2">
                            <a href="" class="text-dark"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{route('delete_Comment',$comment->id)}}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-danger btn btn-link" ><i class="bi bi-x-circle-fill"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
