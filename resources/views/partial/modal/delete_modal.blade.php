<div class="modal" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>დარწმუნებული ხართ რომ პოსტის წაშლა გინდათ</h1>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('delete_post',$post->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">დიახ</button>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">არა</button>
                </form>
            </div>
        </div>
    </div>
</div>
