@extends('temp')

@section('title')MainPage @endsection
@section ('edit_style') 
<style>
	.title{
        font-size: 15px;
        font-weight: bold;
        align-items: center;
    
	}

</style>
@stop	

@section('main_page')
<div class="body_top">
            <div><p id="body_tit">Головна сторінка!</p></div>
            <div>
                <p id="body_tex">Тестоий сайт, з чудовими статтями на різні теми . Приємного перегляду .</p>
            </div>
            <div class="body_buttom">
                <div class="buttom">Drop</div>
            </div>
        </div>
  @endsection

@section('main_content')
  
  @foreach($reviews as $val)

  
 			<div class="sub_wraper">
                <div><p class="title">{{ $val-> title}}</p></div>
                <div >
                    <p>{{ $val->sub_title}}</p>
                </div>
                <div class="wraper_botom">
                    <div class="wraper_botom2"><a id="wraper_botom2" href="{{route('show', $val->id)}}">showe more </a></div>
                </div>
      		</div>  
  @endforeach    		
@stop

