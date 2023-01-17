<div>
    <form method="POST" action="/store">
        @csrf
        <input type="text" name="heading">
        @error('heading')
            <p>{{$message}}</p>   
        @enderror
        <input type="text" name="link">
        @error('link')
            <p>{{$message}}</p>   
        @enderror
        <button >Submit</button>
    </form>
</div>