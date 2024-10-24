<form class="d-inline" action="{{route('setLocale',$lang)}}" method="POST">
@csrf
<button type="submit" class="btn bottoneFlag">
    <img src="{{asset('vendor/blade-flags/language-'.$lang.'.svg')}}" width="20" height="20"alt="">
</button>
</form>