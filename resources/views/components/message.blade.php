<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    @if (session()->has('message'))
        <p>{{session('message')}}</p>
    @endif
</div>