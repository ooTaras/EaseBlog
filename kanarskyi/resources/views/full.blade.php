@extends('temp')

@section('title') Full @stop

@section ('edit_style') 
<style>
	.cv{
        width: 80%;
        min-height: 40vh;
        margin: 5px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        border: 1px double #000;
        padding: 10px;
        align-items: center;
    }
    .cn{
        font-size: 30px;
        font-weight: bold;
       
    }
    .bot{
    	display: flex;
    	margin: 3%;	
    }

</style>
@stop		

@section('main_content')
  
  

  <div class="cv">
                <div><p class="cn">{{ $reviews-> title}}</p></div>
                <div>
                    <p>{{ $reviews->sub_title}}</p>
                </div>
                
                <div>
                    <p>{{ $reviews->text}}</p>
                </div>
                <div class="bot">
                    <div class="wraper_botom2"><a id="wraper_botom2" href="{{route('show_update', $reviews->id)}}">Редагувати</a></div>
                </div>
                <div class="bot">
                    <div class="wraper_botom2"><a id="wraper_botom2" href="{{route('delete_text', $reviews->id)}}">Видалити</a></div>
                </div>
      		</div>  
     		
@stop