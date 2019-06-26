@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="callout alert"   >
                <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="callout success " >
        <strong>{{session('success')}}</strong>
    </div>
@endif

@if (session('error'))
    <div class="callout alert">
        <strong>{{session('danger')}}</strong>
    </div>
@endif
