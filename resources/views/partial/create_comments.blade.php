<section>
    <h2>Leave a Comment</h2>
    <form method="post" action="{{route('comment')}}">
        @csrf
        <div class="form-group">
            <input type="hidden" name="post_id" value="{{$post->id}}"/>
            <label for="commentText">Comment</label>
            <textarea class="form-control" id="commentText" rows="3" placeholder="Write your comment here" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</section>
